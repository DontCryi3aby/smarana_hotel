<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt phòng</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/reservation.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="/index.php"><i class="fa fa-home"></i> Trang chủ</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ĐẶT PHÒNG <small></small>
                        </h1>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                THÔNG TIN CÁ NHÂN
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Giới tính*</label>
                                        <select name="gioiTinh" class="form-control" required>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Họ</label>
                                        <input name="ho" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input name="ten" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Quốc tịch*</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="quocTich" value="Việt Nam" checked="">Việt Nam
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="quocTich" value="Nước Ngoài">Nước Ngoài
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input name="SDT" type="text" class="form-control" required>
                                    </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    THÔNG TIN PHÒNG ĐẶT
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Loại phòng *</label>
                                        <select name="loaiPhong" class="form-control" required>
                                            <option value="Spring Premium Suite">Spring Premium Suite</option>
                                            <option value="Summer Deluxe">Summer Deluxe</option>
                                            <option value="Autumn Chamber">Autumn Chamber</option>
                                            <option value="Winter Suite">Winter Suite</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại giường</label>
                                        <select name="loaiGiuong" class="form-control" required>
                                            <?php
                                                $query = "SELECT * FROM giuong";
                                                $result = mysqli_query($con,$query);

                                                while($row = mysqli_fetch_array($result)){ ?>
                                                    <option value="<?= $row['loaiGiuong'] ?>"><?= $row['loaiGiuong'] ?></option>
                                                <?php }?>
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Số phòng *</label>
                                        <select name="soPhong" class="form-control" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Đặt bữa ăn</label>
                                        <select name="buaAn" class="form-control" required>
                                            <option value="Chỉ đặt phòng">Chỉ đặt phòng</option>
                                            <option value="Bữa sáng">Bữa sáng</option>
                                            <option value="Bữa trưa">Bữa trưa</option>
                                            <option value="Bữa tối">Bữa tối</option>
                                            <option value="Bữa sáng & Bữa trưa">Bữa sáng & Bữa trưa</option>
                                            <option value="Bữa sáng & Bữa tối">Bữa sáng & Bữa tối</option>
                                            <option value="Bữa trưa & Bữa tối">Bữa trưa & Bữa tối</option>
                                            <option value="Cả Ngày">Cả Ngày</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày nhận phòng</label>
                                        <input name="ngayDen" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày trả phòng</label>
                                        <input name="ngayDi" type="date" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-12 col-sm-12">
                            <div class="well">
                                <h4>XÁC MINH BẠN KHÔNG PHẢI ROBOT</h4>
                                <p>Vui lòng nhập mã captcha này bên dưới <?php $Random_code=rand(); echo$Random_code; ?>
                                </p><br />
                                <p>Nhập mã captcha<br /></p>
                                <input type="text" name="code1" title="random code" />
                                <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                <input type="submit" name="submit" class="btn btn-primary">
                                <?php
							if(isset($_POST['submit']))
							{
							    $code1=$_POST['code1'];
							    $code=$_POST['code']; 
							if($code1!="$code")
							{
								echo "<script type='text/javascript'> alert('Mã captcha không đúng!')</script>";
							}
							else
							{
									$query="SELECT * FROM phongdat WHERE email = '$_POST[email]'";
									$result = mysqli_query($con,$query);
                                    
                                    $count = mysqli_num_rows($result);


									if($count > 0) {
										echo "<script> alert('Đã tồn tại khách hàng!')</script>";
									}
									else
									{
										$stat ="Chờ xác nhận";
										$newBooking="INSERT INTO `phongdat`(`gioiTinh`,`ho`, `ten`, `email`, `quocTich`, `SDT`, `loaiPhong`, `loaiGiuong`, `soPhong`, `buaAn`, `ngayDen`, `ngayDi`,`trangThai`,`soNgay`) VALUES ('$_POST[gioiTinh]','$_POST[ho]','$_POST[ten]','$_POST[email]','$_POST[quocTich]','$_POST[SDT]','$_POST[loaiPhong]','$_POST[loaiGiuong]','$_POST[soPhong]','$_POST[buaAn]','$_POST[ngayDen]','$_POST[ngayDi]','$stat',datediff('$_POST[ngayDi]','$_POST[ngayDen]'))";
										if (mysqli_query($con,$newBooking))
										{
											echo "<script type='text/javascript'> alert('Yêu cầu đặt phòng của bạn đã được gửi!')</script>";
                                            header("location: index.php");
										}
										else
										{
											echo "<script type='text/javascript'> alert('Có lỗi khi đặt phòng!')</script>";
										}
									}
							}
							}
							?>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>