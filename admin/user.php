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
        $queryCheck = "SELECT * FROM taikhoan WHERE taiKhoan = '$_POST[taiKhoan]'";
        $resultCheck = mysqli_query($con, $queryCheck);
        $count = mysqli_num_rows($resultCheck);

        if($count == 0) {
            $queryAdd = "INSERT INTO taikhoan(taiKhoan, matKhau) VALUES ('$_POST[taiKhoan]','$_POST[matKhau]')";
            $resultAdd = mysqli_query($con, $queryAdd);
    
            // header('location: user.php');
        } else {
            echo "<script>alert('Đã tồn tại tài khoản!')</script>";
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
    <link rel="stylesheet" href="/assets/css/user.css">
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
                <a href="roomadd.php">Thêm phòng</a>
                <a href="roomdel.php">Xóa phòng</a>
                <a class="active" href="user.php">Tài khoản</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    TÀI KHOẢN QUẢN LÝ
                </div>
                <div class="line"></div>
                <div class="content-container">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>

                        <?php
                            $query = "SELECT * FROM taikhoan";
                            $result = mysqli_query($con, $query);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['taiKhoan'] ?></td>
                                <td><?= $row['matKhau'] ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary upd-btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Sửa
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa tài khoản</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST">
                                                    <div class="modal-body">
                                                        <label class="lbl" for="tk">Tài khoản</label><br>
                                                        <input type="text" value="<?= $row['taiKhoan'] ?>" class="w-100" id="tk" name="tk"><br>
                                                        <label class="lbl" for="mk">Mật khẩu</label><br>
                                                        <input type="text" value="<?= $row['matKhau'] ?>" class="w-100" id="mk" name="mk"><br>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Đóng</button>
                                                        <input type="submit" name="update_<?= $row['id'] ?>"
                                                            class="btn btn-secondary sua-submit" value="Sửa">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <td>
                                    <form method="POST">
                                        <input onclick="return confirm('Bạn có chắc muốn xóa?')" class="del-btn" type="submit" value="Xóa" name="del_<?= $row['id'] ?>">
                                    </form>
                                </td>
                            </tr>
                        <?php
                            if(isset($_POST['update_' . "" . $row['id']])){
                                if($_POST['tk'] == $row['taiKhoan'] && $_POST['mk'] == $row['matKhau']){
                                    // echo "<script>alert('Không có thay đổi!')</script>";
                                } else {
                                    $queryUpd = "UPDATE taikhoan SET taiKhoan = '$_POST[tk]', matKhau = '$_POST[mk]' WHERE id = '$row[id]'";
                                    $resultUpd = mysqli_query($con, $queryUpd);
                                    
                                    echo "<script>window.location.reload()</script>";
                                }
                            }

                            if(isset($_POST['del_' . "" . $row['id']])){
                                $queryCheck = "SELECT * FROM taikhoan";
                                $resultCheck = mysqli_query($con, $queryCheck);
                                $count = mysqli_num_rows($resultCheck);
                                if($count <= 1){
                                    echo "<script>alert('Không thể xóa, bạn phải để lại ít nhất 1 tài khoản')</script>";
                                } else {
                                    $queryDel = "DELETE FROM taikhoan WHERE id = '$row[id]'";
                                    $resultDel = mysqli_query($con, $queryDel);
                                    
                                    echo "<script>window.location.reload()</script>";
                                }
                            }
                        } ?>

                        
                    </table>

                <form method="POST" class='form'>
                    <label for="taiKhoan">Tài khoản *</label><br>
                    <input type="text" name="taiKhoan" id="taiKhoan" required><br>
                    <label for="matKhau">Mật khẩu *</label><br>
                    <input type="text" name="matKhau" id="matKhau" required><br>
                    <input class="input-submit" type="submit" value="Thêm" name="add">
                </form>
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