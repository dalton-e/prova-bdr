<table>
    <tr>
        <th>C&oacute;digo</th>
        <th>T&iacute;tulo</th>
        <th>Descri&ccedil;&atilde;o</th>
        <th>Prioridade</th>
        <th>Op&ccedil;&otilde;es</th>
        <th></th>
    </tr>
    <?php foreach ($tarefas as $tarefa) { ?>
        <tr>
            <td><?php echo $tarefa["Tarefa"]["id"]; ?></td>
            <td><?php echo $tarefa["Tarefa"]["titulo"]; ?></td>
            <td><?php echo $tarefa["Tarefa"]["descricao"]; ?></td>
            <td><?php echo $tarefa["Tarefa"]["prioridade"]; ?></td>
            <td><?php echo $this->Html->link("Editar", 
                array("action" => "edit", $tarefa["Tarefa"]["id"])); ?></td>
            <td><?php echo $this->Form->postLink("Excluir", 
                array("action" => "delete", $tarefa["Tarefa"]["id"]),
                array("confirm" => "Tem certeza?")); ?></td>
        </tr>
    <?php } ?>
</table>
