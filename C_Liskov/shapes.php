<?php
    include 'AreaCalculator.php';
    include 'SumCalculatorOutputter.php';
    include 'ShapeInterface.php';
    include 'VolumeCalculator.php';
    
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
    
    $shapes = array(
        new Circle(2),
        new Square(5),
        new Square(6)
    );
    
    $solidShapes = array(
        new Square(4),
        new Square(8)
    );
    /*
    $areas = new AreaCalculator($shapes);
    $output = new SumCalculatorOutputter($areas->sum());
    echo $output->JSON();
    */
    
    /* 
     * Nếu chúng tôi cố gắng chạy một ví dụ như thế này:
    Chương trình không squawk, nhưng khi chúng ta gọi phương thức HTML trên đối tượng $output2, 
    chúng ta gặp lỗi E_NOTICE thông báo cho chúng ta về chuyển đổi mảng thành chuỗi.
    Để khắc phục điều này, thay vì trả về một mảng từ phương thức tính tổng của lớp VolumeCalculator , bạn chỉ cần:
    
        public function sum() {
        // logic to calculate the volumes and then return and array of output
        return $summedData;
        }
    */
    $areas = new AreaCalculator($shapes);
    $volumes = new VolumeCalculator($solidShapes);

    $output = new SumCalculatorOutputter($areas);
    $output2 = new SumCalculatorOutputter($volumes);    
    echo $output->JSON();
?>