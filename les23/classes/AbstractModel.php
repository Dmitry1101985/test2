<?php


abstract class AbstractModel
{
    protected static $table;
    protected static $class;
    protected $data = [];
    /*
     * привязываем переменную к классу вцелом. Данная переменная пренадлежит классу, а не
     * его объектам. Нужно получать это свойство до того, как объект создан.
     */

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name){
        return $this->data[$name];
    }

    public static function getAll(){
        $db = new DB('localhost','news');
        return $db->query("SELECT * FROM " . static::$table, static::$class);
    }
    /*
     * в данном случае мы используем переменную static::$table.
     * У этого класса дочерним классом будет News. Если использовать self::$table (т.к. метод
     * статический), то при вызове метода будет использоваться переменная, указанная в абстрактном классе,
     * а не в том, который ее наследует. Поэтому мы объявляем такую же переменную в дочернем классе
     * (protected static $table) и там задаем ее значение, а в методе абстрактного класса указываем
     * static::$table.
     * self:: всегда обращается к тому классу, в котором написан
     *
     * То же самое делаем с переменной $class. В каждом дочернем класса она будет иметь свое значение
     */

    public static function getOneById($id){
        $params = [':id' => $id];
        $db = new DB('localhost','news');// id мы получим от пользователя через ГЕТ
        return $db->query("SELECT * FROM " . static::$table . " WHERE id=:id", static::$class,$params);
    }

    public function insert(){
        $values = [];
        $cols = array_keys($this->data);

        foreach ($cols as $one){
            $values[':' . $one] = $this->data[$one];
        }

        $sql = "INSERT INTO ".static::$table." (".implode(", ", $cols).") VALUES (".implode(", ", array_keys($values)).")";
        $db = new DB('localhost','news');
        $db->execute($sql,$values);

    }

    public static function getColumnId(){
        $sql = "SELECT id FROM ".static::$table;
        $db = new DB('localhost','news');
        return $db->queryArr($sql);
    }

    public function update(){
        $data = [];

        foreach($this->data as $k=>$v){
            array_push($data, ($k.'= \''.$v.'\''));
        }

        $sql = "UPDATE ".static::$table." SET ".implode(', ',$data)." WHERE id=".$this->data['id'];
        $db = new DB('localhost','news');
        $db->execute($sql);
    }

}