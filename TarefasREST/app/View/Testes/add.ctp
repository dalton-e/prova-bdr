<fieldset>
<legend>Adicionar Tarefa</legend>
<?php
echo $this->Form->create("Tarefa");
echo $this->Form->input("titulo");
echo $this->Form->input("descricao");
echo $this->Form->input("prioridade");
echo $this->Form->end("Cadastrar");
?>
</fieldset>
