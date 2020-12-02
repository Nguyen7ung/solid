<?php
/* 
    * Vẫn sử dụng ví dụ về hình dạng, chúng ta biết rằng chúng tôi cũng có các hình dạng rắn, 
    vì vậy chúng ta cũng muốn tính thể tích của hình dạng, nên có thể thêm một hợp đồng khác vào ShapeInterface

*/
    
    interface ShapeInterface {
        public function area();
        
    //  public function volume(); 
    
    /* 
     * Phương thức volume() ở trên phạm nguyên tắc
     * Bất kỳ hình dạng nào chúng ta tạo đều phải triển khai phương thức thể tích, nhưng chúng ta biết rằng hình vuông là 
    hình phẳng và chúng không có thể tích, vì vậy giao diện này sẽ buộc lớp Square triển khai một phương thức mà nó không được sử dụng.
     * ISP nói không với điều này, thay vào đó bạn có thể tạo một giao diện khác gọi là SolidShapeInterface 
    có hợp đồng khối lượng và các hình dạng rắn như hình khối, v.v. có thể triển khai giao diện này:
        
     */
}
    interface SolidShapeInterface {
        public function volume();
    }
/*
    * Đây là một cách tiếp cận tốt hơn nhiều, nhưng một cạm bẫy cần chú ý là khi nhập các giao diện này, 
   thay vì sử dụng ShapeInterface hoặc SolidShapeInterface.
   Bạn có thể tạo một giao diện khác, có thể là ManageShapeInterface và triển khai nó trên cả hình dạng phẳng và 
   hình khối, bằng cách này bạn có thể dễ dàng thấy rằng nó có một API duy nhất để quản lý các hình dạng. Ví dụ:
 */
    interface ManageShapeInterface {
        public function calculate();
    }
/*
    * Bây giờ trong class AreaCalculator, chúng ta có thể dễ dàng thay thế các cuộc gọi đến phương thức area() với 
    calculate() và cũng kiểm tra nếu đối tượng là một thể hiện của các ManageShapeInterface 
    và không phải là ShapeInterface .
 */