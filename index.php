<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">
        Name:<input type="text" name="Username"/>
        Age:<input type="number" name="age"/>
        <br>

        num1:<input type="number" name="num1"/>
        num2:<input type="number" name="num2"/>
        <br>
        
        color:<input type="text" name="color"/>
        food:<input type="text" name="food"/>
        situation:<input type="text" name="situation"/>
        <button>Submit</button>
        
    </form>
    <form action="index.php" method="post">
        Name:<input type="text" name="Username"/>
        Age:<input type="number" name="age"/>
        <br>

        num1:<input type="number" name="num1"/>
        num2:<input type="number" name="num2"/>
        <br>
        
        color:<input type="text" name="color"/>
        food:<input type="text" name="food"/>-
        situation:<input type="text" name="situation"/>
        apples:<input type="checkbox" name="fruits[]" value="apples"/>
        pearls:<input type="checkbox" name="fruits[]" value="pearls"/>
        oranges:<input type="checkbox" name="fruits[]" value="oranges"/>

        <!-- Assocaiative  arrays -->
        <input type="text" name="student"/>
        <br>
        Number1:<input type="number" step="0.1" name="number1"/>
        <br>
        Number2:<input type="number" name="number2"/>
        <br>
        oper:<input type="text" name="oper"/>

     <!-- step=0.1 making to take decimal numbers with 0.1, 0.2 -->

        <button>Submit</button>
        <!-- when we use post,we also we have to use post in php,
        with get , we will get parameters at end of url which we submitted, but 
        with post, the data sent as request body so not visible in url, so we use
        it more secure times and not idempotent time(when we get same result everytime we searched with that url) -->
        
    </form>
    <?php
    echo "Hello";
    echo strtoupper('hello');
    $name='srikanth';
    echo $name[0]='H';
    echo strtolower('hello');
    $Greet="My name is Srikanth";
    echo str_replace("Srikanth","Shreeks", $Greet);
    echo str_replace("Srika","Shreeks", $Greet);
    substr($Greet, 5,3);
    // strlen
    echo 5+9;
    echo 4+5*9;
    echo (4+5)*9;
    $num=0;
    $num+=25;
    echo $num;
    echo abs(-100);
    echo pow(2,4);
    echo sqrt(144);
    echo max(2,10);
// min

    echo round(2.9);
    echo (2.9);
    echo floor(2.9);
    echo "<br>";
    echo "<h1>Newline</h1>";
    echo "<br>";
    echo $_GET['Username'];
    echo "<br>";
    echo $_GET['age'];
    echo $_GET["num1"]+$_GET["num2"];
    $color=$_GET["color"];
    $food=$_GET["food"] ;
    $situation=$_GET["situation"];
    echo " $color are red";
    echo "I love eating $food ";
    echo "Every is  $situation";
    // 
    $movies=array('rrr','bahubali','magadeera','eega',1,2);

    $movies[0]=2;
    $movies[10]='false';

    echo count($movies);
    $fruits=$_POST['fruits'];
    echo $fruits[0];
    // Assocaiative  arrays 
    $studentGrades=array("jimmy"=>9,"tomy"=>8,"rosy"=>9.4);
    echo $studentGrades[$_POST['student']];
    echo "<br>";
    // functions
    function greet($person,$place){
        echo "Hi $person ,let's go $place";
    }
    greet('Srikanth',"Library");
    echo "<br>";
    greet("Sannu","movie");
    // return
    echo '<br>';

    function cube($num){
        return $num*$num*$num;
    }

    echo cube(3);

    echo '<br>';
    $isMale=true;
    $tall=false;
    $others=true;

    if($isMale){
        if($tall){
            echo 'tall male';
        }
        else{
            echo "male but not tall";
        }
    }elseif($others){
        echo "others";
    }
    else{
        if($tall){
            echo "tall not male";
        }
        else{
            echo "not male, not tall";
        }
    }
    // && , || ,! for AND, OR,NOT
    // >,>=,<,<=,==,!= also , you know what they for
    $num1=10;
    $num2=9;
    

    // if($num1>$num2){
    //     return $num1;
    // }else{
    //     return $num2;
    // }
    echo "hi";
    echo "<br>";



    $oper=$_POST['oper'];
    $number1=$_POST["number1"];
    $number2=$_POST['number2'];
    function calculat($numb1,$numb2,$oper){
    if($oper=='+'){
return $numb1+$numb2;
    }
    elseif($oper=='-'){
        return $numb1-$numb2;
            }
    elseif($oper=='*'){
        return $numb1*$numb2;
                    }
    elseif($oper=='/'){
       return $numb1/$numb2;
            }
                    
            
    
    
}
function calculate($numb1,$numb2,$oper){
switch($_POST['oper']){
    case '+':echo $numb1+$numb2;
    echo "yes";
    break;
    case '-':echo $numb1-$numb2;
    break;
    case '*':echo $numb1*$numb2;
    break;
    case '/':echo $numb1/$numb2;
    break;
    default:echo "invalid";

}}
echo calculate($number1,$number2,$oper);
echo "ji" ;
// while loops
$index=1;
while($index<5){
    echo "$index <br>";
    $index++;

}
// do_while
$index=1;

do{
    echo "$index <br>";
    $index++;

}
while($index<9);
// for loops
for($index=0;$index<3;$index++){
    echo $index;
    echo '<br>';
}
$luckynum=array(1,2,3,45,6,7);
for($i=0;$i<count($luckynum);$i++){
    echo $luckynum[$i];
    echo '<br>';
}
include "header.html";
include "footer.html";
$textColor='red';
$textCount=100;
include "article.php";
include "utilize.php";
echo $PersonName;
echo "<br>";
echo language();
// class is a custom datatype that used for defining real world entities,class is a blueprint
// an object is the instance of a class
echo "<br>";
class Book{
var $title;
var $noOfPages;
   var $cost;
}
$book1=new Book;
$book1->title="hary";
$book1->noOfPages=120;
$book1->cost=20;
echo $book1->title;
echo "<br>";

$book2=new Book;
$book2->title="active";
$book2->noOfPages=140;
$book2->cost=30;
 echo $book2->title;

// Constructor
// constructor is called when instance created
class Magazine{
    var $title;
    var $noOfPages;
       var $cost;
       function __construct($name){
        echo "hey Guys";
        echo "Hi $name";
       }
    }
$book1=new Magazine('hrithik');
$book2=new Magazine("harish");
// if we need to do for many things, many instances created then initialising for every instnace become tedious
// so using constructor we initilise values
// Create
class Student{
    function __construct($Maths,$webDev,$ReactJs){
        $this->Maths=$Maths;
        $this->webDev=$webDev;
        $this->ReactJs=$ReactJs;
    }
    function eligible(){
        if($this->ReactJs=="A+"){
            echo "eligible";
        }
    }
}
$student1=new Student("B","A","A+");
$student2=new Student("A","B","A++");
echo "<br>";

echo $student1->Maths;
echo "<br>";

echo $student2->Maths;
// update
$student2->Maths="A++";
echo $student2->Maths;
$student1->eligible();
$student2->eligible();
// need to learn setters and getters












?>
</body>
</html>