<?php

class User extends AppModel
{

  public $validate = array(
      'email' => array(
          'validEmail' => array(
              'rule' => array('email'),
              'message' => 'メールアドレスを入力してください'
          ),
          'emailExists' => array(
            'rule' => array('isUnique', array('email')),
            'message' => '既に登録済みです'
          )
      ),
      'passwd' => array(
          'match' => array(
            'rule' => array('confPassword', 'passwdconf'),
            'message' => 'パスワード(確認)が一致しません'
          )
      )
  );

  public function confPassword ( $field, $colum )
  {
      if ($field['passwd'] === $this->data['User'][$colum])
      {
          return true;
      }
  }


}