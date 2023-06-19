<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/home.css">
</head>

<body>
    <div class="admin__home-wrapper">

        <?php include "header.php"?>

        <div class="admin__home-container d-flex">
            <div class="admin__home-sidebar">
                <a href="home.php">Status</a>
                <a href="#">News Letters</a>
                <a href="roombook.php">Room Booking</a>
                <a class="active" href="payment.php">Payment</a>
                <a href="#">Profit</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    Payment Details
                </div>
                <div class="line"></div>
                <div class="content--container">
                    <table class="table">
                        <tr>
                            <th>Họ tên</th>
                            <th>Loại phòng</th>
                            <th>Loại giường</th>
                            <th>Ngày nhận phòng</th>
                            <th>Ngày trả phòng</th>
                            <th>Số phòng</th>
                            <th>Đặt bữa ăn</th>
                            <th>Tiền thuê phòng</th>
                            <th>Tiền thuê giường</th>
                            <th>Tiền bữa ăn</th>
                            <th>Tổng tiền</th>
                            <th>In hóa đơn</th>
                        </tr>

                        <tr>
                            <td>Nguyễn Ngọc Thạch</td>
                            <td>Siêu cấp Vippro</td>
                            <td>Giường đơn</td>
                            <td>2023-10-10</td>
                            <td>2023-10-15</td>
                            <td>1</td>
                            <td>Chỉ đặt phòng</td>
                            <td>320.00</td>
                            <td>36.00</td>
                            <td>9.00</td>
                            <td>950.00</td>
                            <td>
                                <a class="print-btn" href="#">Print</a>
                            </td>
                        </tr>
                    </table>
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