<h1>Editar Usuário</h1>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('nome') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('senha') ?>
<?= $this->Form->button('Atualizar') ?>
<?= $this->Form->end() ?>
<?= $this->Html->link('Voltar', ['controller' => 'Users', 'action' => 'index'], ['class' => 'button']) ?>