<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }
?>

<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/roommanagement.css">
</head>

<body>
    <div class="admin__home-wrapper">

        <div class="admin__home-header d-flex justify-content-between align-items-center">
            <div>
                <a class="admin__home-logo" href="home.php">BACK TO MAIN</a>
            </div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Tài khoản
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user.php">Thông tin tài khoản</a></li>
                    <li><a class="dropdown-item" href="roommanagement.php">Quản lý phòng</a></li>
                    <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                </ul>
            </div>
        </div>

        <div class="admin__home-container d-flex">
            <div class="admin__home-sidebar">
                <a class="active" href="roommanagement.php">Trạng thái phòng</a>
                <a href="roomadd.php">Thêm phòng</a>
                <a href="roomdel.php">Xóa phòng</a>
                <a href="user.php">Tài khoản</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    TẤT CẢ PHÒNG
                </div>
                <div class="line"></div>
                <div class="content-container">
                            <?php
                            $query = "SELECT * FROM phong INNER JOIN giuong ON phong.maGiuong = giuong.maGiuong";
                            $result = mysqli_query($con, $query);
                        ?>
                        <div class="d-flex flex-wrap">
                            <?php
                                        while($row = mysqli_fetch_array($result)){
                                            $class = 'available';
                                            if($row['maKH'] != null){
                                                $class = "not-available";
                                            }
                                    ?>
                            <div class='col-md-3 col-sm-12 col-xs-12 item-booked'>
                                <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                    <div class='panel-body'>
                                        <i class='fa fa-users fa-5x <?=$class ?> icon'></i>
                                        <h3 class="item-booked__name <?=$class ?> tbed"><?= $row['loaiGiuong']?></h3>
                                    </div>
                                    <div class='panel-footer back-footer-blue footer-<?=$class ?>'>
                                        <!-- <a href="customer.php?id=<?= $row['id']?>"><button
                                                class='btn btn-primary show-btn' data-toggle='modal'
                                                data-target='#myModal'>
                                                Show
                                            </button></a> -->
                                            <?= $row['loaiPhong'] ?>
                                    </div>

                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>