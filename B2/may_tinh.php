
<form method="post">
    <input type="text" name="number1" placeholder="Number 1">
    <input type="text" name="number2" placeholder="Number 2">
    <input type="submit" value="cong" name="Operation">
    <input type="submit" value="tru" name="Operation">
    <input type="submit" value="nhan" name="Operation">
    <input type="submit" value="chia" name="Operation">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    switch ($_POST['Operation']) {
        case "cong":
            $result = $number1 + $number2;
            break;
        case "tru":
            $result = $number1 - $number2;
            break;
        case "nhan":
            $result = $number1 * $number2;
            break;
        case "chia":
            if ($number2 !== 0) {
                $result = $number1 / $number2;
                break;
            } else {
                echo "Loi";
            }
    }
    echo "Ket qua la: $result";
}
?>
