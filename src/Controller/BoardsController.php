<?php
namespace App\Controller;
class BoardsController extends AppController
{
    public function index()
    {
        $boards = $this->paginate($this->Boards);
        $this->set(compact('boards'));
        $board = $this->Boards->newEmptyEntity();
        if ($this->request->is('post')) {
            $board = $this->Boards->patchEntity($board, $this->request->getData());
            if ($this->Boards->save($board)) {
                $this->Flash->success(__('投稿しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('投稿できませんでした'));
        }
        $this->set(compact('board'));
    }
    public function edit($id = null)
    {
        $board = $this->Boards->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $board = $this->Boards->patchEntity($board, $this->request->getData());
            if ($this->Boards->save($board)) {
                $this->Flash->success(__('更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('更新に失敗しました'));
        }
        $this->set(compact('board'));
    }
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $board = $this->Boards->get($id);
        if ($this->Boards->delete($board)) {
            $this->Flash->success(__('削除しました'));
        } else {
            $this->Flash->error(__('削除できませんでした'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
