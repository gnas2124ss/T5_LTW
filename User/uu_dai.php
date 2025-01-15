<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body {
    overflow: hidden;
    background: #F5F5F5;
    overflow-y: auto;
    font-family: var(--font-base);
    font-size: 14px;
}
body {
    padding: 20px;
    margin: 20px 20px;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;

    background-color: rgb(224, 222, 222);
}
.container {
    padding: 0 7.5px;
    width: 100%;
    margin-right: 20px;
    margin-left: auto;
}
.section_product_endow .product-grid {
    padding: 20px 10px 10px;
    position: relative;
    
}
.white {
    background: #fff;
}
element.style {
    background-image: url(//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1735287986531);
}
.section_product_endow .product-grid .label-tag {
    width: 121px;
    height: 110px;
    position: absolute;
    right: -5px;
    top: -5px;
    background-size: contain;
    background-repeat: no-repeat;
    z-index: 2;
}
.section_product_endow .block-title {
    margin-bottom: 10px;
    margin-left: -5px;
}
.block-title h2 {
    color: red;
    font-family: var(--font-base);
    font-size: 24px;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    margin-top: -5px;
    padding: 0;
}
.tab{
    margin-top: 20px;
    display: grid;
    grid-template-columns: repeat(6,auto);
    grid-gap: 10px;
}
.tab a{
    text-decoration: none;
    color: white;
    font-size: 18pt;
}
.section_product_endow .tabs {
    margin-bottom: 25px;
    margin-left: -5px;
    display: grid;
    gap: 8px;
    padding-inline: 16px;
    grid-auto-flow: column;
    grid-auto-columns: minmax(150px, 1fr);
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    grid-template-rows: repeat(1, 1fr);
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 0;
}
ul {
    list-style: none outside;
}
dl, ol, ul {
}
.section_product_endow .tabs li.active, .section_product_endow .tabs li:hover {
    background-position: 100% 0;
    transition: all .4s ease-in-out;
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
}

.section_product_endow .tabs li {
    text-align: center;
    font-family: var(--font-base);
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    list-style: none;
    margin: 0 10px 0 0;
    padding: 0 20px;
    cursor: pointer;
    display: inline-block;
    height: 50px;
    line-height: 50px;
    position: relative;
    overflow: hidden;
    background-size: 300% 100%;
    border-radius: 50px;
}
.row {

    margin: 0 -7.5px;
}
[class*='col-'] {
    padding: 0 7.5px;
}
.section_product_endow .product-grid .item_product_main {
    margin-bottom: 0;
}
.item_product_main {

    position: relative;
    margin-bottom: 0px;
    overflow: hidden;
    background: #fff;
}
.grid-containerrr 
{
    margin-top: 20px;
    display: grid;
    grid-template-columns: repeat(6,auto);
    grid-gap: 10px;
}
.row img
{
    width: 200px;
    height: 214px;
    margin-bottom: 0;
}

form {
    margin: 0;
}

.item_product_main .label-sale {
    color: #F32A2A;
    font-size: 12px;
    border-radius: 0 20px 20px 0;
    position: absolute;
    font-family: var(--font-title);
    line-height: 24px;
    width: auto;
    height: 22px;
    top: 0px;
    left: 0px;
    text-align: center;
    z-index: 99;
    background: #FEE71A;
    padding: 0 5px;
    font-weight: bold;
}

.item_product_main .action-cart {
    height: 25px;
    width: 25px;
    position: relative;
    display: flex;
    align-items: center;
    z-index: 99;
    margin-top: 6px;
}
.item_product_main .more-action {
    display: inline-block;
    width: 25px;
    height: 25px;
    line-height: 23px;
    border-radius: 25px;
    cursor: pointer;
    margin-left: -2px;
    transition: all 0.4s;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.05));
}
.item_product_main .group-action {
    display: flex;
    flex-flow: column;
    justify-content: center;
    position: absolute;
    bottom: 30px;
    right: 0px;
    height: 5px;
    visibility: hidden;
    transition: all 0.3s;
    overflow: hidden;
}
.nowship {
    background: var(--now-icon);
    height: 24px;
    background-size: 25px 12px;
    background-repeat: no-repeat;
    line-height: 25px;
    padding-left: 28px;
    background-position: center left;
    font-size: 12px;
    color: #808089;
}
:root{

    --now-icon: url(//bizweb.dktcdn.net/100/507/051/themes/936909/assets/nowship.png?1735287986531);
}
.price-action .price b{
    margin-top: 0;
     color: red;
}
.price-action .compare-price{
    text-decoration: line-through;
    color: grey;
    margin-bottom: 0;
}
.section_product_endow .button-default {
    border-radius: 5px;
    border: 1px solid #ebebeb;
    background: #FFF;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.05));
    color: var(--text-color);
    margin: 0px auto 10px;
    display: inline-block;
    font-size: 14px;
}
 .button-default {
    height: 40px;
    line-height: 40px;
    text-align: center;
    padding: 0 30px;
    transition: all 0.3s;
}

a {
    text-decoration: none;
}
.col-12 text-center {
    text-align: center !important;
}
.more-action svg .icon{
    width: 25px;
    height: 25px;
    fill:rgb(101, 97, 97);
}
svg  .icon{
    float: right;
    width: 40px;
    height: 40px;
}
</style>

<body>
    
<section style="margin-bottom:20px;">
<div class="section_product_endow">
	<div class="container">
		<div class="white product-grid">
			<div class="label-tag lazyload" data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1735287986531" style="background-image: url(&quot;//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1735287986531&quot;);"></div>
			<div class="block-title">
				<h2 class="title-module">
					Ưu đãi bất ngờ
				</h2>
			</div>
            <?php
                require_once "config.php";
                $sql = "select * from type_phone";
                $type_phone = [];
                $result = $conn->query($sql);
                if ($result) {
                    $type_phone = $result->fetch_all(MYSQLI_ASSOC);
                
            ?>
			<ul class="tabs">
				<li style="background-color:#6fcbff;" class="tab active has-data">
					<span><a href="./index.php?type_phone=1">Iphone</a></span>
				</li>
				<li style="background-color:#6fa8ff;" class="tab" >
					<span><a href="./index.php?type_phone=2">Samsung</a></span>
				</li>
				<li style="background-color:#ae6fff;" class="tab">
					<span><a href="./index.php?type_phone=3">Xaoimi</a></span>
				</li>
				<li style="background-color:#ff6fbd;" class="tab">
					<span><a href="./index.php?type_phone=4">Oppo</a></span>
				</li>
                <li style="background-color:#9ae9be;" class="tab">
                <span><a href="./index.php?type_phone=5">Sony</a></span>
				</li>
			</ul>
            <?php
                }
                ?>
            <?php

            $sql = "select * from db_phone limit 12";
            if(isset($_GET["type_phone"]))
            {
                $id = $_GET["type_phone"];           
                //Viết câu lệnh SQL
                $sql = "SELECT product_id, product_name, mo_ta, gia_khuyen_mai, gia_goc, hinh_anh_chinh, category_id, category_brand
                                FROM db_phone
                                WHERE category_id = ".$id." limit 12";
            }
            $result = $conn->query($sql);
            if ($result) {
                 $phone = $result->fetch_all(MYSQLI_ASSOC);
            ?>
			<div class="tab-content">
            <div class="grid-containerrr">
            <?php   
            foreach ($phone as $row) {
            ?>
					<div class="row">
						<div class="col-lg-2-5 col-xl-2 col-md-3 col-6">
                            <form action="/cart/add" method="post" class="variants product-action item_product_main" data-cart-form="" data-id="product-actions-34149032" enctype="multipart/form-data">
                                <a href="./phone_detail.php?product_id=<?php echo $row['product_id'];?>">
                                    <span class="label-sale ">
                                        Giảm 8% 
                                    </span>
                                    <img style="transform:scale(0.9)" src="./img/<?php echo $row['hinh_anh_chinh']?>"><br>
                                </a>  
                                <div class="info-product">
                                    <p class="product-name"><?php echo $row['product_name'];?></p>
                                    <div class="price-action">
                                        <div class="price-box">
                                            <span class="price"><b><?php echo $row['gia_khuyen_mai'];?></b></span><br>
                                            <span class="compare-price"><?php echo $row['gia_goc'];?></span>
                                        </div>
                                        <div class="action-cart">
                                            <span class="more-action">
                                                <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#plusicon"></use> </svg>
                                            </span>
                                            <div class="group-action">
                                                <input type="hidden" name="variantId" data-qty="1000000" value="106946027">
                                                <button data-text="Thêm vào giỏ" class="btn-buy btn-left btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon svg-cart"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#addcarticon"></use> </svg>
                                                </button>
                                                <a class="quick-view btn-views" data-text="Xem nhanh" href="javascript:;" title="Xem nhanh" onclick="onQuickView(this);" data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                    <svg class="icon svg-qv"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#searchicon"></use> </svg>
                                                </a>
                                                
                                                <a href="javascript:;" data-url="/apple-iphone-14-pro-max-128gb-vn-a" data-text="So sánh" data-type="Điện thoại" data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997" data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)" title="Thêm vào so sánh" class="compare-link btn-views d-inline-block"><svg class="icon compa"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#compareIcon"></use> </svg></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nowship">
                                        Giao siêu tốc 2H
                                    </div>
                                </div>
                            </form>
						</div>
                        
				    </div>
                    
                    <?php
                    }
                            echo "</div>";
                            ?>
                
                            <div class="col-12 text-center" style =" text-align: center !important;">
							<a class="button-default" href=" " title="Xem thêm">Xem thêm sản phẩm khác</a>
						</div>
                        <?php
                } 
                       
                        ?>
				<div class="tab-pane"></div>
				<div class="tab-pane"></div>
				<div class="tab-pane"></div>
				<div class="tab-pane"></div>

            
		</div>
	</div>
</div>
</section>
</body>
</html>
