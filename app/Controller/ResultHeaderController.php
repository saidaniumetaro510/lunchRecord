<?php

/**
 * Created by PhpStorm.
 * User: KK
 * Date: 2017/07/23
 * Time: 23:34
 */
class ResultHeaderController extends AppController
{
    public $components = array('Paginator');

    public function index(){

        $settings = array(
            'fields' => array(
                "ResultHeader.id",
                "ResultHeader.lunch_date",
                "Store.store_name",
                "ResultHeader.created",
                "ResultHeader.modified",
            ),
            'joins' => array(
                array(
                    'type' => 'left',
                    'table' => 'stores',
                    'alias' => 'Store',
                    'conditions' => "ResultHeader.store_id = Store.id",
                ),
            ),
            'limit' => 3,
        );

        $this->Paginator->settings = $settings;
        $data = $this->Paginator->paginate('ResultHeader');
        $this->set('data',$data);
    }
}
