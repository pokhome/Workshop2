<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

    public $name = 'User';
    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'groups_id'
        )
    );
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'กรุณากรอกข้อมูล'
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'ข้อมูล email ไม่ถูกต้อง'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Email นี้ถูกใช้งานแล้ว'
            )
        )
    );

}

?>
