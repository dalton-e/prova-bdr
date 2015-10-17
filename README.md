# prova-bdr
Para responder as questões eu procurei utilizar boas práticas de programação como nomes de variáveis e métodos significativos, extrair condicionais para métodos explicativos, evitar repetição de código, métodos curtos e objetivos, sempre levando em conta manter a boa legibilidade do código. Na questão 3 em particular foi feita uma refatoração que visa melhorar a utilização da classe em testes através da injeção de dependência, por isso removendo a instanciação da conexão dentro do método de busca.

Questão 4 - Sistema REST
PHP version 5.6.12
MySQL version 5.6.26
CakePHP version 2.7.5

A aplicaçao foi feita utilizando o framework CakePHP. Para executar o projeto basta copiar a pasta TarefasREST para o servidor localhost web e acessar a URL "http://localhost/TarefasREST/"

O script para criação do banco de dados está no arquivo "banco.sql", também encontrado em "/TarefasREST/app/Config/Schema"

A configuração do banco no projeto é feita no arquivo "/TarefasREST/app/Config/database.php" 

public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'pwd',
		'database' => 'prova',
		'prefix' => '',
		'encoding' => 'utf8',
	);
	
	
A API REST para o controle de tarefas está definida no arquivo "/TarefasREST/app/Controller/TarefasController.php", através dos métodos index (listar tarefas), add (incluir tarefa), edit (alterar tarefa) e delete (excluir tarefa). A resposta está em formato XML.

Para utilizar esta API foi criada um cliente de teste no mesmo projeto em "/TarefasREST/app/Controller/TestesController.php", o qual utiliza os métodos HTTP para acessar suas funcionalidades como listado abaixo:
GET /tarefas - listar tarefas
POST /tarefas - incluir uma tarefa
PUT /tarefas/id - alterar a tarefa com o id igual ao passado
DELETE /tarefas/id - excluir a tarefa com o id igual ao passado

Acessando a interface através de "http://localhost/TarefasREST/" é possível visualizar a lista de tarefas com opções para incluir, alterar e excluir. Imagens de exemplos estão na pasta prtscr.
