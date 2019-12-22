<?php
    class Car {
        public $color = "black";
        public $wheel = 4;
        //建構子
        // function __construct(){
        //     echo  "HELLO";
        // }
        function move(){
            // echo "GOGOGO";
            return "GOGOGO";
        }
        function test($c){
            $this->color = $c;
            return $c;
        }
        static function hello($x){
            // $x = "hello";
            echo $x;
            //不可使用 $this
        }
    }
    class Truck extends Car{
        
    }
    echo Car::hello("123");
    echo Truck::hello("asdf");
    $nissan = new Truck;
    // echo $nissan -> color;
    // echo $nissan -> move();
    // echo $nissan -> test("orange");
    

    $benz = new Car;
    // echo $benz->color;
    // echo $benz->wheel;
    // $a = $benz->move();
    // echo $a;
    // echo $benz->move();
    // $myCar_color = $benz->test();

    // echo $myCar_color;

    // $audi = new Car;
    // echo $audi->test("green");
    // echo $audi->test("pink");
    // echo $audi->test("blue");

    // $toyota = new Car;
    // $toyota->color ="white";
    // echo $toyota->color;

 
