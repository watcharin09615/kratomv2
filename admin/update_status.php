<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$id = $_REQUEST["ID"];
$status = $_POST["status"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "UPDATE petition SET status = '$status' WHERE MD5(id_petition) ='$id'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

  
  if($result){
    if ($status == 3) {
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly');";
        echo "window.location = 'succeed.php';";
        echo "</script>";
        
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly');";
        echo "window.location = 'list_petition.php';";
        echo "</script>";
    }
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>