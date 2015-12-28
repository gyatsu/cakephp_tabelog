<h2>ログイン</h2>
  <?=$this->Form->create('User', array('action' => 'login'));?>
  <?=$this->Form->input('email', array(
    array('label' => 'メールアドレス', 'type' => 'email')
  ))?>
  <?=$this->Form->input('passwd', array(
    array('label' => 'パスワード', 'type' => 'password')
  ));?>
  <?=$this->Form->end('ログイン');?>