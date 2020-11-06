<?php
abstract class FactoryAbstract {
    protected static $instances = array();
    public static function getInstance() {
        $className = static :: getClassName();
        if (!self::$instances[$className] instanceof $className) {
            self :: $instances[$className] = new $className(); // object of class name 
        }
        return self::$instances[$className];
    }
    public static function removeInstance() {
        $className = static::getClassName();
        if (array_key_exists($className, self::$instances)) {
            unset(self::$instances[$className]);
        }
    }
    final protected static function getClassName() {
        echo get_called_class();
        echo PHP_EOL;
        return get_called_class();
    } 
    protected function __construct() { }
    final protected function __clone() { }
}
abstract class Factory extends FactoryAbstract {
    final public static function getInstance()
    {
        return parent::getInstance();
    }
    final public static function removeInstance()
    {
        parent::removeInstance();
    }
}
class FirstProduct extends Factory{
    public $a = [];
}
class SecondProduct extends FirstProduct {}

FirstProduct::getInstance()->a[] = 1; // new object /1
SecondProduct::getInstance()->a[] = 2; //2
FirstProduct::getInstance()->a[] = 3; // return old instance not create 3
SecondProduct::getInstance()->a[] = 4; //4
print_r(FirstProduct::getInstance()->a); //5
// array(1, 3)
print_r(SecondProduct::getInstance()->a);//6
// array(2, 4)

// dont push in main 
// dev -> branch 
// function+ dp + himanshu_dp : name convention, what sensible variable name for branch 