<h2>新規会員登録</h2>
  <?=$this->Form->create('User', array('action' => 'add'));?>
  <?=$this->Form->input('email', array('label' => 'メールアドレス', 'type' => 'email'));?>
  <?=$this->Form->input('passwd', array('label' => 'パスワード', 'type' => 'password'));?>
  <?=$this->Form->input('passwdconf', array('label' => 'パスワード(確認)', 'type' => 'password'));?>

  <?=$this->Form->end('登録する');?>
