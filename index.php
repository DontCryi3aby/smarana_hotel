<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarana Hanoi Heritage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="container">
            <!-- Header -->
            <header class="navbar py-0">
                <a href='/'>
                    <img class="logo" src="/assets/imgs/logo.png" alt="logo">
                </a>

                <nav class="nav">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    <a class="nav-link" href="#">Khách sạn</a>
                    <a class="nav-link" href="#">Phòng & Suite</a>
                    <a class="nav-link" href="#">Dịch vụ</a>
                    <a class="nav-link" href="#">Liên hệ</a>
                </nav>

                <a class="book-btn" href='./reservation.php'>Đặt ngay</a>
            </header>


        </div>

        <!-- Banner -->
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="btn-change-banner active" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                    aria-current="true" aria-label="Slide 1"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/imgs/about2.jpg" class="d-block w-100 banner-img" alt="banner">
                    <div class="carousel-caption d-none d-md-block">

                        <p class="carousel_slogan">CHÚNG TÔI BIẾT BẠN MUỐN GÌ</p>
                        <p class="carousel_sub-slogan">CHÀO MỪNG ĐẾN KHÁCH SẠN CỦA CHÚNG TÔI</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/imgs/about3.jpg" class="d-block w-100 banner-img" alt="banner">
                    <div class="carousel-caption d-none d-md-block">

                        <p class="carousel_slogan">BẠN MUỐN KỲ NGHỈ SANG TRỌNG?</p>

                        <p class="carousel_sub-slogan">HÃY ĐẾN & TẬN HƯỞNG KHOẢNH KHẮC QUÝ GIÁ CÙNG CHÚNG TÔI</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/imgs/about4.jpg" class="d-block w-100 banner-img" alt="banner">
                    <div class="carousel-caption d-none d-md-block">
                    <p class="carousel_slogan">CÙNG VỚI BẠN BÈ & GIA ĐÌNH</p>

                        <p class="carousel_sub-slogan">ĐẶT PHÒNG NGAY HÔM NAY</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/imgs/about5.jpg" class="d-block w-100 banner-img" alt="banner">
                    <div class="carousel-caption d-none d-md-block">

                        <p class="carousel_slogan">HÃY ĐẾN VỚI CHÚNG TÔI!</p>
                        <p class="carousel_sub-slogan">HÃY ĐẾN & TẬN HƯỞNG KHOẢNH KHẮC QUÝ GIÁ CÙNG CHÚNG TÔI</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const myCarouselElement = document.querySelector('#carouselExampleDark')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 3000
    })
    </script>
</body>

</html>