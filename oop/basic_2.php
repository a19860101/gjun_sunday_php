<?php 
    class DB {
        public $a = "PUBLIC";
        private $b = "PRIVATE";
        protected $c = "PROTECTED";

        function xxx(){
            echo $this->a;
            echo $this->b;
            echo $this->c;
        }
    }

    class ABC extends DB {
        function aaa(){
            echo $this->a;
            echo $this->b;
            echo $this->c;
        }
    }

    $test = new DB;
    // echo $test->a;
    // echo $test->b;
    // echo $test->c;
    // echo $test->xxx();

    $test2 = new ABC;
    echo $test2->aaa();