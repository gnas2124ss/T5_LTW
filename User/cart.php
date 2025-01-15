<?php

require_once 'header.php';
?>
<div class="section wrap_background">
            <!-- Breadcrumb Section Start -->
            <nav class="bread-crumb">
                <div class="container">
                    <ul class="breadcrumb">                 
                        <li class="home" onclick="window.location.href='index.php'">
                            <i class="material-icons">home</i>
                            <i class="material-icons">keyboard_arrow_right</i>
                        </li>
                        <li>
                            <strong><span> 
                                <?php echo "Giỏ hàng của bạn" ?>
                            </span></strong>
                        </li>
                    </ul>
                </div>
            </nav> 
<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_SESSION['cart'])) {
    echo "<h1 style='width:100%; text-align: center;'>Giỏ hàng của bạn có " . count($_SESSION['cart']) . " sản phẩm.</h1>"; 
} else {
    echo "0";
}
?>

<?php
if (isset($_SESSION['cart'])) {
}
?>
<table style="width:100%; text-align: center; border-collapse: collapse;" border="1">
<tr>
 <th>Số thứ tự</th>
 <th>Hình ảnh</th>
 <th>Mã sp</th>
 <th>Tên sản phẩm</th>
 <th>Số lượng</th>
 <th>Giá</th>
 <th> Thành tiền </th>
 <th></th>
</tr>
<?php
if (isset($_SESSION['cart'])) {
    $tongtien = 0;
    $i = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
        $i++;
        $id = $cart_item['id'];
        $soluong = isset($cart_item['soluong']) ? (int)$cart_item['soluong'] : 0;
        $giagoc = isset($cart_item['giagoc']) ? (float)$cart_item['giagoc'] : 0;
        $thanhtien = $soluong * $giagoc;
        $tongtien += $thanhtien;
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><img src='./image/<?php echo $cart_item['hinhanhchinh']; ?>' width="100px"></td>
    <td><?php echo $cart_item['id']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><?php echo $cart_item['soluong']; ?></td>
    <td><?php echo number_format($cart_item['giagoc'], 0, ',', '.'); ?></td>
    <td><?php echo number_format($thanhtien, 0, ',', '.') ?></td>
    <td><a href="deletecard.php">Xóa</a></td>
</tr>
<?php
    }
?>
<tr>
    <td colspan="8">
        <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.'); ?></p>
        <p style="float: right;"><a href="">Xoá tất cả</a></p>
    </td>
</tr>
<?php
} else {
?>
<tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống!</p></td>
</tr>
<?php
}
?>
</table>