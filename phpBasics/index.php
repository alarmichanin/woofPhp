<!--/
if php file consists of php code only, close tag "?>" isn't necessary
-->
<?php
//case-sensitive variables
$var = 'Hello';
$Var = 'World';
const myConst = "CONSTANT";
//concatenation and print
echo $var . " " . $Var . "!";

//float number in string type
$strNum = "1.5e4";
$boolType = true;
$intType = 10;
//overloading of "+" operator and concatenation with new line
echo "<br/>" . ($strNum + 15);
//приведення типів
echo "<br/>" . ($boolType + $intType);

//спецзначення null, коли змінна оголошена, проте, не ініціалізована
//$someVar;
//echo $someVar;

//взведення в степінь
echo "<br/>" . $intType ** 2;
//decrement and increment
$a = 11;
$b = $a;
--$a;
echo "<br/>a = $a, b = $b<br/>";
++$a;
echo "a = $a, b = $b";


$num1 = 1;
$num2 = 2;

if ($num1 < $num2) {
    echo "<br/>" . "num1 < num2";
} elseif ($num1 > $num2) {
    echo "<br/>" . "num1 > num2";
} else {
    echo "<br/>" . "num1 = num2";
}

//тернарная операция
$num3 = $num1 === $num2 ? "strictly equal" : "not equal";
echo "<br/>$num3";

// switch construction
echo "<br/>";
switch ($num2) {
    case 0:
        echo "png";
        break;
    case 1:
        echo "raw";
        break;
    case 2:
        echo "ico";
        break;
    case 3:
        echo "gif";
        break;
    default:
        echo "jpeg";
        break;
}

//match (from 8.0 PHP) construction
//echo "<br/>";
//$format = match ($num2) {
//    0 => "png",
//    1 => "raw",
//    2 => "ico",
//    3 => "gif",
//    default => "jpeg",
//};

//for, while, do..while, foreach
echo "<br/>";
for ($i = "a"; $i < "z"; $i++) {
    echo $i;
}
echo "<br/>";
$i = 65;
while ($i <= 89) {
    echo chr($i);
    $i++;
}


//2 варіанти створення масивів

$array = [1, 2, 3, 4];
$Array = array(1, 2, 3, 4);
echo "<br/>" . ($array === $Array);
//для наглядного виводу масиву з ключами, можна використовувати
//print_r
echo "<br/>";
print_r($Array);

//асоціативні масиви
$translation = ["car" => "автомобіль", "ball" => "м'яч", "keyboard" => "клавіатура"];
foreach ($translation as $eng => $ua) {
    echo "<br/>$eng => $ua";
}

//explode and implode (для посимвольного розбиття
// можна використовувати str_split, де вкажеш кількість символів,
// по скільки розбивати )
$str = "part1 part2 part3 part4";
$pieces = explode(" ", $str);
echo "<br/>";
print_r($pieces);
echo "<br/>";
printf(implode(",", $pieces));

//розіменування змінних
$var = "hello";
$hello = "world";
echo "<br/>";
printf($var . " " . $$var);

/*
 * Допускаются следующие приведения типов:

(int), (integer) - приведение к int
(bool), (boolean) - приведение к bool
(float), (double), (real) - приведение к float
(string) - приведение к string
(array) - приведение к array
(object) - приведение к object
(unset) - приведение к NULL
 * */
$newVar = "3";
$tmpInt = (int)$newVar;
$tmpBool = (bool)$newVar;
$tmpObj = (object)$newVar;
echo "<br/>";
var_dump($tmpInt);
echo "<br/>";
var_dump($tmpBool);
echo "<br/>";
var_dump($tmpObj);

//functions

function myFunc($name = "Default name")
{
    echo "<br />Nice name, $name!";
}

myFunc();
myFunc("Roman");

//змінна кількість параметрів + анонімна функція присвоєна змінній
$average = function (...$nums) {
    return array_sum($nums) / count($nums);
};

echo "<br/>" . $average(1, 2, 3, 4, 5);

//замыкания (анонімна функція може юзати змінні із зовнішнього скопу)
$num1 = 2;
$num2 = 3;

$closureSum = function ($num) use ($num1, $num2) {
    return $num1 + $num2 + $num;
};

$sum = $closureSum(5);
echo "<br/>$sum";

/* аналогічно дане замикання можна переписати через
стрілочну функцію (з PHP 7.4)

$closureSum =fn($num)=>$num1 + $num2 + $num;
$res = $closureSum(10);
echo "<br/>$res";
*/

abstract class People
{
    protected $name, $age;

    function __construct($name = "Default name", $age = 10)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //викликається коли на об'єкт не залишиться
    // посилань у програмі, для звільнення ресурсів
    function __destruct()
    {
        echo "<br/>People destructor call<br/>";
    }
}

class Worker extends People
{
    protected $salary;

    function __construct($name = "Default name", $age = 10, $salary = 1500)
    {
        //можемо використовувати назву батьківського класу
        // напряму, слово parent заміняє назву класу
        if (gettype($name) == "string" && gettype($age) == "integer") {
            if ($age <= 0) {
                throw new Exception("Вік повинен бути більше 0");
            }
            parent::__construct($name, $age);
        } else {
            throw new Exception("Ім'я повинне бути рядкового тип, Вік - цілочисельний тип");
        }
        if (gettype($salary) == "integer" || gettype($salary) == "double") {
            if ($salary <= 0) {
                throw new Exception("Зарплатня повинна бути більше 0");
            }
            $this->salary = $salary;
        } else {
            throw new Exception("Зарплатня повинна бути цілочисельного типу чи числом із плаваючою крапкою");
        }

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (gettype($name) == "string") {
            $this->name = $name;
        } else {
            throw new Exception("Ім'я повинне бути рядкового типу");
        }
    }

    public function getAge()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if (gettype($age) == "integer") {
            if ($age > 0) {
                $this->age = $age;
            } else {
                throw new Exception("Вік повинен бути більше 0");
            }
        } else {
            throw new Exception("Вік повинен бути цілочисельного типу");
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        if (gettype($salary) == "integer" || gettype($salary) == "double") {
            if ($salary > 0) {
                $this->salary = $salary;
            } else {
                throw new Exception("Зарплатня повинна бути більше 0");
            }
        } else {
            throw new Exception("Зарплатня повинна бути чисельним типом");
        }
    }

    public function showInfo()
    {
        echo "<br/>Ім'я: $this->name<br/>Вік: $this->age<br/>Зарплатня: $this->salary";
    }

    function __destruct()
    {
        echo "<br/>Worker destructor call<br/>";
    }
}

try {
    $person = new Worker("Roman", 19, 2000);
    $person->showInfo();
} catch (Exception $e) {
    echo "<br/>" . $e->getMessage();
}

class Singletone
{
    private static $instance = null;
    private $someField;

    protected function __construct()
    {
    }

    //створює копію об'єкта
    protected function __clone()
    {
    }

    //Функцию __wakeup предполагается использовать для пересоздания
    // соединений с базами данных, которые потеряются при сериализации и десериализации
    protected function __wakeup()
    {
    }

    //static дозволить без створення екземляру звернутися до методу
    public static function getInstance()
    {
        if(self::$instance===null){
            self::$instance=new self();
        }
        return self::$instance;
    }

    public function getSomeField()
    {
        return $this->someField;
    }

    public function setSomeField($var)
    {
        $this->someField = $var;
    }
}

$instance1 = Singletone::getInstance();
$instance2 = Singletone::getInstance();
$instance1->setSomeField("Hello");
echo "<br/>";
if($instance1===$instance2){
    print_r($instance2);
}else{
    echo "Об'єкти різні";
}

