<?php
    include "AreaCalculator.php";
    include "SumCalculatorOutputter.php";
    
    class Circle {
        public $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }
    }

    class Square {
        public $length;

        public function __construct($length) {
            $this->length = $length;
        }
    }
    
    $shapes = array(
        new Circle(2),
        new Square(5),
        new Square(6)
    );

    $areas = new AreaCalculator($shapes);
    /* Cách 1: Không thỏa nguyên tắc Single-responsibility Principle */ 
    //echo $areas->output();
    
    /* Cách 2: Đáp ứng nguyên tắc Single-responsibility Principle */
    $output = new SumCalculatorOutputter($areas->sum());
    echo $output->JSON();
    echo $output->HAML();
    echo $output->HTML();
    echo $output->JADE();
    
?>