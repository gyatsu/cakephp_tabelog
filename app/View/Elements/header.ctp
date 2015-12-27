<div style="height:30px;">
  <span style="float:left;"><h1><?=$this->Html->link('CakePHP食べログ', array('controller' => 'shops' , 'action' => 'index'));?></h1></span>
  <?php if (!$isLogin) : ?>
    <span style="float:right;margin:auto 10px;"><?=$this->Html->link('新規登録', array('controller' => 'users', 'action' => 'add'));?></span>
  <?php endif; ?>
</div>