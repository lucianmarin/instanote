<div class="content">
	<div class="meta">
		<a href="/note.php?id=<?= $id ?>">
			<?= date('M j, Y', $id) ?>
		</a>
		<b>&frasl;</b>
		<? if ($auth): ?>
			<a href="/add.php?id=<?= $id ?>">edit</a>
			<b>&frasl;</b>
			<a onclick="erase(this)">erase</a>
			<a class="hidden" href="/delete.php?id=<?= $id ?>">yes</a>
		<? else: ?>
			<a href="/note.php?id=<?= $id ?>">
				<?= date('l', $id) ?>
			</a>
		<? endif; ?>
	</div>
	<h4>
		<a class="title" target="_blank" href="<?= $note['url'] ?>">
			<?= $note['title'] ?>
		</a>
	</h4>
	<? if ($note['quote']): ?>
		<p class="quote"><?= $note['quote'] ?></p>
	<? endif; ?>
	<? if ($note['note']): ?>
		<p class="note"><?= $note['note'] ?></p>
	<? endif; ?>
</div>
