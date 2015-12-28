<div style="float:right;">
 <?=$this->Html->Link('レストラン登録',
    array('controller' => 'shops' , 'action' => 'add')
 )?>
</div>
<h2>レストラン一覧</h2>
<?=$this->Session->flash('auth')?>
<?php foreach ($list as $data) : ?>
  <table style="border:solid 1px #000;">
    <tr>
      <td style="width:30%;">
        <?=$this->Html->link($data['Shop']['name'],
          array('action' => 'view', $data['Shop']['id'])) ; ?>
      </td>
      <td style="width:70%;">
      登録日:<?=$this->Time->format($data['Shop']['created'], '%Y/%m/%d'); ?>
      </td>
    </tr>
    <tr>
      <td rowspan="2" style="text-align:center">
        <?=$this->Html->image('square.jp')?>
      </td>
      <td>
        口コミ <?=count($data['Review'])?>
      </td>
    </tr>
    <tr>
      <td>
        <?php if (!empty($data['Review'])) : ?>
          <?php foreach ($data['Review'] as $value)  : ?>
            <?=$value['title']?> <?=$value['User']['email']?><span style="color:#B22222">(<?=count($value['User']['Review'])?>)</span><br>
          <?php endforeach ; ?>
        <?php endif; ?>
      </td>
    </tr>
    </table>
<?php endforeach; ?>
<div style="text-align:center;">
<?php
  echo $this->Paginator->prev('< 前へ');
  echo $this->Paginator->numbers();
  echo $this->Paginator->next('次へ >');
?>
</div>