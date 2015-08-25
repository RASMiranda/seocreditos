<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Request Controller
 *
 * @property \App\Model\Table\RequestTable $Request
 */
class RequestController extends AppController
{

    public function landing()
    {
        $installments_options = array(1,2,3,4,5,6,7,8,9,10,11,12);
        $this->set(compact('installments_options'));
    }

    public function simulation()
    {
        $simulations = NULL;
        $this->set(compact('simulations'));
    }


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('request', $this->paginate($this->Request));
        $this->set('_serialize', ['request']);
    }

    /**
     * View method
     *
     * @param string|null $id Request id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $request = $this->Request->get($id, [
            'contain' => []
        ]);
        $this->set('request', $request);
        $this->set('_serialize', ['request']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $request = $this->Request->newEntity();
        if ($this->request->is('post')) {
            $request = $this->Request->patchEntity($request, $this->request->data);
            if ($this->Request->save($request)) {
                $this->Flash->success(__('The request has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('request'));
        $this->set('_serialize', ['request']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Request id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $request = $this->Request->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $request = $this->Request->patchEntity($request, $this->request->data);
            if ($this->Request->save($request)) {
                $this->Flash->success(__('The request has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('request'));
        $this->set('_serialize', ['request']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Request id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $request = $this->Request->get($id);
        if ($this->Request->delete($request)) {
            $this->Flash->success(__('The request has been deleted.'));
        } else {
            $this->Flash->error(__('The request could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
