<div class="menu">
	<div class="center">
		<h5>Lucian Marin</h5>
		<h1>
			<a
				class="<?php if (strpos($self, 'index') or strpos($self, 'note')): ?>selected<?php endif; ?>"
				href="/">Notes</a>
			<a
				class="<?php if(strpos($self, 'search')): ?>selected<?php endif; ?>"
				href="/search.php">Search</a>
			<a
				class="<?php if (strpos($self, 'products')): ?>selected<?php endif; ?>"
				href="/products.php">Products</a>
			<a
				class="<?php if (strpos($self, 'about')): ?>selected<?php endif; ?>"
				href="/about.php">About</a>
			<?php if($auth): ?>
				<a
					class="<?php if (strpos($self, 'edit')): ?>selected<?php endif; ?>"
					<?php if (strpos($self, 'edit') and $id): ?>
						href="/edit.php?id=<?= $id ?>">Edit</a>
					<?php else: ?>
						href="/edit.php">Add</a>
					<?php endif; ?>
			<?php endif; ?>
		</h1>
	</div>
</div>
