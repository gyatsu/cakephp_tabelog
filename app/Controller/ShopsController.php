<?php

class ShopsController extends AppController
{
    // var $scaffold;
    public function index ()
    {
$this->log($this->Shop->find('all'));
        $this->set('list', $this->Shop->find('all'));
    }

    public function view ($id)
    {
    $this->set('data', $this->Shop->findById($id));
    }
    public function add ()
    {
        if ($this->request->is('post'))
        {
            $this->Shop->set($this->data);
            if ($this->Shop->validates())
            {
                $this->Shop->save($this->data);
                $this->redirect('index');
            }
        }
    }
}