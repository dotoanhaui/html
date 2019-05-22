<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Hằng số dùng để chứa thông tin
        khác vs biến trong quá trình chạy thì biến sẽ thay đổi giá trị
        còn hằng thì không thay đổi giá trị
        khai báo hằng constant: define("tên hằng số", "giá trị của hằng số");
        quy tắc khai báo tên hằng số:
            khác vs biến thì cần $ để bắt đầu
            hằng số chỉ nên chứa số và chữ
            hằng số thì nên viết hoa
    </pre>

    <?php
        define("USERNAME", "nguyen do toan");
        define("USERID", "123456789");
        echo "<br>" . USERNAME;
        echo "<br>" . USERID;
    ?>
</body>
</html>