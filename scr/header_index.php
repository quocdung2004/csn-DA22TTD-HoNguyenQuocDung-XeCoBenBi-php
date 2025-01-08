<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="SHORTCUT ICON" href="img/logo.jpg">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datLich.css">
    <link rel="stylesheet" href="css/sanPham.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/kiemTraDangNhap.js"></script>
    <title>Xe cộ bền bỉ</title>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="grid">
                <nav class="header__nav">
                    <ul class="header__nav--list">
                        <li class="header--item"><a class="link" href="index.php">Trang chủ</a></li>
                        <li class="header--item"><a href="datLich.php" id="btnDatLich">Đặt lịch</a></li>
                        <li class="header--item hang"><a class="link" href="dichVu.php">Dịch vụ</a>
                            <ul class="hang">
                                <a class="hang-link" href="dichVu.php#mitsubishi">
                                    <li class="hang-con">Mitsubishi</li>
                                </a>
                                <a class="hang-link" href="dichVu.php#toyota">
                                    <li class="hang-con">Toyota</li>
                                </a>
                                <a class="hang-link" href="dichVu.php#kia">
                                    <li class="hang-con">Kia</li>
                                </a>
                                <a class="hang-link" href="dichVu.php#huyndai">
                                    <li class="hang-con">Huyndai</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                    <ul class="header__nav--list">
                        <li class="header--item"><a class="link" href="lsBaoDuong.php">Lịch sử bảo dưỡng</a></li>
                        <li class="header--item" id="login"><a class="link" href="login.php">Đăng nhập</a></li>
                        <li class="header--item" id="register"><a class="link" href="register.php">Đăng ký</a></li>
                        <li class="header--item"><a class="link" href="lienHe.php">Liên hệ</a></li>
                        <li class="header--item" id="logout" style="display: none;"><a class="link" href="#">Đăng xuất</a></li>
                    </ul>
                </nav>
                <div class="header-search">
                    <div class="header-logo">
                        <a href="index.php"><img src="img/logo.jpg" alt="" class="img"></a>
                    </div>
                    <div class="header_search">
                        <form action="search.php" method="GET" class="search-form">
                            <input type="text" name="search_query" class="search-input" placeholder="Tìm kiếm dịch vụ">
                            <button type="submit" class="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.398 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="header-hotLine">
                        <svg class="phone" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                            <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"></path>
                            <path d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a1 1 0 0 0-.086-1.391l-4.064-3.696z"></path>
                        </svg>
                        <div class="sdt">0336766665</div>
                    </div>
                </div>
            </div>
        </header>