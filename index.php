<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>電子雜誌清單整理</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- 自行輸入 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <!-- 自行輸入 -->

<!-- (Optional) Latest compiled and minified JavaScript translation files -->


    <!-- <script type="text/javascript" src="js/verification.js"></script> -->
    <?php
      include 'connect/connect.php';
     ?>
  </head>
  <body>
    <div class="container-fluid">
      <form class="form-horizontal" role="form" action="action/insert.php" method="post">

        <!--BookName書名-->
        <div class="form-group">
          <label for="Recipient" class="col-sm-2 control-label">書名</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="BookName" id="BookName" placeholder="輸入書名">
          </div>
        </div>
        <!--BookName書名-->
        <!-- Address 地址-->
        <div class="form-group">
          <label for="Address" class="col-sm-2 control-label">網址</label>
          <div class="col-sm-5">
            <input type="url" class="form-control" name="Url" id="Url" placeholder="輸入網址">
          </div>
        </div>
        <!-- Address 地址-->

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="submit" class="btn btn-default">送出</button>
            <a href="show.php">
              <button type="button" class="btn btn-default">搜尋</button>
            </a>
            <!-- <button type="submit" name="de" class="btn btn-default">刪除資料庫全部資料</button> -->
          </div>
        </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
