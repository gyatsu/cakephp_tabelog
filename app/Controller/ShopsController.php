<?php

class ShopsController extends AppController
{
    // var $scaffold;
    public $uses = array('Shop', 'Review');

    public $helpers = array('Paginator');

    public $components = array('Paginator');

    public function beforeFilter ()
  {
        parent::beforeFilter();
  }

    public function index ()
    {
        $this->Paginator->settings = array(
            'limit' => 5,
            'order' => array('created' => 'desc'),
            'recursive' => 3
        );

// $this->log($this->Shop->find('all'));
        // $this->set('list', $this->Shop->find('all'));
        $this->set('list', $this->paginate());
    }

    public function view ($id)
    {
        $userId = !empty($this->user['id']) ? $this->user['id'] : 0;
        $this->set('isEdit', $this->Review->isReview($id, $userId));

        if ($this->isLogin) {
            $this->set('myReviewCnt', $this->Review->getReviewCnt($this->user['id']));
        }

        list($score, $scoreAve) = $this->Review->getScoreAvg($id);
        $this->set('scoreAve', $scoreAve);
        $this->set('score', $score);
        $this->set('scoreList', Configure::read('scoreList'));
        $this->set('reviewList', $this->Review->getListByShopId($id));
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