
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['btn'])) {
    if ($_GET["User"] == "admin" && $_GET["Password"] == "admin") {
        echo "hello";
    } else
        echo "bye";
}

else {
    ?>
    <form method="get">
    <h1>Thanh vien C11</h1>
    <input type="text" name="User" placeholder="Nhap vao day"> <br>
    <input type="password" name="Password" placeholder="Nhap vao day"> <br>
    <button type="submit" name="btn" id="submit">Dang nhap</button>
</form>
<?php
}
?>
