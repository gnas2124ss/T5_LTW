<?php
session_start();

// Kiểm tra xem có ID sản phẩm được gửi đến không
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Kiểm tra xem giỏ hàng có tồn tại không
    if (isset($_SESSION['cart'])) {
        // Duyệt qua giỏ hàng để tìm sản phẩm cần xóa
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id'] == $product_id) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($_SESSION['cart'][$key]);
                break; // Thoát khỏi vòng lặp sau khi xóa
            }
        }
    }
}

// Chuyển hướng về trang giỏ hàng
header('Location: cart.php');
exit();
?>