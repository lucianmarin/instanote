<?php
    include 'include/context.php';
	$posts = restore();
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
    	<div class="archive">
        	<input id="search" type="text" value="" placeholder="Keywords" onkeyup="search()" autocomplete="off" autofocus />
    	</div>
		<? foreach ($posts as $post): ?>
	        <div class="archive list">
		        <div class="meta">
			        <a href="/note.php?id=<?= $post['created'] ?>">
				        <?= ago($post['created']) ?> ago
				    </a>
                    <? if ($auth): ?>
                        <b>&frasl;</b>
                    	<a class="edit" href="/add.php?id=<?= $post['created'] ?>">edit</a>
                    <? endif; ?>
				</div>
	            <h4>
	                <a class="title" target="_blank" href="<?= $post['url'] ?>">
	                    <?= $post['title'] ?>
	                </a>
	            </h4>
	            <? if ($post['quote']): ?>
		            <p class="quote"><?= $post['quote'] ?></p>
		        <? endif; ?>
				<? if ($post['note']): ?>
		            <p class="note"><?= $post['note'] ?></p>
		        <? endif; ?>
	        </div>
		<? endforeach; ?>
		<div class="archive">
    		<p id="info"><?= count($posts) ?> notes</p>
		</div>
	</div>
</div>

<? include 'include/footer.php'; ?>
