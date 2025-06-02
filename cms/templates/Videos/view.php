<h1>Detalhes do Vídeo</h1>
<p><strong>ID:</strong> <?= h($video->id) ?></p>
<p><strong>Título:</strong> <?= h($video->titulo) ?></p>
<p><strong>Descrição:</strong> <?= h($video->descricao) ?></p>
<p><strong>URL:</strong> <a href="<?= h($video->url) ?>" target="_blank">Ver vídeo</a></p>
<p><strong>Usuário:</strong> <?= h($video->user->nome) ?></p>
<?= $this->Html->link('Voltar', ['controller' => 'Videos', 'action' => 'index'], ['class' => 'button']) ?>