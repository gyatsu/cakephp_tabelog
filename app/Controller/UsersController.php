<?php

class UsersController extends AppController
{

  public function add ()
  {
       if ($this->request->is('post'))
       {
            $this->User->set($this->data);
            if ($this->User->validates())
            {
                $this->User->save($this->data);
            }
       }
  }
}