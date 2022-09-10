<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('header.php');
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

            $id = $_REQUEST["ID"];
            $query = "SELECT * FROM petition,user,img WHERE MD5(petition.id_petition) ='$id' AND petition.id_user = user.id_user AND img.petition_id = '$id' " or die("Error:" . mysqli_error($con));
            $result = mysqli_query($con, $query);
            $row_am = mysqli_fetch_assoc($result);
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ใบรับรองของคุณ <?php echo $row_am['name']." ".$row_am['lastname'];?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">GAP</li>
                        </ol>
                        <img src="../images/petition/<?php echo $row_am['img'] ?>">
                    </div>
                </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
