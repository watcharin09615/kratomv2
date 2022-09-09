<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('header.php');

        $query = "SELECT * FROM user JOIN petition ON user.id_user = petition.id_user" or die("Error:" . mysqli_error($con));

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
                        <h1 class="mt-4">รายการคำร้อง</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                            <li class="breadcrumb-item active">รายการคำร้อง</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="add_petition.php">เพิ่มคำร้องยื่นขอใบรับรอง</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายการคำร้อง
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>วันที่ยื่นคำร้อง</th>
                                            <th>สายพันธ์ุ</th>
                                            <th>สถานะ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if($result->num_rows == 0){
                                    ?>
                                            <tr align="center">
                                            <td colspan="5">ไม่พบข้อมูล</td>
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
                                            <td><?php echo $row_am['petition_date']; ?></td>
                                            <td><?php echo $row_am['species']; ?></td>
                                            <?php if($row_am['status'] == 1){ ?>
                                                <td bgcolor="FFFF89"> รอการตรวจสอบ </td>
                                            <?php }elseif($row_am['status'] == 2){ ?>
                                                <td bgcolor="88FFEF"> กำลังดำเนินการ </td>
                                            <?php }elseif($row_am['status'] == 3){?>
                                                <td bgcolor="A4FB00"> เสร็จสิ้น <?php if ($row_am['approved'] == 1) {
                                                    ?> (อนุมัติ) <a href="#" class="btn btn-info btn-sm"> ดูใบรับรอง</a> <?php
                                                }elseif ($row_am['approved'] == 0) {
                                                    ?> (ไม่อนุมัติ) <?php
                                                } ?></td>
                                            <?php } ?>
                                            <td>
                                                <a href="detail_petition.php?ID=<?php echo md5($row_am['id_petition']); ?>" class="btn btn-info btn-sm"> รายละเอียด</a>
                                                
                                        
                                            </td>
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
