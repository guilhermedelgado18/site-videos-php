<h1>Adicionar Usuário</h1>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('nome') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('senha') ?>
<?= $this->Form->button('Salvar') ?>
<?= $this->Form->end() ?>