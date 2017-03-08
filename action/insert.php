<?php
  include '../connect/connect.php';

  // // 值存入指定變數
  $Types = $_POST["types"];//書的類型
  $BookName = trim($_POST["BookName"]);//書名
  // $Url = trim($_POST["Url"]);//網址
  $Url = $_POST["Url"];//網址

  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y");//時間
  //值存入指定變數

  //確認是否都有值or都不為空
  $true = isset($Types) && !empty($Types)&&
          isset($Url) && !empty($Url)&&
          isset($BookName) && !empty($BookName);
  //確認是否都有值or都不為空

  //新增資料指令
  if ($true) {
    $SqlInsert = "
                  INSERT INTO `bookname`(
                                        `types`,
                                        `bookname`,
                                        `url`,
                                        `datetime`
                                        ) VALUES (
                                        '".$Types."',
                                        '".$BookName."',
                                        '".$Url."',
                                        '".$datetime."'
                                        )";
    $TrueQu = $SqlQuery = $db->query($SqlInsert);

    if ($TrueQu) {
      echo "
            <script>
              alert('新增成功');
              document.location.href='../index.php';
            </script>
            ";
    }
  }else {
    echo "
          <script>
            alert('賣亂');
            document.location.href='../index.php';
          </script>
          ";
  }
  //新增資料指令

  //  if (isset($_POST["de"])) {
  //    $SqlDelete = "DELETE FROM `package` WHERE 1";
  //    $SqlQuery = $db->query($SqlDelete);
  //    header("Location:../index.php");
  //  }

  $db = null;
 ?>
