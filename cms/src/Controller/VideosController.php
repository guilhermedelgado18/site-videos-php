<?php
namespace App\Controller;

use App\Controller\AppController;

class VideosController extends AppController
{
    public function index()
    {
        $videos = $this->paginate(
            $this->Videos->find()->contain(['Users'])
        );

        $this->set(compact('videos'));
    }

    public function view($id = null)
    {
        $video = $this->Videos->get($id, ['contain' => ['Users']]);
        $this->set(compact('video'));
    }

    public function add()
    {
        $video = $this->Videos->newEmptyEntity();
        if ($this->request->is('post')) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('Vídeo salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar o vídeo.'));
        }
        $users = $this->Videos->Users->find('list');
        $this->set(compact('video', 'users'));
    }

    public function edit($id = null)
    {
        $video = $this->Videos->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('Vídeo atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao atualizar o vídeo.'));
        }
        $users = $this->Videos->Users->find('list');
        $this->set(compact('video', 'users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('Vídeo deletado.'));
        } else {
            $this->Flash->error(__('Erro ao deletar o vídeo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
?>