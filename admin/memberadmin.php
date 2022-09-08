<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('header.php');

        $query = "SELECT * FROM user WHERE user_type=2 AND id_user != '$user_id' ORDER BY id_user ASC" or die("Error:" . mysqli_error($con));

        $result = mysqli_query($con, $query);
 
        ?>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <?php
            include('menu.php'); 
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">สมาชิกผู้ดูแล</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                            <li class="breadcrumb-item active">admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a target="_blank" href="registeradmin.php">เพิ่มสมาชิกผู้ดูแล</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายชื่อสมาชิก
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>status</th>
                                            <th>Enable/Disable</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if($result->num_rows == 0){
                                    ?>
                                            <tr align="center">
                                            <td colspan="4">ไม่พบข้อมูล</td>
                                            </tr>   
                                    <?php 
                                        }else{
                                            while ($row_am =  mysqli_fetch_assoc($result)){ ?>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>status</th>
                                            <th>Enable/Disable</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row_am['name']; echo " "; echo $row_am['lastname']; ?></td>
                                            <td><?php echo $row_am['username']; ?></td>
                                            <?php if($row_am['user_status'] == 1){ ?>
                                                <td> กำลังใช้งาน </td>
                                                <td><a href="admin_disable_db.php?ID=<?php echo $row_am['id_user']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการปิดการใช้งาน')">ปิดการใช้งาน</a> </td>

                                            <?php }elseif($row_am['user_status'] == 0){ ?>
                                                <td> ถูกปิดงานใช้งาน </td>
                                                <td><a href="admin_enable_db.php?ID=<?php echo $row_am['id_user']; ?>" class='btn btn-success'  onclick="return confirm('ยืนยันเปิดการใช้งาน')">เปิดการใช้งาน</a> </td>
                                            <?php }?>
                                        </tr>
                                        
                                    </tbody>
                                    <?php }} ; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
