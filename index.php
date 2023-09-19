<?php
class Person {
    public $name, $sex;
 
    function __construct($name,$sex){
        $this->name = $name;
        $this->sex = $sex;
    }

    function getName(){
        return $this->name;
    }

}
 
$newObj = new Person("Tim","girl");

echo $newObj->getName();

?>