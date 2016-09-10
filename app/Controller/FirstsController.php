<?php
class FirstsController extends AppController {

    public $name = 'Firsts';
    public $helpers = array('Html'); // เรียกใช้ Helper สำหรับการแสดงผล view
    public $layout = 'main'; // เรียกใช้ Layout ชื่อว่า main

    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    public function hello() {
        $title_for_layout = 'Welcome';
        $hello = 'Hello World !';

//        $this->layout = "main"; // เรียกใช้ Layout ชื่อว่า main
        $this->set('helloWorld',$hello);
        $this->set(compact('title_for_layout'));
        $this->render('hello');
    }
    
    public function test(){
        $this->helpers[] = 'Time';
    }
}
?>
