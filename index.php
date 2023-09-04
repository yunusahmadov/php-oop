<?php 

class Person 
{
    // поля без спецификаторов доступа "public,protected,private" писать нельзя
    public $name;
    public $age;
    //Конструктор создается так
    //Также можно указывать типы данных
    function __construct(string $name="Empty",int $age=0){
        $this->name=$name;
        $this->age=$age;
    }


    function getInfo(){
    // Нужно обращаться через стрелку т.к точка для склеивания строк
        echo "Name :" .$this->name. "Age: ". "$this->age";
    }
}

//Наследование 
class Student extends Person{
    public  $average;
    //Cтатичное поле
    public static $count=0;
    function __construct(string $name="Empty",int $age=0,int $average=0){
        //Берем из родителя конструктор
        parent::__construct($name,$age);
        $this->average=$average;
        //Self с помощью него обращаемся к статичному полю 
        self::$count++;
    }
    static function showCount(){
        echo self::$count;
    }
    //Теперь getInfo не зависит от родительского getInfo
   function getInfo(){
        return "Name :" .$this->name. "Age: ". $this->age. "Average:" .$this->average;
    }


}

// $person = new Person;
//  $person->name="Yunus";
//  $person->age=21;
// $person->getInfo();



// $person = new Person("Yunus",21);

$student = new Student;
 $student->name="Yunus";
 $student->age=21;
 $student ->average=5;
echo $student->getInfo();
 echo "<br>";
$student=new Student("Yunus",21,5);
echo $student->getInfo();
echo "<br>";

// echo Student::$count;
Student::showCount();

?>