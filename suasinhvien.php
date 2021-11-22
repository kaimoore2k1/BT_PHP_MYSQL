<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>QLSV</title>
</head>
<body>
    <header>
        <h1>Chương trình quản lý sinh viên</h1>
    </header>
    <nav>
        <ul>
            <li><a href="lietkesinhvien.php">Liệt kê sinh viên</a></li>
            <li><a href="themsinhvien.php">Thêm sinh viên</a></li>
            <li><a href="timsinhvien.php">Tìm sinh viên</a></li>
            <li><a href="xoasinhvien.php">Xóa sinh viên</a></li>
        </ul>
    </nav>
    <article>
        <p> <strong>Sửa sinh viên</strong></p> <br>
        <form action="lietkesinhvien.php" method="POST" name="themsinhvien">
            <label for="hoten">Họ tên:</label>
            <input type="text" name="hoten" id="hoten"> <br> <br>
            <label for="mssv">MSSV:</label>
            <input type="text" name="mssv" id="mssv"> <br> <br>
            <input type="submit" name="submit" value="Cập nhập">
        </form>
    </article>
    <footer>
        Copyright 2021
    </footer>
</body>
</html>