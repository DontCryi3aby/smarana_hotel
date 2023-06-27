<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }
?>

<?php
    include "connect.php";
?>

<?php
    if(isset($_POST['add'])){
        $loaiGiuong = $_POST['tbed'];
        $loaiPhong = $_POST['troom'];
        $queryG = "SELECT * FROM giuong WHERE loaiGiuong = '$loaiGiuong'";
        $resultG = mysqli_query($con, $queryG);
        $row = mysqli_fetch_array($resultG);
        $maGiuong = $row['maGiuong'];

        $queryCheck = "SELECT * FROM phong INNER JOIN giuong ON phong.maGiuong = giuong.maGiuong WHERE loaiPhong = '$loaiPhong' AND phong.maGiuong = '$maGiuong'";
        $resultCheck = mysqli_query($con, $queryCheck);
        $count = mysqli_num_rows($resultCheck);
        echo $count;
        if($count > 0 ){
            echo "<script>alert('Đã tồn tại phòng!')</script>";
        } else {
            $query = "INSERT INTO `phong`(`loaiPhong`,`maGiuong`, `giaPhong`) VALUES ('$_POST[troom]','$maGiuong','$_POST[giaPhong]')";
            $result = mysqli_query($con, $query);

            echo "<script>alert('Thêm phòng mới thành công!')</script>";
        }
    }
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
    <link rel="stylesheet" href="/assets/css/roomadd.css">
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
                <a href="roommanagement.php">Trạng thái phòng</a>
                <a class="active" href="roomadd.php">Thêm phòng</a>
                <a href="roomdel.php">Xóa phòng</a>
                <a href="user.php">Tài khoản</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    THÊM PHÒNG MỚI
                </div>
                <div class="line"></div>
                <div class="content-container d-flex justify-content-around">
                    <div class="table-item add-table">
                        <p class="table-title">THÊM PHÒNG</p>
                        <form method="POST" class="table-inner">
                            <label for="troom">Loại phòng *</label>
                            <select id="troom" name="troom" class="form-control" required>
                                <option value="Spring Premium Suite">Spring Premium Suite</option>
                                <option value="Summer Deluxe">Summer Deluxe</option>
                                <option value="Autumn Chamber">Autumn Chamber</option>
                                <option value="Winter Suite">Winter Suite</option>
                            </select>
                            <label for="tbed">Loại giường *</label>
                            <select id="tbed" name="tbed" class="form-control" required>
                                <?php
                                                $query = "SELECT * FROM giuong";
                                                $result = mysqli_query($con,$query);

                                                while($row = mysqli_fetch_array($result)){ ?>
                                <option value="<?= $row['loaiGiuong'] ?>"><?= $row['loaiGiuong'] ?></option>
                                <?php }?>
                                ?>
                            </select>
                            <label for="giaPhong">Giá phòng *</label><br>
                            <input class="gia-input" type="text" name="giaPhong" id="giaPhong" required>

                            <input type="submit" value="Thêm" name="add" class="add-room-btn">
                        </form>
                    </div>

                    <div class="table-item main-table">
                        <p class="table-title">CÁC PHÒNG TỒN TẠI</p>
                        <table class="table-inner">
                            <tr>
                                <th>Mã phòng</th>
                                <th>Loại phòng</th>
                                <th>Loại giường</th>
                            </tr>

                            <?php
                                $query = "SELECT * FROM phong INNER JOIN giuong on phong.maGiuong=giuong.maGiuong ORDER BY maPhong";
                                $result = mysqli_query($con, $query);
                                while($row = mysqli_fetch_array($result)){
                            ?>

                            <tr>
                                <td><?= $row['maPhong'] ?></td>
                                <td><?= $row['loaiPhong'] ?></td>
                                <td><?= $row['loaiGiuong'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
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