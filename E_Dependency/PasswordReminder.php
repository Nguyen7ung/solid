<?php

/*
    NGUYÊN TẮC ĐẢO NGƯỢC PHỤ THUỘC - Dependency Inversion principle
    1. Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. Cả 2 nên phụ thuộc vào abstraction.
    2. Interface (abstraction) không nên phụ thuộc vào chi tiết, mà ngược lại.
    (Các class giao tiếp với nhau thông qua interface, không phải thông qua implementation.)
 */
class PasswordReminder_Error {
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
    
}
/*
    * Đầu tiên, MySQLConnection là mô-đun cấp thấp trong khi PasswordReminder là cấp cao, nhưng theo định nghĩa của 
D trong SOLID nói rằng Depend (Phụ thuộc) vào Abstraction chứ không dựa trên các concretions (cụ thể), 
đoạn mã trên vi phạm nguyên tắc này vì lớp PasswordReminder đang bị buộc phải phụ thuộc vào các class MySqlConnection.
Sau đó, nếu bạn thay đổi cơ sở dữ liệu, bạn cũng sẽ phải chỉnh sửa class PasswordReminder và do đó vi phạm nguyên tắc Đóng mở .

    * Class PasswordReminder không nên quan tâm đến việc ứng dụng của bạn sử dụng cơ sở dữ liệu nào, 
để khắc phục điều này một lần nữa, chúng ta nên “tạo một interface”, vì các mô-đun cấp cao và cấp thấp phải 
phụ thuộc vào tính trừu tượng, chúng ta có thể tạo một interface:

*/
class MySQLConnection implements DBConnectionInterface {
    public function connect() {
        return "Database connection";
    }
}

class PasswordReminder {
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}
/*
    * Theo đoạn mã nhỏ ở trên, bây giờ bạn có thể thấy rằng cả mô-đun cấp cao và cấp thấp đều phụ thuộc vào 
abstraction (Tính trừu tượng).

 */