<?php
session_start();
include('../database/sql.php');

// $id     =   $_GET['p_id'];
if (isset($_GET['p_id']) && $_GET['p_id'] != "") {
    $sql    = "SELECT *FROM product WHERE p_id = '" . $_GET['p_id'] . "'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_assoc($result);
    
    $p_name    = $row['p_name'];
    $p_cauhinh = $row['p_cauhinh'];
    $p_gia     = $row['p_gia'];
    $p_img     = $row['p_img'];
    $p_cauhinh = $row['p_cauhinh'];
    $p_ram     = $row['p_ram'];
    $p_hdd     = $row['p_hdd'];
    $p_id      = $row['p_id'];
    
    $cartArray = array(
        $p_name => array(
            'p_name' => $p_name,
            'p_cauhinh' => $p_cauhinh,
            'p_gia' => $p_gia,
            'quantity' => 1,
            'p_img' => $p_img,
            'p_cauhinh' => $p_cauhinh,
            'p_ram' => $p_ram,
            'p_hdd' => $p_hdd,
            'p_id' => $p_id
        )
    );
    
    if (empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status                    = "<div class='box'>Bạn đã thêm sản phẩm vào giỏ hàng!</div>";
    } else {
        //Hàm array_keys() sẽ trả về một hoặc một tập hợp các khóa của mảng.
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if (in_array($p_id, $array_keys)) {
            $status = "<div class='box' style='color:red;'>
            Sản phẩm đã có trong giỏ hàng!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
            $status                    = "<div class='box'>Bạn đã thêm sản phẩm vào giỏ hàng!</div>";
        }
    }
    
    print_r($_SESSION["shopping_cart"]);
}
foreach ($_SESSION["shopping_cart"] as $key => $value) {
    echo $key;
}
header('Location: ../public/details.php?p_id=' . $_GET['p_id']);
?>