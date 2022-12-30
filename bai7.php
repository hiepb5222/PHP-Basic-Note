<?php
//trait

trait Trait_1{
    function say_hello(){
        echo 'Hello';
    }
    function say_hello_1(){
        echo 'Hello hiep';
    }
}

trait Trait_2{
    function say_bye(){
        echo 'Bye';
    }

    function say_bye_1(){
        echo 'Bye Hang';
    }
}

class Trait_ex{
    use Trait_1;
    use Trait_2;
    use Trait_1, Trait_2{
        Trait_1::say_hello_1 insteadOf Trait_2;
        Trait_2::say_bye_1 insteadOf Trait_1;
    }
    use Trait_2{
        say_bye as public sayHang;
    }

}
$ex= new Trait_ex();
$ex->say_hello_1();
$ex->say_bye_1();
$ex->sayHang();


//anonymous class





?>