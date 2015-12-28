<?php

class ReviewsController extends AppController
{
    public function edit ($shopId = null)
    {
        $review = $this->Review->getData($shopId, $this->user['id']);

        $id = !empty($review['Review']['id']) ? $review['Review']['id'] : 0;
        $title = !empty($review['Review']['title']) ? $review['Review']['title'] : '';
        $body = !empty($review['Review']['body']) ? $review['Review']['body'] : '';
        $score = !empty($review['Review']['score']) ? $review['Review']['score'] : '';

        $this->set('id', $id);
        $this->set('score', $score);
        $this->set('title', $title);
        $this->set('body', $body);
        $this->set('shopId', $shopId);
        $this->set('scoreList', Configure::read('scoreList'));
    }
}