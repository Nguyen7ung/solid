<?php
/* 
 * 
 * Bây giờ chúng ta có thể tạo một class hình dạng khác và chuyển nó vào khi tính tổng mà không phá vỡ mã của chúng ta. 
Tuy nhiên, bây giờ một vấn đề khác nảy sinh, làm thế nào chúng ta biết rằng đối tượng được truyền vào AreaCalculator 
thực sự là một hình dạng hoặc nếu hình dạng có một phương thức được đặt tên là aree() ?
Interface là một phần không thể thiếu của SOLID , một ví dụ nhanh là chúng tôi tạo một interface, 
mọi hình dạng đều thực hiện:
 
*/

interface ShapeInterface {
    public function area();
}
