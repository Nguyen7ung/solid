<?php
/*
    NGUYÊN TẮC ĐÓNG MỞ - Open-closed Principle

 * Các đối tượng hoặc thực thể phải mở để mở rộng, nhưng đóng để sửa đổi.
 * Điều này đơn giản có nghĩa là một lớp có thể dễ dàng mở rộng bằng kế thừa mà không cần sửa đổi chính lớp đó. 
 * Chúng ta hãy xem xét class AreaCalculator , đặc biệt là phương thức sum của nó .
 */

    class AreaCalculator {

        protected $shapes;

        public function __construct($shapes = array()) {
            $this->shapes = $shapes;
        }
        /* 
           
         * Nếu chúng ta muốn phương thức sum có thể tính tổng diện tích của nhiều hình hơn, 
        chúng ta sẽ phải thêm nhiều khối if / else hơn và điều đó đi ngược lại với nguyên tắc Mở-đóng.
        Một cách chúng ta có thể làm cho phương thức sum này tốt hơn là loại bỏ logic tính diện tích của mỗi hình 
        dạng ra khỏi phương thức sum và gắn nó vào class của hình dạng.
         
         * Trong phương pháp tính tổng AreaCalculator của chúng ta, chúng ta có thể kiểm tra xem các hình dạng được 
        cung cấp có thực sự là bản sao của ShapeInterface hay không, nếu không sẽ đưa ra một ngoại lệ:
         
        */
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