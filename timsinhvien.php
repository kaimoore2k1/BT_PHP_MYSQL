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
        <p> <strong>Tìm sinh viên</strong></p> <br>
        <form method="POST" name="themsinhvien">
            <label for="timkiem">Nhập tên hoặc MSSV:</label>
            <input type="text" name="timkiem" id="timkiem"> <br> <br>
            <input type="submit" name="submit" value="Tìm">
        </form>
        <br>
        <p> <strong>Thông tin sinh viên</strong></p> <br>
        <table>
            <tr>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th></th>
            </tr>
            <tr>
                <td>19521478</td>
                <td>Nguyễn Nhựt Hào</td>
                <td><a href="suasinhvien.php">Sửa</a></td>
            </tr>
        </table>
    </article>
    <footer>
        Copyright 2021
    </footer>
</body>
</html>