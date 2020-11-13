
<?php
if ($_SERVER ["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    if ($_GET ["search"]) {
        echo tinhtong($_GET ["search"]);
    }
}
else {
    ?>
    <form method="get">
        <input type="text" name="search" placeholder="nhapvoday"> <br>
        <button type="submit" id ="submit" > tinh</button>
    </form>
<?php
}

function tinhtong($search){
    $sum = 0;
    for ($i = 0; $i < $search; $i++) {
        if ($sum + $i > $search) break;
        else {
            $sum += $i;
        }
    }
    return $sum;
}
?>
