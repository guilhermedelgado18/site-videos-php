<h1>Adicionar Vídeo</h1>
<?= $this->Form->create($video) ?>
<?= $this->Form->control('titulo') ?>
<?= $this->Form->control('descricao') ?>
<?= $this->Form->control('url') ?>
<?= $this->Form->control('user_id', ['options' => $users]) ?>
<?= $this->Form->button('Salvar') ?>
<?= $this->Form->end() ?>