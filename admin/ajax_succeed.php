<?php
  if (isset($_POST['function']) && $_POST['function'] == 'succeed') {
  	$status = $_POST['status'];
    if ($status == 3) {
        echo '<option value="" selected disabled>เลือกผลการอนุมัติ </option>';
        echo '<option value="1">อนุมัติ</option>';
        echo '<option value="0">ไม่อนุมัติ</option>';
    }
  }
?>