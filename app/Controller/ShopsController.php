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
}