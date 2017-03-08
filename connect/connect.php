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
    //查詢
    function Selects(){

    }
    //查詢

    //刪除
    function Deletes(){

    }
    //刪除

    //新增
    function Inserts(){

    }
    //新增

    //更新
    function Updates(){

    }
    //更新
  }



?>
