<?php

App::uses('HttpSocket', 'Network/Http');

class TestesController extends AppController
{
    
    const URL_SERVIDOR_REST = "http://localhost/TarefasREST/tarefas";
    
    public $uses = array("Tarefa");
    public $components = array('RequestHandler');
    
    public function menu()
    {
        $this->set("tarefas", $this->Tarefa->find("all", 
            array("order" => array("Tarefa.prioridade"))));
    }

    public function index()
    {
        $url = self::URL_SERVIDOR_REST;
        
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($url, null);
        $this->set('response', $response->body);
        
        $this->render('index');
    }
   
    public function add()
    {
        $url = self::URL_SERVIDOR_REST;
        
        if ($this->request->is("post")) {
            $httpSocket = new HttpSocket();
            $response = $httpSocket->post($url, $this->request->data);
            $this->set('response', $response->body);
        
            $this->render('index');
        }
    }
    
    public function edit($id)
    {
        $url = self::URL_SERVIDOR_REST . "/" . $id;
        
        $tarefa = $this->Tarefa->findById($id);

        if ($this->request->is("post") || $this->request->is("put")) {
            $httpSocket = new HttpSocket();
            $response = $httpSocket->put($url, $this->request->data);
            $this->set('response', $response->body);
        
            $this->render('index');
        }
        
        if(!$this->request->data) {
            $this->request->data = $tarefa;
        }
    }
    
    public function delete($id)
    {
        $url = self::URL_SERVIDOR_REST . "/" . $id;
        
        $httpSocket = new HttpSocket();
        $response = $httpSocket->delete($url, null);
        $this->set('response', $response->body);
        
        $this->render('index');
    }

}
