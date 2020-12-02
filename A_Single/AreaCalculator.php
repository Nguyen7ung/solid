<?php
/* 
 * NGUYÊN TẮC MỘT VAI TRÒ - Single-responsibility Principle
 * SRP viết tắt - nguyên tắc này nói rằng:
    "Một class nên có một và chỉ một lý do để thay đổi, nghĩa là một class chỉ nên có một công việc."

*/
/*
    Vấn đề với phương thức output() là Bộ tính toán vùng xử lý logic để xuất dữ liệu. 
    Do đó, điều gì sẽ xảy ra nếu người dùng muốn xuất dữ liệu dưới dạng json hoặc thứ gì đó khác?
 
    Tất cả logic đó sẽ được xử lý bởi lớp AreaCalculator , đây là điều mà SRP cau mày chống lại; 
    các AreaCalculator lớp chỉ nên tổng hợp các lĩnh vực hình cung cấp, nó không nên quan tâm xem người dùng muốn json hoặc HTML.
 
    Vì vậy, để khắc phục điều này, bạn có thể tạo một class SumCalculatorOutputter và sử dụng lớp này để xử lý bất kỳ 
    logic nào bạn cần để xử lý cách hiển thị tổng các vùng của tất cả các hình dạng đã cung cấp.
 */

    class AreaCalculator {

        protected $shapes;

        public function __construct($shapes = array()) {
            $this->shapes = $shapes;
        }

        public function sum() {
            
            foreach($this->shapes as $shape) {
                if(is_a($shape, 'Square')) {
                    $area[] = pow($shape->length, 2);
                } else if(is_a($shape, 'Circle')) {
                    $area[] = pi() * pow($shape->radius, 2);
                }
            }
            return array_sum($area);      
        }

        public function output() {
            return implode('', array("", "Tổng diện tích của hình dạng đã cho là: ", $this->sum(), ""));
        }
    }

?>