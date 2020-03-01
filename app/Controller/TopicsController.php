<?php

/**
* TopicsController
*/
class TopicsController extends AppController
{
	//public $components = array('Session');
	public $components = array('Flash');
	public function index(){
		$data = $this->Topic->find('all');
		$this->set('topics', $data);

	}	
	public function add(){
		if ($this->request->is('post')) {
			$this->Topic->create();
			if($this->Topic->save($this->request->data)){
				//$this->Session->setFlash('The topic has been created!');
				$this->Flash->set('The topic has been created'); 
				$this->redirect('index');
			}
		}

	}
	public function view($id){
		$data = $this->Topic->findById($id);
		$this->set('topic', $data);
	}
}

?>