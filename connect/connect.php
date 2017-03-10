<?php
  try {
    $username = 'root';
    $password = '12345678';
    $dbname="booklist";
    $dsn = "mysql:host=localhost;dbname=$dbname";
           $options = array(
                   PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                 );
       $db = new PDO($dsn, $username, $password, $options);
  } catch (Exception $e) {
    echo "失敗";
  }

  Class Sql{

    //宣告post變數
    function Variables($db, $Button){//$Button存入的是新增或刪除或查詢的值

      $dbs = $db;//連線
      $Status = $Button;//存入狀態值
      $Shelf_Number = $_POST["Shelf_Number"];//架號
      $Journal = $_POST["Journal"];//刊名
      $Classification = $_POST["Classification"];//分類號
      $Publication = $_POST["Publication"];//刊別
      $Language = $_POST["Language"];//語言
      $Budget = $_POST["Budget"];//預算科別
      $Money = $_POST["Money"];//金額
      $Source = $_POST["Source"];//來源
      date_default_timezone_set('Asia/Taipei');//設定時間為台北
      $datetime = date("Y-m-d H:i:s");//時間

      //值存入指定變數
      switch ($Status) {
        case 'Insert':
         $this->Inserts(
                        $Shelf_Number, $Journal, $Classification, $Publication,
                        $Language, $Budget, $Money, $Source, $datetime
                      );
        //  return $this->Inserts();
          break;

        default:
          # code...
          break;
      }
    }
    //宣告post變數

    //新增
    function Inserts(
                      $Shelf_Number, $Journal, $Classification, $Publication,
                      $Language, $Budget, $Money, $Source, $datetime){

      $SqlInsert = "
                    INSERT INTO `booklist`(
                                          `Shelf_Number`,
                                          `Journal`,
                                          `Classification`,
                                          `Publication`,
                                          `Language`,
                                          `Budget`,
                                          `Money`,
                                          `Source`,
                                          `datetime`
                                          ) VALUES (
                                          '".$Shelf_Number."',
                                          '".$Journal."',
                                          '".$Classification."',
                                          '".$Publication."',
                                          '".$Language."',
                                          '".$Budget."',
                                          '".$Money."',
                                          '".$Source."',
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
        }else {
        echo "
        <script>
        alert('賣亂');
        document.location.href='../index.php';
        </script>
        ";
      }

    }
    //新增

    //查詢
    function Selects($db){
      $SeSql = "SELECT * FROM `booklist` WHERE 1";
      $SeQu = $db->query($SeSql);
      $SeDis = $SeQu->fetchAll();
      return $SeDis;
    }
    //查詢

    //刪除
    function Deletes(){

    }
    //刪除

    //更新
    function Updates(){

    }
    //更新
  }



?>
