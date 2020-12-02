<?php
/*
    NGUYÊN TẮC PHÂN TÁCH GIAO DIỆN - Interface segregation principle
 * Khách hàng không bao giờ bị buộc phải triển khai một giao diện mà nó không sử dụng hoặc khách hàng không nên 
 bị buộc phải phụ thuộc vào các phương pháp mà họ không sử dụng.
=> Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể

 */

    class AreaCalculator {

        protected $shapes;

        public function __construct($shapes = array()) {
            $this->shapes = $shapes;
        }
        
        public function sum() {
            
            foreach($this->shapes as $shape) {
               if(is_a($shape, 'ShapeInterface')) {
                    $area[] = $shape->area();
                    continue;
                }
                throw new AreaCalculatorInvalidShapeException;
            }
            return array_sum($area);      
        }
    }

?>