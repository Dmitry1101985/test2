<?php


abstract class AbstractModel
{
    protected static $table;
    protected static $class;
    protected static $bd_table;
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
        $db = new DB('localhost', static::$bd_table);
        return $db->query("SELECT * FROM " . static::$table . " ORDER BY id DESC", static::$class);
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


    public function insert(){
        $values = [];
        $cols = array_keys($this->data);

        foreach ($cols as $one){
            $values[':' . $one] = $this->data[$one];
        }

        $sql = "INSERT INTO ".static::$table." (".implode(", ", $cols).") VALUES (".implode(", ", array_keys($values)).")";
        $db = new DB('localhost',static::$bd_table);
        $db->execute($sql,$values);

    }



    public function update(){
        $data = [];

        foreach($this->data as $k=>$v){
            array_push($data, ($k.'= \''.$v.'\''));
        }

        $sql = "UPDATE ".static::$table." SET ".implode(', ',$data)." WHERE id=".$this->data['id'];
        $db = new DB('localhost',static::$bd_table);
        $db->execute($sql);
    }

    public function delete(){
        $sql = "DELETE FROM ".static::$table." WHERE id=".$this->data['id'];
        $db = new DB('localhost',static::$bd_table);
        $db->execute($sql);
    }

    public static function getColumn($column){
        $sql = "SELECT ".$column." FROM " . static::$table . " ORDER BY id DESC";
        $db = new DB('localhost',static::$bd_table);
        return $db->queryArr($sql);
    }

    public static function getOneByColumn($column, $value){

        $sql = $sql = "SELECT * FROM ".static::$table." WHERE ".$column."= :value ORDER BY id DESC";
        $params = [':value'=>$value];
        $db = new DB('localhost',static::$bd_table);
        return $db->query($sql, static::class,$params);
    }

}