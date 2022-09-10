<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$id = $_POST['id'];
$img =(isset($_POST['image']) ? $_POST['image'] :'');
$upload=$_FILES['image'];
if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="../images/petition/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['image']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='GAP_'.$id.$type;
	$path_copy=$path.$newname;
	$path_link="../images/petition/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['image']['tmp_name'],$path_copy);
	}


//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "INSERT INTO img(petition_id,img) VALUES('$id','$newname')";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Upload Succesfuly');";
  echo "window.location = 'list_petition.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ล้มเหลวโปรดลองใหม่อีกครั้ง');";
  echo "</script>";
}
?>