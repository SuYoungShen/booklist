<?php
  include '../connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y");//時間
  $last_year = date("Y",strtotime("-1 year"));//去年的時間

  $Sql = new Sql();

  if (isset($_POST["Last_Year"])) {

    $SelHow = $Sql->Select($db, $last_year);//先搜尋資料庫看看有無去年的資料

    if (!is_null($SelHow)) {//當有今年資料時,會回傳去年的年份,沒有的話會回傳null
      $DelHow = $Sql->Delete($db, $SelHow);
      if ($DelHow == true) {
        message("刪除去年資料成功","../show.php");
      }else {
        message("刪除去年資料失敗","../show.php");
      }
    }else {
      message("已無去年的資料囉!!!","../show.php");
    }
  }

  if (isset($_POST["This_Year"])) {
    $SelHow = $Sql->Select($db, $datetime);//先搜尋資料庫看看有無今年的資料

    if (!is_null($SelHow)) {//當有今年資料時,會回傳今年的年份,沒有的話會回傳null

      $DelHow = $Sql->Delete($db, $SelHow);

      if ($DelHow == true) {
        message("刪除今年資料成功","../show.php");
      }else {
        message("刪除今年資料失敗","../show.php");
      }
    }else {
      message("已無今年的資料囉!!!","../show.php");
    }
  }


  class Sql{

    function Select($db, $last_year){

      $SelSql = "SELECT datetime FROM `bookname` WHERE datetime='".$last_year."'";//查詢去年資料

      $Que = $db->query($SelSql);
      $Dis = $Que->fetch();
      return $Dis["datetime"];

    }

    function Delete($db, $last_year){
      $DeSql = "DELETE FROM `bookname` WHERE datetime = '".$last_year."'";
      $Que = $db->query($DeSql);
      if ($Que == true) {
        return true;
      }else{
        return false;
      }
    }
  }

  function message($message, $url){
    echo "
      <script>
        message = '$message';
        url = '$url';
        alert(message);
        document.location.href = url;
      </script>
    ";
  }

 $db = null;
 ?>
