<?php
/*
    * Interface có phương thức kết nối và lớp MySQLConnection triển khai giao diện này, cũng thay vì nhập trực tiếp 
class MySQLConnection gợi ý vào phương thức khởi tạo của PasswordReminder, thay vào đó chúng tôi nhập-gợi ý giao diện 
và bất kể loại cơ sở dữ liệu mà ứng dụng của bạn sử dụng, class PasswordReminder có thể dễ dàng kết nối với cơ sở dữ 
liệu mà không gặp bất kỳ sự cố nào và OCP không bị vi phạm.

 */
interface DBConnectionInterface {
    public function connect();
}
