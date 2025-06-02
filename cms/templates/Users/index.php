<h1>Usuários</h1>
<?= $this->Html->link('Voltar à Home', ['controller' => 'Home', 'action' => 'index'], ['class' => 'button']) ?><br><br>
<?= $this->Html->link('Novo Usuário', ['action' => 'add']) ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= h($user->id) ?></td>
        <td><?= h($user->nome) ?></td>
        <td><?= h($user->email) ?></td>
        <td>
            <?= $this->Html->link('Ver', ['action' => 'view', $user->id]) ?> |
            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?> |
            <?= $this->Form->postLink('Excluir', ['action' => 'delete', $user->id], ['confirm' => 'Tem certeza?']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>