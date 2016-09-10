<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $helpers = array('Html', 'Session', 'Form');
    public $uses = array('User', 'Group');
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'main';
    }

    public function view() {

        $conditions = array();

        $this->Paginator->settings = array(
            'User' => array(
                'limit' => 2,
                'order' => array('User.modified' => 'DESC'),
                'recursive' => 0
            )
        );

        $result = $this->Paginator->paginate('User', $conditions);

        $this->set(compact('result'));
    }

    public function add() {

        if ($this->request->is('post')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('ท่านได้ทำการ เพิ่มผู้ใช้ใหม่ในระบบ เรียบร้อยแล้ว');
                return $this->redirect(array('controller' => 'users', 'action' => 'view'));
            } else {
                $this->Session->setFlash('ไม่สามารถทำการเพิ่มผู้ใช้ใหม่ในระบบได้ กรุณาตรวจสอบข้อมูลอีกครั้ง');
            }
        }

        $user_groups = $this->Group->find('list', array(
            'fields' => array('Group.id', 'Group.name'),
        ));
//        debug($user_groups);
        $this->set(compact('user_groups'));
    }

    public function read($id = 0) {
        if ($id != 0) {
            $this->User->unbindModel(array('hasOne' => array('Employee')));
            $user = $this->User->findById($id, array(), array(), 0, 0, 0);

            $title = sprintf("%04d", $user['User']['id']) . ' ' . $user['User']['name'] . ' ' . $user['User']['sername'];
            $this->set(compact('user', 'title'));

            $this->Breadcrumb->clear();
            $this->Breadcrumb->set(1, 'รายชื่อผู้ใช้งานระบบ', '/users/view');
            $this->Breadcrumb->set(2, $title, '/users/read/' . $id);

            $this->Setlayout->set_layout('Ady VT - ' . $title, 'manage_user', 'list_user');
        } else {
            exit;
        }
    }

    public function edit($id = 0) {
        if ($id != 0) {

            $success = false;
            if ($this->request->is('post')) {
                $this->User->id = $id;
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('ท่านได้ทำการ แก้ไขข้อมูลผู้ใช้ในระบบ เรียบร้อยแล้ว', 'notification_success');
                    $success = true;
                } else {
                    $this->Session->setFlash('ไม่สามารถทำการแก้ไขข้อมูลผู้ใช้ในระบบได้ กรุณาตรวจสอบข้อมูลอีกครั้ง', 'notification_fail');
                }
            }

            $this->User->unbindModel(array('hasOne' => array('Employee')));
            $user = $this->User->findById($id, array(), array(), 0, 0, 0);

            $title = sprintf("%04d", $user['User']['id']) . ' ' . $user['User']['name'] . ' ' . $user['User']['sername'];
            $this->set(compact('user', 'title'));

            if ($success) {
                $this->render('edit_success', 'ajax');
                return false;
            }

            $user_groups = $this->User_group->find('list', array(
                'fields' => array('User_group.id', 'User_group.name'),
            ));
            $this->set(compact('user_groups'));

            $this->render('edit', 'ajax');
        } else {
            exit;
        }
    }

    public function delete($id = 0) {
        if ($id != 0) {

            if ($this->User->delete($id)) {
                $this->Session->setFlash('คุณได้ทำการลบผู้ใช้ออกจากระบบแล้ว', 'notification_success');
            } else {
                $this->Session->setFlash('ไม่สามารถทำการลบข้อมูลผู้ใช้ออกจากระบบได้ กรุณาตรวจสอบข้อมูลอีกครั้ง', 'notification_fail');
            }
            return $this->redirect(array('controller' => 'users', 'action' => 'view'));
        } else {
            exit;
        }
    }

}
