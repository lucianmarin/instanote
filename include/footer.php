<div class="footer">
	<div class="center">
		<p>
			<?= date("Y"); ?>
			<a href="https://dubfi.com/lucian">@lucian</a>
			&mdash;
			<? if ($auth): ?>
				<a href="/set.php?logout">Logout</a>
			<? else: ?>
				<a href="/rss.php">RSS</a>
			<? endif; ?>
		</p>
	</div>
</div>

</body>
</html>
