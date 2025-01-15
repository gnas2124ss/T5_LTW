<head>
    <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="css/uudai.css">
</head>



<body>

<section style="margin-bottom:20px;">
<div class="section_product_endow">
	<div class="containerrr">

		<div class="white product-gridd">
		<div class="label-tag lazyload" data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1735287986531" style="background-image: url(&quot;//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1735287986531&quot;);"></div>

			<div class="block-title">
				<h2 class="title-module">
					Ưu đãi bất ngờ
				</h2>
			</div>
            <?php
                require_once "config.php";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "select * from type_phone";
                $type_phone = [];
                $result = $conn->query($sql);
                if ($result) {
                    $type_phone = $result->fetch_all(MYSQLI_ASSOC);
                }
            ?>
			<ul class="tabs">
				<li style="background-color:#6fcbff;" class="tab active has-data">
					<span><a href="./Phung.php?type_phone=1">Iphone</a></span>
				</li>
				<li style="background-color:#6fa8ff;" class="tab" >
					<span><a href="./Phung.php?type_phone=2">Samsung</a></span>
				</li>
				<li style="background-color:#ae6fff;" class="tab">
					<span><a href="./Phung.php?type_phone=3">Xaoimi</a></span>
				</li>
				<li style="background-color:#ff6fbd;" class="tab">
					<span><a href="./Phung.php?type_phone=4">Oppo</a></span>
				</li>
				<li style="background-color:#9ae9be;" class="tab">
					<span><a href="./Phung.php?type_phone=5">Sony</a></span>
				</li>
			</ul>
            <?php
            $sql = "select * from db_phone limit 12";
            if(isset($_GET["type_phone"]))
            {
                $type_phone = $_GET["type_phone"];
            
            
                //Viết câu lệnh SQL
                $sql = "SELECT product_id, product_name, mo_ta, gia_khuyen_mai, gia_goc, hinh_anh_chinh, category_id, giam_gia
                                FROM db_phone
                                WHERE category_id = ".$type_phone." limit 10";
            }
                $result = $conn->query($sql);
                if ($result) 
				{
                    $phone = $result->fetch_all(MYSQLI_ASSOC);
					?>
					<div class="tab-content">
					<div class="grid-containerrr">
					<?php   
					foreach ($phone as $row) 
					{
						?>
						<div class="row">
							<div class="col-lg-2-5 col-xl-2 col-md-3 col-6">
								<form action="cart" method="post" class="variants product-action item_product_main" data-cart-form="" data-id="product-actions-34149032" enctype="multipart/form-data">
									<a href="./phone_detail.php?product_id=<?php echo $row['product_id'];?>">

										<span class="label-sale ">                                                            
                                            Giảm <?php echo $row['giam_gia'];?>%
                                        </span>

										<img width="214" height="214" class="lazyload img-responsive center-block" src="./image/<?php echo $row['hinh_anh_chinh'];?>"><br>
										

										<div class="info-product1">
											<p class="product-name1"><?php echo $row['product_name'];?></p>
											<div class="price-action1">
												<div class="price-box1">
												<span class="price1"><i><?php echo number_format($row['gia_khuyen_mai'],0, ',', '.'); ?>đ</i></span>
												<span class="compare-price1"><i><?php echo number_format($row['gia_goc'],0, ',','.');?>đ</i></span>
												</div>
													
											</div>

											<div class="nowship1">
												Giao siêu tốc 2H
											</div>
										</div>
									</a> 
								</form>
							</div>
						</div>
						<?php
                        }
                            echo "</div>";
                            } else {
                                echo "Lỗi: " . $conn->error;
                                    }
                            $conn->close();
                                    
                        ?>
                        
				    </div>
            
		</div>
	</div>
</div>
</section>
</body>
</html>
