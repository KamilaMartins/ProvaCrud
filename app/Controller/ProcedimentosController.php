<?php
App::uses('AppController', 'Controller');
/**
 * Procedimentos Controller
 *
 * @property Procedimento $Procedimento
 * @property PaginatorComponent $Paginator
 */
class ProcedimentosController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session');

	public function index() {
		$options['order'] = array(
            'Procedimento.nome ASC'
        );

		$procedimentos = $this->Procedimento->find('all', $options);
		$this->set('procedimentos', $procedimentos);

		$paciente = $this->Session->read('Paciente');
        $this->set('idPaciente', $paciente[0]['Paciente']['id']);
	}

	public function index_admin() {
		$this->set('procedimentos', $this->Procedimento->find('all'));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Procedimento->create();
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__('Procedimento salvo.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('Erro, tente novamente.'));
			}
		}
	}

	public function editar($id = null) {
		if (!$this->Procedimento->exists($id)) {
			throw new NotFoundException(__('Invalid Procedimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__('Procedimento salvo.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('Erro, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Procedimento.' . $this->Procedimento->primaryKey => $id));
			$this->request->data = $this->Procedimento->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Procedimento->id = $id;
		if (!$this->Procedimento->exists()) {
			throw new NotFoundException(__('Invalid Procedimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Procedimento->delete()) {
			$this->Flash->success(__('Procedimento deletado.'));
		} else {
			$this->Flash->error(__('Erro, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index_admin'));
	}
}
