<?php
  include 'bubble_sort.php';

  $Language = array();// 語言
  $LanUrl = array();// 語言網址
  $LanId = array();// 語言id

  $Technology = array();// 科技
  $TecUrl = array();// 科技網址
  $TecId = array();// 科技id

  $Tour = array();// 旅遊
  $TourUrl = array();// 旅遊網址
  $TourId = array();// 旅遊ID

  $Other = array();// 其他
  $OtherUrl = array();// 其他網址
  $OtherId = array();// 其他ID

foreach ($Display as $key => $value) {
  $id = $value["id"];//id
  $Types = $value["types"];//類型
  $BookName = $value["bookname"];//收件人
  $Url = $value["url"];//地址

    switch ($Types) {

      case '語言學習類':
        array_push($LanId, $id);
        array_push($Language, $BookName);//新的書名加在陣列後面
        array_push($LanUrl,$Url);//新的網址加在陣列後面
        break;

      case '商業類、科技類':
        array_push($TecId,$id);
        array_push($Technology, $BookName);
        array_push($TecUrl,$Url);//新的網址加在陣列後面
        break;

      case '旅遊、時尚流行類':
        array_push($TourId, $id);
        array_push($Tour, $BookName);
        array_push($TourUrl,$Url);//新的網址加在陣列後面
      break;

      case '人文藝術、其它類':
        array_push($OtherId, $id);
        array_push($Other, $BookName);
        array_push($OtherUrl,$Url);//新的網址加在陣列後面
      break;

      default:
        # code...
        break;
    }
  }//foreach

  //各類書籍的總數
  $LanCount = count($Language);//語言
  $TecCount = count($Technology);//科技
  $TourCount = count($Tour);//旅遊
  $OtherCount = count($Other);//其他
  //各類書籍的總數

  //把書籍總數以陣列儲存,準備排序
  $Data = array($LanCount, $TecCount, $TourCount, $OtherCount);
 //把書籍總數以陣列儲存,準備排序

 //把Data丟到compare函示去排序,desc由大到小
 $Sort = compare($Data, 'desc');
 //把Data丟到compare函示去排序,desc由大到小

 // 顯示所有資料,當td被觸及時,可以做更新資料(action/update.php)
  for ($i=0; $i < $Sort[0] ; $i++) {
    echo "
    <tr>
      <td></td>
      <td data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' onclick='edit(\"$LanId[$i]\",\"$Language[$i]\", \"$LanUrl[$i]\")'>
        <a href='$LanUrl[$i]'>$Language[$i]</a>
        </td>

      <td data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' onclick='edit(\"$TecId[$i]\",\"$Technology[$i]\", \"$TecUrl[$i]\")'><a href='$TecUrl[$i]'>$Technology[$i]</a>
      </td>

      <td  data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' onclick='edit(\"$TourId[$i]\",\"$Tour[$i]\", \"$TourUrl[$i]\")'><a href='$TourUrl[$i]'>$Tour[$i]</a>
      </td>

      <td  data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' onclick='edit(\"$OtherId[$i]\",\"$Other[$i]\", \"$OtherUrl[$i]\")'><a href='$OtherUrl[$i]'>$Other[$i]</a>
      </td>
    </tr>
    ";
  }
// 顯示所有資料,當td被觸及時,可以做更新資料

 ?>
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@twbootstrap">Open modal for @twbootstrap</button>
...more buttons... -->
<script type="text/javascript">
  function edit(id, bookname, url){
    document.getElementById("id").value = id;
    document.getElementById("BookName").value = bookname;
    document.getElementById("url").value = url;
  }
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel">更新資料</h4>
      </div>
      <form role="form" action="action/update.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="control-label">書名:</label>
            <input type="hidden" name="id" id=id>
            <input type="text" class="form-control" id="BookName" name="BookName">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">網址:</label>
            <input type="text" class="form-control" id="url" name="Url">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="Up" class="btn btn-primary">送出</button>
          <button type="submit" name="De" class="btn btn-danger pull-left">刪除</button>
        </div>
      </form>
    </div>
  </div>
</div>
