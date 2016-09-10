<?php

App::uses('AppModel', 'Model');

class Group extends AppModel {

    public $name = 'Group';
    public $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'groups_id',
        )
    );
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'กรุณากรอกข้อมูล'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'ชื่อนี้ถูกใช้งานแล้ว'
            )
        )
    );

}

?>
