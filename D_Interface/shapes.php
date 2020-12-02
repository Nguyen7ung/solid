<?php
    include 'AreaCalculator.php';
    include 'SumCalculatorOutputter.php';
    include 'ShapeInterface.php';
    
    class Circle implements ShapeInterface {
        public $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }
        
        public function area() {
            return pi() * pow($this->radius, 2);
        }
    }

    class Square implements ShapeInterface {
        public $length;

        public function __construct($length) {
            $this->length = $length;
        }
        
        public function area() {
            return pow($this->length, 2);
        }
    }
    
    class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface {
        public function area() {
            // calculate the surface area of the cuboid
        }

        public function volume() {
            // calculate the volume of the cuboid
        }
        
        public function calculate() {
            return $this->area() + $this->volume();
        }
    }
    
    $shapes = array(
        //new Circle(2),
        new Square(5),
        new Square(6)
    );

    $areas = new AreaCalculator($shapes);
    $output = new SumCalculatorOutputter($areas->sum());
    echo $output->JSON();
    
?>