<h1>Adicionar Vídeo</h1>

<?php if ($users->isEmpty()) : ?>
    <p style="color:red;">⚠️ Não há usuários cadastrados. Cadastre um usuário antes de adicionar vídeos.</p>
    <?= $this->Html->link('Ir para Usuários', ['controller' => 'Users', 'action' => 'add'], ['class' => 'button']) ?>
<?php else : ?>
    <?= $this->Form->create($video) ?>
    <?= $this->Form->control('titulo') ?>
    <?= $this->Form->control('descricao') ?>
    <?= $this->Form->control('url') ?>
    <?= $this->Form->control('user_id', ['options' => $users]) ?>
    <?= $this->Form->button('Salvar') ?>
    <?= $this->Form->end() ?>
<?php endif; ?>

<?= $this->Html->link('Voltar à Home', ['controller' => 'Home', 'action' => 'index'], ['class' => 'button']) ?>
