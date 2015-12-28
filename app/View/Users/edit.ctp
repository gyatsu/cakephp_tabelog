<h2>設定変更</h2>
  <?=$this->Form->create('User', array('action' => 'edit'))?>
  <?=$this->Form->input('email',
    array('label' => 'メールアドレス', 'type' => 'email', 'value' => $user['email'])
  )?>
  <?=$this->Form->input('passwdold',
    array('label' => '旧パスワード', 'type' => 'password')
  )?>
  <?=$this->Form->input('passwd',
    array('label' => '新パスワード', 'type' => 'password')
  )?>
  <?=$this->Form->input('passwdconf',
    array('label' => '新パスワード(確認)', 'type' => 'password')
  )?>
  <?=$this->Form->hidden('id', array('value' => $user['id']))?>

  <?=$this->Form->end('編集する')?>