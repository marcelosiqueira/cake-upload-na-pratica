<?php
App::uses('AppController', 'Controller');

/**
 * Events Controller
 *
 * @property Event $Event
 */
class EventsController extends AppController 
{

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function media($id = null) 
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($this->request->data); exit();
			if ($this->Event->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A Mídia foi salvo.'));
				$this->redirect(array('action' => 'media', $id));
			} else {
				$this->Session->setFlash(__('A Mídia não pode ser salvo. Por favor, tente novamente.'));
				debug($this->Event->validationErrors);
			}
		}
	
		$this->request->data = $this->Event->read(null, $id);
	}
	
}
