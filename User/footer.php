<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-links {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 20px;
        }

        .footer-links div {
            flex: 1;
            margin: 0 10px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 5px 0;
			transition: color 0.3s;
        }

		.footer-links a:hover {
            color: #f39c12; /* Màu khi di chuột qua */
        }
		.footer-links a:active {
            color: #d35400; /* Màu khi nhấn vào */
        }
        .subscribe {
            text-align: center;
        }

        .subscribe input[type="email"] {
            padding: 10px 15px;
            width: 200px;
			border: none;
			margin-bottom: 20px;
        }

        .subscribe button {
            padding: 10px 15px;
            background-color:rgb(243, 93, 18);
            border: none;
            color: #fff;
			height: 40px;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            margin: 0 5px;
            font-size: 20px; /* Adjust size as needed */
        }
    </style>
</head>
<body>

<footer>
    <div class="footer-links">
        <div>
            <h3>Về chúng tôi</h3>
            <a href="#">Lịch sử hình thành</a>
            <a href="#">Đội ngũ</a>
            <a href="#">Thương hiệu</a>
        </div>
        <div>
            <h3>Chính sách bán hàng</h3>
            <a href="#">Chính sách đổi trả</a>
            <a href="#">Chính sách bảo hành</a>
            <a href="#">Thương hiệu</a>
        </div>
        <div>
            <h3>Theo dõi chúng tôi</h3>
            <a href="#">Theo dõi trên Fanpage</a>
            <a href="#">Theo dõi trên Twitter</a>
            <a href="#">Theo dõi trên Instagram</a>
        </div>
    </div>
    <div class="subscribe">
        <h3 style="text-align: left;">Nhận tin khuyến mãi</h3>
        <input type="email" placeholder="Nhập email của bạn">
        <button>Đăng ký</button>
    </div>
    <p>Copyright © 2025 Công ty Epo Mobicon</p>
</footer>

</body>
</html>



