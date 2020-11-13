<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <input type="text" name="number2" placeholder="number2">
    <input type="submit" name="Operation" value="cong">
    <input type="submit" name="Operation" value="tru">
    <input type="submit" name="Operation" value="nhan">
    <input type="submit" name="Operation" value="chia">
</form>
<?php
if($_SERVER["REQUEST_METHOD" == "POST"] ){
    $number1= $_POST["numbet1"];
    $number2= $_POST["numbet2"];
    switch ($_POST["Operation"]){
        case 'cong':
            $result =$number1 + $number2;
            break;
        case 'tru':
            $result =$number1 - $number2;
            break;
        case 'nhan':
            $result =$number1*$number2;
            break;
        case 'chia':
            if($number2 !==0){
                $result = $number1/$number2;
                break;
            }
            else {
                echo 'loi';
            }
    }
    echo "ket qua la :$result ";
}
?>
