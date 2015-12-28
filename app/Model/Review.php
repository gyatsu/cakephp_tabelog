<?php

class Review extends AppModel
{
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
        ),
        'Shop' => array(
            'className' => 'Shop'
        )
    );

    public function isReview ($shopId, $userId)
    {
        $review = $this->getData($shopId, $userId);
        return !empty($review) ? true : false;
    }

    public function getData ($shopId, $userId)
    {
        $options = array(
            'conditions' => array(
                'shop_id' => $shopId,
                'user_id' => $userId
            )
        );
        return $this->find('first', $options);
    }
}