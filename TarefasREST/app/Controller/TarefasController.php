<?php

class TarefasController extends AppController
{
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->RequestHandler->ext = 'xml';
    }
    
    public function index()
    {
        $tarefas = $this->Tarefa->find("all", array("order" => array("Tarefa.prioridade")));
        $this->set(array("tarefas" => $tarefas, "_serialize" => array("tarefas")));
    }
   
    public function add()
    {
        if($this->Tarefa->save($this->request->data)) {
            $mensagemRetorno = parent::OPERACAO_SUCESSO;
        } else {
            $mensagemRetorno = parent::OPERACAO_FALHA;
        }
        $this->set(array("mensagem" => $mensagemRetorno, "_serialize" => array("mensagem")));
    }
    
    public function edit($id)
    {
        $this->Tarefa->id = $id;
        if($this->Tarefa->save($this->request->data)) {
            $mensagemRetorno = parent::OPERACAO_SUCESSO;
        } else {
            $mensagemRetorno = parent::OPERACAO_FALHA;
        }
        $this->set(array("mensagem" => $mensagemRetorno, "_serialize" => array("mensagem")));
    }
    
    public function delete($id)
    {
        if($this->Tarefa->delete($id)) {
            $mensagemRetorno = parent::OPERACAO_SUCESSO;
        } else {
            $mensagemRetorno = parent::OPERACAO_FALHA;
        }
        $this->set(array("mensagem" => $mensagemRetorno, "_serialize" => array("mensagem")));
    }

}
