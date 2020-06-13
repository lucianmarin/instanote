<div class="footer">
	<div class="center">
		<p>
			<?= date("Y"); ?>
			<a href="https://subreply.com/lucian">@lucian</a>
			&mdash;
			<?php if ($auth): ?>
				<a href="/set.php?logout">Logout</a>
			<?php else: ?>
				<a href="/rss.php">RSS</a>
			<?php endif; ?>
		</p>
	</div>
</div>

</body>
</html>
