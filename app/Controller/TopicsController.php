<?php

/**
* TopicsController
*/
class TopicsController extends AppController
{
	public $components = array('Session');
	public function index(){

	}	
	public function add(){
		if ($this->request->is('post')) {
			$this->Topic->create();
			if($this->Topic->save($this->request->data)){
				$this->Session->setFlash('The topic has been created!');
				$this->redirect('index');
			}
		}

	}
}

?>