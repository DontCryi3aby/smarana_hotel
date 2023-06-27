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
</head>

<body>
    <div class="admin__home-wrapper">

        <!-- HTML -->
        <?php include "header.php"?>

        <div class="admin__home-container d-flex">
            <?php include "sidebar.php"?>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    Chi Tiết Phòng
                </div>
                <div class="line"></div>
                <div class="content-container">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">

                            <?php
                            $query = "SELECT * FROM phongdat WHERE trangThai = 'Chờ xác nhận'";
                            $result = mysqli_query($con, $query);
                            $count = mysqli_num_rows($result);
                        ?>

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Yêu cầu đặt phòng mới <span class="badge text-bg-secondary"><?= $count ?></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tr>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Quốc tịch</th>
                                            <th>Phòng</th>
                                            <th>Loại giường</th>
                                            <th>Bữa ăn</th>
                                            <th>Ngày đến</th>
                                            <th>Ngày đi</th>
                                            <th>Trạng thái</th>
                                            <th>Thêm</th>
                                        </tr>


                                        <?php
                                            
                                            while($row = mysqli_fetch_array($result)){
                                                ?>

                                        <tr>
                                            <td><?= $row['ho'] . " " . $row['ten']?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['quocTich'] ?></td>
                                            <td><?= $row['loaiPhong'] ?></td>
                                            <td><?= $row['loaiGiuong'] ?></td>
                                            <td><?= $row['buaAn'] ?></td>
                                            <td><?= $row['ngayDen'] ?></td>
                                            <td><?= $row['ngayDi'] ?></td>
                                            <td><?= $row['trangThai'] ?></td>
                                            <td>
                                                <a class="print-btn" href="roombook.php?id=<?= $row['id'] ?>">Chi tiết</a>

                                            </td>

                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">

                            <?php
                            $query = "SELECT * FROM phongdat WHERE trangThai = 'Thành công'";
                            $result = mysqli_query($con, $query);
                            $count = mysqli_num_rows($result);
                        ?>

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Phòng được đặt <span class="badge text-bg-secondary"><?= $count ?></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body d-flex flex-wrap">

                                    <?php
                                        while($row = mysqli_fetch_array($result)){

                                        
                                    ?>
                                    <div class='col-md-3 col-sm-12 col-xs-12 item-booked'>
                                        <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                            <div class='panel-body'>
                                                <i class='fa fa-users fa-5x'></i>
                                                <h3 class="item-booked__name"><?= $row['ho'] . " " . $row['ten']?></h3>
                                            </div>
                                            <div class='panel-footer back-footer-blue'>
                                                
                                                <p class="m-0"><?= $row['loaiPhong'] ?></p>
                                                <p><?= $row['loaiGiuong'] ?></p>

                                                <a href="customer.php?id=<?= $row['id']?>"><button class='btn btn-primary show-btn' data-toggle='modal'
                                                        data-target='#myModal'>
                                                        Show
                                                    </button></a>
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
    <script>
    const items = document.querySelectorAll(".admin__home-sidebar a")
    Array.from(items).forEach(item => {
        console.log(item)
        item.onclick = e => {
            document.querySelector(".admin__home-sidebar a.active").classList.remove("active");
            e.target.classList.add("active")
        }
    })
    </script>
</body>

</html>