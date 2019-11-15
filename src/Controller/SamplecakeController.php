<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Samplecake Controller
 *
 * @property \App\Model\Table\SamplecakeTable $Samplecake
 *
 * @method \App\Model\Entity\Samplecake[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SamplecakeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $samplecake = $this->paginate($this->Samplecake);

        $this->set(compact('samplecake'));
    }

    /**
     * View method
     *
     * @param string|null $id Samplecake id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $samplecake = $this->Samplecake->get($id, [
            'contain' => []
        ]);

        $this->set('samplecake', $samplecake);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $samplecake = $this->Samplecake->newEntity();
        if ($this->request->is('post')) {
            $samplecake = $this->Samplecake->patchEntity($samplecake, $this->request->getData());
            if ($this->Samplecake->save($samplecake)) {
                $this->Flash->success(__('The samplecake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The samplecake could not be saved. Please, try again.'));
        }
        $this->set(compact('samplecake'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Samplecake id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $samplecake = $this->Samplecake->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $samplecake = $this->Samplecake->patchEntity($samplecake, $this->request->getData());
            if ($this->Samplecake->save($samplecake)) {
                $this->Flash->success(__('The samplecake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The samplecake could not be saved. Please, try again.'));
        }
        $this->set(compact('samplecake'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Samplecake id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $samplecake = $this->Samplecake->get($id);
        if ($this->Samplecake->delete($samplecake)) {
            $this->Flash->success(__('The samplecake has been deleted.'));
        } else {
            $this->Flash->error(__('The samplecake could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
