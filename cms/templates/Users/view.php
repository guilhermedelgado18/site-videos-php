<h1>Detalhes do Usuário</h1>
<p><strong>ID:</strong> <?= h($user->id) ?></p>
<p><strong>Nome:</strong> <?= h($user->nome) ?></p>
<p><strong>Email:</strong> <?= h($user->email) ?></p>
<h2>Vídeos</h2>
<ul>
<?php foreach ($user->videos as $video): ?>
    <li><?= $this->Html->link($video->titulo, ['controller' => 'Videos', 'action' => 'view', $video->id]) ?></li>
<?php endforeach; ?>
</ul>