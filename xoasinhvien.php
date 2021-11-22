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
        <p> <strong>Xóa sinh viên</strong></p> <br>
        <form action="lietkesinhvien.php" method="POST" name="xoasinhvien">
            <input type="text" placeholder="Nhập tên SV / MSSV" name="tencanxoa" id="tencanxoa"> <br> <br>
            <input type="submit" name="btn_xoa" value="Xóa" id="btn_xoa">
        </form>
        <div class="returnkq">
            <li></li>
        </div>
    </article>
    <footer>
        Copyright 2021
    </footer>
    <script src="script.js"></script>
</body>
</html>