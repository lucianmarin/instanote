	<div class="footer">
		<div class="center">
			<p>
				<a href="/set.php?theme=white">White</a>
				<b>&frasl;</b>
				<a href="/set.php?theme=black">Black</a>
				<b>&frasl;</b>
				<span>
					<?= date("Y"); ?> &copy;
					<? if($auth): ?>
						<a href="/set.php?clear">Logout</a>
					<? else: ?>
						<a href="https://sublevel.net/lucian/">lucian</a>
					<? endif; ?>
				</span>
			</p>
		</div>
	</div>
</body>
</html>
