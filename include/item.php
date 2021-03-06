<div class="entry">
	<div class="meta">
		<a href="/note.php?id=<?= $id ?>">
			<?= date('M j, Y', $id) ?>
		</a>
		<b>&frasl;</b>
		<?php if ($auth and strpos($self, 'note')): ?>
			<a href="/edit.php?id=<?= $id ?>">edit</a>
			<b>&frasl;</b>
			<a href="/delete.php?id=<?= $id ?>">erase</a>
		<?php else: ?>
			<a href="/note.php?id=<?= $id ?>">
				<?= date('l', $id) ?>
			</a>
		<?php endif; ?>
	</div>

	<h4>
		<a class="title" target="_blank" href="<?= $note['url'] ?>">
			<?= $note['title'] ?>
		</a>
	</h4>

	<?php if ($note['quote']): ?>
		<p class="quote"><?= $note['quote'] ?></p>
	<?php endif; ?>

	<?php if ($note['note']): ?>
		<p class="note"><?= $note['note'] ?></p>
	<?php endif; ?>
</div>
