<head>
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
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">เปลี่ยนรหัสผ่าน</h2>
                <form method="POST" id="reset" action="reset_password_db.php">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">รหัสผ่านเดิม</label>
                                <input class="input--style-4" type="password" name="password" id="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">รหัสผ่านใหม่</label>
                                <input class="input--style-4" type="password" name="newpassword" id="newpassword" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">ยืนยันรหัสผ่านใหม่อีกครั้ง</label>
                                <input class="input--style-4" type="password" name="confirmpassword" id="confirmpassword" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" required>
                            </div>
                        </div>
                    </div>
                    <div id="error_msg"></div>
                    <input type="hidden" name="a_id" value="<?php echo $user_id;?>">
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
<!-- end document-->