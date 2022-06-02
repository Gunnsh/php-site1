<?php
class Account{ // создаем класс Account
    private $sum = 0; // создаем свойство с доступом private и присваиваем значение 0 (по умолчанию)
    function __construct($sum){ 
        $this->sum = $sum; // присваиваем значение параметра метода свойству обьекта
    }
    function getSumFrom($otherAccount, $money){ // метод с двумя параметрами
        $otherAccount -> sum -= $money; // присваиваем результат вычета значения второго параметра метода
        // от значения свойства обьекта (стороннего) acc2
        $this -> sum += $money; // присваиваем результат суммы значения второго параметра метода
        // и значения свойства текущего обьекта
    }
    function prinSum(){
        echo "На счете $this->sum у.е.\n"; // выводим на экран значение свойства текущего обьекта
    }
}
$acc1 = new Account(100);
$acc2 = new Account(400);
 
$acc1->getSumFrom($acc2, 200);
$acc1->prinSum();    // На счете 300 у.е.
$acc2->prinSum();
?>