<div style="width:100%;height:80px;">
  <span style="float:left;"><h2><?=$data['Shop']['name']?></h2></span>
  <span style="float:right;"><h3><?=$data['Shop']['tel']?></h3></span>
</div>
  <?php if ($isLogin) : ?>
    <?php
     if ($isEdit) :
      $str = '編集';
    else :
      $str = '作成';
    endif;
    ?>
  <?=$this->Html->link('レビューを' . $str. 'する', array(
    'controller' => 'reviews', 'action' => 'edit', $data['Shop']['id']
    ));?>
  <?php else :?>
    <?=$this->Html->link('ユーザー登録してレビューを投稿', array(
        'controller' => 'users', 'action' => 'add'
    ))?>
  <?php endif; ?>
<div>
  <span>店舗情報</span>
  <table>
    <tr>
      <td style="width:25%;">店名</td>
      <td style="width:75%;"><?=$data['Shop']['name']?></td>
    </tr>
    <tr>
      <td>TEL・予約</td><td><?=$data['Shop']['tel']?></td>
    </tr>
    <tr>
      <td>住所</td><td><?=$data['Shop']['addr']?></td>
    </tr>
    <td>ホームページ</td><td><?=$data['Shop']['url']?></td>
    <tr>
  </table>
</div>
<div style="text-align:center;">
  <span>
    <?=$this->Html->link('新しいお店を登録する', array(
          'action' => 'add'
          ));?>
  </span>
</div>