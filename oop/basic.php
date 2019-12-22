<?php
    class Car {
        public $color = "black";
        public $wheel = 4;
    }

    $benz = new Car;
    echo $benz->color;
    echo $benz->wheel;

    $audi = new Car;
    $audi->color = "red";
    echo $audi->color;

    $toyota = new Car;
    $toyota->color ="white";
    echo $toyota->color;

