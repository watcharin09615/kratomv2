<head>
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
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">รายละเอียดคำร้อง</h2>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">ผู้ใช้</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['name']." ".$row_am['lastname']; ?>" disabled> 
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">ชื่อสายพันธ์ุ</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['species'];?>" disabled> 
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">จำนวน</label>
                            <input class="input--style-4" type="number" value="<?php echo $row_am['quantity']; ?>" disabled> 
                        </div>
                    </div>
                </div>
                <label class="label">ที่ตั้งฟาร์ม</label>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">ที่อยู่</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['address_farm']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">ตำบล</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['name_di']; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">อำเภอ</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['name_am']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-2">
                    <div class="input-group">
                            <label class="label">จังหวัด</label>
                            <input class="input--style-4" type="text" value="<?php echo $row_am['name_pr']; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group"> 
                            <label class="label">รหัสไปรษณีย์</label>
                            <input type="text" value="<?php echo $row_am['zip_code']; ?>" class="input--style-4" disabled>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">เบอร์โทร</label>
                            <input class="input--style-4" type="tel" value="<?php echo $row_am['tel']; ?>" disabled> 
                        </div>
                    </div>
                </div>
                <form method="POST" id="register" action="update_status.php?ID=<?php echo md5($row_am['id_petition']);?>">
                    <div class="row row-space">
                        <div>
                            <div class="input-group">
                                <label class="label">สถานะการดำเนินการ</label>
                                
                            </div>
                        </div>
                        <div class="col-2">
                        <div class="input-group">
                        <?php
                            if ($row_am['status'] == 3){
                                ?>
                                <input class="input--style-4" type="text" value="เสร็จสิ้น" disabled>
                                <?php
                            }else{
                                ?>
                                <select class="form-control" name="status" id="status" required>
                                    <option value='1' <?php if ($row_am['status'] == 1) echo "selected"; ?>>รอการตรวจสอบ</option>
                                    <option value='2' <?php if ($row_am['status'] == 2) echo "selected"; ?>>กำลังดำเนินการ</option>
                                    <option value='3' <?php if ($row_am['status'] == 3) echo "selected"; ?>>เสร็จสิ้น</option>
                                </select> 

                                <?php
                            }

                        ?>
                        
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group"> 
                                <label class="label">ผลการอนุมัติ</label>
                            </div>
                        </div>
                        <?php 
                        if ($row_am['approved'] != null) {

                            if ($row_am['approved'] == 1) {
                                ?> 
                                <div class="col-2">
                                    <div class="input-group"> 
                                        <input type="text" value="อนุมัติใบรับรอง" class="input--style-4" disabled>
                                    </div>
                                </div>
                                
                                <?php
                            }elseif($row_am['appoved'] == 0){
                                ?> 
                                <div class="col-2">
                                    <div class="input-group"> 
                                        <input type="text" value="ไม่อนุมัติใบรับรอง" class="input--style-4" disabled>
                                    </div>
                                </div>
                                
                                <?php
                            };
                        }else{
                                ?>
                                <div class="col-2">
                                    <div class="input-group"> 
                                        <select class="form-control" name="approved" id="approved" value="NULL">
                                        </select>
                                    </div>
                                </div>
                                
                                <?php
                        }
                        ?>
                    </div>
                </div>
                    <?php 
                    if ($row_am['status'] != 3) {
                        ?> 
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="reg_btn">ยืนยัน</button>
                        </div>
                        <?php
                    }else{
                        

                    }
                    ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#status').change(function() {
    var status = $(this).val();
      $.ajax({
      type: "POST",
      url: "ajax_succeed.php",
      data: {status:status,function:'succeed'},
      success: function(data){
        $('#approved').html(data); 
      }
    });
  });
</script>