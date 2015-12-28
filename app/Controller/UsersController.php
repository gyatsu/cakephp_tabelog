<?php

class UsersController extends AppController
{

  public $components = array(
      'Session',
      'Auth' => array(
          'authenticate' => array(
            'Form' => array(
                'fields' =>
                  array('username' => 'email', 'password' => 'passwd')
            )
          ),
          'loginRedirect' => array('controller' => 'shops', 'action' => 'index'),
          'logoutRedirect' => array('controller' => 'shops', 'action' => 'index'),
          'authError' => 'メールアドレスとパスワードを入力してください。'
      )
  );

  public function beforeFilter ()
  {
     parent::beforeFilter();
  }

  public function add ()
  {
       if ($this->request->is('post'))
       {
            $this->User->set($this->data);
            if ($this->User->validates())
            {
                $this->User->save($this->data);

                // ログイン状態にする
                $data = $this->User->find('first', array(
                    'conditions' => array('email' => $this->data['User']['email'])
                  ));
                $this->Auth->login($data);
                $this->Session->setFlash('ログインに成功しました', 'default', array()
                  , 'auth');
                return $this->redirect($this->Auth->redirect());
            }
       }
  }
}