<?php


abstract class AbstractModel
{
    protected static $table;
    protected static $class;
    /*
     * привязываем переменную к классу вцелом. Данная переменная пренадлежит классу, а не
     * его объектам. Нужно получать это свойство до того, как объект создан.
     */

    public static function getAll(){
        $db = new DB('localhost','news');
        return $db->getAllFromDb("SELECT * FROM " . static::$table, static::$class);
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

    public static function getOne($id){
        $db = new DB('localhost','news');// id мы получим от пользователя через ГЕТ
        return $db->getOneFromDb("SELECT * FROM " . static::$table . " WHERE id=".$id, static::$class);
    }

}