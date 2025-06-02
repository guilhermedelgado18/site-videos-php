<h1>Vídeos</h1>
<?= $this->Html->link('Voltar à Home', ['controller' => 'Home', 'action' => 'index'], ['class' => 'button']) ?><br><br>
<?= $this->Html->link('Novo Vídeo', ['action' => 'add']) ?>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>URL</th>
        <th>Usuário</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($videos as $video): ?>
    <tr>
        <td><?= h($video->id) ?></td>
        <td><?= h($video->titulo) ?></td>
        <td><?= h($video->url) ?></td>
        <td><?= h($video->user->nome) ?></td>
        <td>
            <?= $this->Html->link('Ver', ['action' => 'view', $video->id]) ?> |
            <?= $this->Html->link('Editar', ['action' => 'edit', $video->id]) ?> |
            <?= $this->Form->postLink('Excluir', ['action' => 'delete', $video->id], ['confirm' => 'Tem certeza?']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>