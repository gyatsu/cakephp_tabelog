<?php

class Shop extends AppModel
{
    public $validate = array(
        'name' => array(
            'rule' => array('notBlank')
        ),
        'tel' => array(
            'rule' => array('notBlank')
        ),
        'addr' => array(
            'rule' => array('notBlank')
        ),
        'url' => array(
            'rule' => array('url'),
        //    'rule' => array('url', true) trueを置く?
            'message' => '形式が正しくありません'
            )
        );
    public $hasMany = array(
        'Review' => array(
            'className' => 'Review',
            'order' => 'Review.created DESC'
        )
    );
}