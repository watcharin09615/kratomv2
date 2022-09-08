<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <?php
        include('header.php');
        $query = "SELECT * FROM user WHERE user_status = 1 and user_type = 1 ORDER BY id_user asc" or die("Error:" . mysqli_error($con));
        //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
        $result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">


    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
    <link href="../css/style3.css" rel="stylesheet">
    
</head>

<body>
<a href="memberuser.php" class="bth-info">back</a>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">เพิ่มคำร้องยื่นขอใบรับรอง</h2>
                <form method="POST" id="register" action="add_petition_db.php">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">ผู้ใช้</label>
                                <!-- <input class="input--style-4" type="text" name="first_name" id="first_name" required> -->
                                <select name="id_user" class="form-control" id="id_user" required>
                                    <option value="">ผู้ใช้</option>
                                    <?php foreach($result as $results){?>
                                    <option value="<?php echo $results["id_user"];?>">
                                        <?php echo $results["id_user"]." ".$results["name"]." ".$results["lastname"];?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">ชื่อสายพันธ์ุ</label>
                                <input class="input--style-4" type="text" name="species" id="species" required > 
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">จำนวน</label>
                                <input class="input--style-4" type="number" name="qty" id="qty" min="1" required> 
                            </div>
                        </div>
                    </div>
                    <label class="label">ที่ตั้งฟาร์ม</label>
                    <div class="row row-space">
                        
                        <div class="col-2">
                            
                            <div class="input-group">
                                <label class="label">ที่อยู่</label>
                                <input class="input--style-4" type="text" name="address" id="address" required>
                            </div>
                        </div>

                        <?php
                            $sql_provinces = "SELECT * FROM provinces";
                            $query = mysqli_query($con, $sql_provinces);
                        ?>
                        
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">จังหวัด</label>
                                <select class="form-control" name="provinces" id="provinces" required>
                                        <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
                                        <?php foreach ($query as $value) { ?>
                                            <option value="<?=$value['id']?>"><?=$value['name_pr']?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group"> 
                                <label class="label">อำเภอ</label>
                                <select class="form-control" name="amphures" id="amphures" required>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group"> 
                                <label class="label">ตำบล</label>
                                <select class="form-control" name="districts" id="districts" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group"> 
                                <label class="label">รหัสไปรษณีย์</label>
                                <input type="text" name="zip_code" id="zip_code" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">เบอร์โทร</label>
                                <input class="input--style-4" type="tel" name="tel" id="tel" required> 
                            </div>
                        </div>
                    </div>
                    <div id="error_msg"></div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit" id="reg_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
        include('scriptsaddress.php'); 
    ?>
<!-- end document-->