<h1 class="page-header">ＵＲＬ 詰め</h1>

<h2 class="sub-header">リンク付ける</h2>
<div class="table-responsive">
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">タイトル</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="slug" placeholder="リンクタイトル">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">ＵＲＬ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="url" placeholder="rei.com">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="add" class="btn btn-default">入力</button>
      </div>
    </div>
  </form>
</div>

<h2 class="sub-header">リンク</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>スラッグ</th>
        <th>ＵＲＬ</th>
        <th>見回数</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i = 0;
        while ( $row = $LINKS->fetch_assoc() ) {
          echo '<tr>';
          echo '<form action="" method="POST" onsubmit="return confirm(\'Are you sure you want to delete this url?\');">';
          echo '<td>' . ++$i . '</td>';
          echo '<td>' . $row['slug'] . '<input name="slug" value="' . $row['slug'] . '" hidden /></td>';
          echo '<td>' . $row['url'] . '</td>';
          echo '<td>' . $row['hits'] . ' 回</td>';
          // echo '<td>' . $row['date'] . '</td>';
          echo '<td><input type="submit" name="delete" value="X" /></td>';
          echo '</form>';
          echo '</tr>';
        }


       ?>
    </tbody>
  </table>
</div>