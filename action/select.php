<?php

  include 'connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北

  if (isset($_GET["datetime"])) {//如果有選擇日期$datetime就等於選擇的值,下拉會用到
    $datetime = $_GET["datetime"];
  }else {
    $datetime = date("Y");//時間
  }

  //以日期當條件,取得全部資料
  $Select = "SELECT * FROM bookname WHERE datetime='".$datetime."'";
  $Query = $db->query($Select);
  $Display = $Query->fetchAll();
  //以日期當條件,取得全部資料

  //下拉顯示日期,Group by日期有重複值只會顯示一筆
  $SeDate = "SELECT datetime FROM bookname GROUP BY datetime";
  $QuDate = $db->query($SeDate);
  $DisDate = $QuDate->fetchAll();
  //下拉顯示日期,Group by日期有重複值只會顯示一筆

 ?>
