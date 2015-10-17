<fieldset>
<legend>Editar Tarefa</legend>
<?php
echo $this->Form->create("Tarefa");
echo $this->Form->input("id", array("type" => "hidden"));
echo $this->Form->input("titulo");
echo $this->Form->input("descricao");
echo $this->Form->input("prioridade");
echo $this->Form->end("Alterar");
?>
</fieldset>
