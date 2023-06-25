<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarana Hanoi Heritage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a class="nav-link" href="#about">Khách sạn</a>
                    <a class="nav-link" href="#rooms">Phòng & Suite</a>
                    <a class="nav-link" href="#services">Dịch vụ</a>
                    <a class="nav-link" href="#contact">Liên hệ</a>
                </nav>

                <a class="book-btn" href='./reservation.php'>Đặt ngay</a>
            </header>


        </div>

        <!-- Banner -->
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="btn-change-banner active" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button class="btn-change-banner" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="3" aria-label="Slide 4"></button>
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


        <!-- Main Content -->
        <div id="rooms" class="main-container">
            <div class="main-container__inner">
                <div class="rooms">
                    <div class="rooms__title">
                        PHÒNG 4 MÙA CỦA CHÚNG TÔI
                    </div>

                    <div class="rooms__list">
                        <div class="room-item">
                            <div id="carouselExample1" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./assets/imgs/Spring1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Spring2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Spring3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Spring4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="room-item__info">
                                <div class="room-item__name">Spring Premium Suite</div>
                                <div class="roomitem-rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="room-item__desc">Phòng Spring Premium Suite là loại phòng lớn nhất mà bạn có
                                    thể tìm thấy và được tích hợp tất cả các tiện nghi mà bạn cần cho một kỳ nghỉ thư
                                    giãn.</p>
                                <a href="reservation.php" class="room-item__book-btn">Đặt phòng ngay</a>

                            </div>
                        </div>


                        <div class="room-item">
                            <div id="carouselExample2" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./assets/imgs/Summer1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Summer2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Summer3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Summer4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="room-item__info">
                                <div class="room-item__name">Summer Deluxe</div>
                                <div class="roomitem-rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="room-item__desc">Với Summer Deluxe tại Smarana Hanoi Heritage, bạn không cần
                                    phải chi quá nhiều tiền cho một kỳ nghỉ sang trọng!</p>
                                <a href="reservation.php" class="room-item__book-btn">Đặt phòng ngay</a>

                            </div>
                        </div>


                        <div class="room-item">
                            <div id="carouselExample3" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./assets/imgs/Autumn1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Autumn2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Autumn3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Autumn4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="room-item__info">
                                <div class="room-item__name">Autumn Chamber</div>
                                <div class="roomitem-rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="room-item__desc">Trải nghiệm sự ấm áp của mùa thu trong Autumn Chamber tuyệt
                                    đẹp tại Smarana Hanoi Heritage.
                                </p>
                                <a href="reservation.php" class="room-item__book-btn">Đặt phòng ngay</a>
                            </div>
                        </div>


                        <div class="room-item">
                            <div id="carouselExample4" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./assets/imgs/Winter1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Winter2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Winter3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/imgs/Winter4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="room-item__info">
                                <div class="room-item__name">Winter Suite</div>
                                <div class="roomitem-rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="room-item__desc">Cho phép bản thân bị mê hoặc bởi vẻ đẹp của mùa đông ở Việt
                                    Nam khi ở trong Winter Suite tinh tế tại Smarana Hanoi Heritage.</p>
                                <a href="reservation.php" class="room-item__book-btn">Đặt phòng ngay</a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div id="about">
        <div class="rooms__title">
                        BẠN BIẾT GÌ VỀ CHÚNG TÔI CHƯA?
                    </div>
            <div class="about">
            <div class="about__left">
                <div class="about__title">
                    Smarana Hanoi Heritage - Một trải nghiệm khách sạn độc đáo tại thành phố sôi động và giàu văn hóa Hà Nội, Việt Nam.
                </div>
                <div class="about__img">
                    <img src="./assets/imgs/background-hotel.jpg" alt="Smarana Hanoi Heritage">
                </div>
            </div>

            <div class="about__right">
            <p>Tọa lạc tại quận Cầu Giấy, trung tâm thương mại của thành phố, khách sạn của chúng tôi lấy cảm hứng từ nghệ thuật, văn hóa và vẻ đẹp của những bức tranh dân gian Hàng Trống. Từ đồ nội thất thủ công đến các tiện nghi đặt làm riêng, khách sạn của chúng tôi cố gắng mang đến cho du khách trải nghiệm độc đáo về văn hóa và nghệ thuật của Hà Nội và tạo ra những kỷ niệm khó quên.</p>
            <p>Tại Smarana Hanoi Heritage, mục tiêu của chúng tôi là mang đến cho du khách những trải nghiệm tuyệt vời mà họ sẽ không bao giờ quên. Ngay từ khi bước vào cửa, bạn sẽ bị bao quanh bởi vẻ đẹp của những bức tranh dân gian Hàng Trống. Mỗi phòng đều được trang trí độc đáo với lối trang trí trang nhã và nghệ thuật lấy cảm hứng từ phong cách truyền thống Việt Nam. Nhân viên của chúng tôi được dành riêng để cung cấp một dịch vụ cao cấp và đảm bảo rằng khách hàng của chúng tôi cảm thấy như ở nhà.</p>
            <p>Khách sạn của chúng tôi cung cấp nhiều tiện nghi để đảm bảo rằng khách của chúng tôi cảm thấy thoải mái và có một kỳ nghỉ thú vị. Chúng tôi có một sảnh phục vụ trà và cà phê đặc sản, một nhà hàng và quầy bar phục vụ ăn uống và giải trí. Ngoài ra, chúng tôi có các dịch vụ spa và thẩm mỹ viện để chăm sóc và thư giãn.</p>
            <p>Tại Smarana Hanoi Heritage, chúng tôi cố gắng mang đến cho khách hàng những trải nghiệm độc đáo và khó quên. Từ đội ngũ nhân viên thân thiện và bầu không khí ấm áp đến phong cách trang trí nghệ thuật và tiện nghi sang trọng, chúng tôi mong muốn mang đến cho khách hàng những trải nghiệm tốt nhất có thể tại Hà Nội. Mục tiêu của chúng tôi là tạo ra một nơi để du khách đến và khám phá vẻ đẹp của tranh dân gian Hàng Trống và mang về nhà những kỷ niệm khó quên.</p>
            </div>
            </div>
        </div>

        <!-- Footer -->
        <div id="contact" class="footer">
            <p class="footer__title">Liên Hệ Với Chúng Tôi</p>
            <div class="footer__main-content">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.0914144263006!2d105.78296927498089!3d21.029027980620462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1687674306383!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="footer-item">
                    <p>
                        <span class="footer-item__label">Số điện thoại:</span>
                        <span class="footer-item__value">+84 705 768 103</span>
                    </p>
                    <p>
                        <span class="footer-item__label">Email:</span>
                        <span class="footer-item__value">i3oyhp@gmail.com</span>
                    </p>
                    <p>
                        <span class="footer-item__label">Địa chỉ</span>
                        <span class="footer-item__value">Số 5, Ngõ 82/1, Đường Dịch Vọng, Cầu Giấy, Hà Nội</span>
                    </p>
                </div>
                
            </div>
            <div class="copyright">
                <i class="fa-regular fa-copyright"></i> 2023. Bài tập lớn môn PHP.
            </div>
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