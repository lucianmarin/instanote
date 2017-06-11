<div class="content">
    <div class="meta">
        <a class="link" href="/note.php?id=<?= $post['created'] ?>">
	        <?= date('M j, Y', $post['created']) ?>
	    </a>
        <b>&frasl;</b>
        <? if ($auth): ?>
        	<a class="edit" href="/add.php?id=<?= $post['created'] ?>">edit</a>
            <b>&frasl;</b>
        	<a onclick="erase(this)">erase</a>
            <a class="hidden" href="/delete.php?id=<?= $post['created'] ?>">yes</a>
        <? else: ?>
            <b><?= date('l', $post['created']) ?></b>
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
