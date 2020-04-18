<div class="menu">
	<div class="center">
		<h5>Lucian Marin</h5>
		<h1>
			<a
				class="<? if (strpos($self, 'index') or strpos($self, 'note')): ?>selected<? endif; ?>"
				href="/">Notes</a>
			<a
				class="<? if(strpos($self, 'search')): ?>selected<? endif; ?>"
				href="/search.php">Search</a>
			<a
				class="<? if (strpos($self, 'products')): ?>selected<? endif; ?>"
				href="/products.php">Products</a>
			<a
				class="<? if (strpos($self, 'about')): ?>selected<? endif; ?>"
				href="/about.php">About</a>
			<? if($auth): ?>
				<a
					class="<? if (strpos($self, 'edit')): ?>selected<? endif; ?>"
					href="/edit.php">Add</a>
			<? endif; ?>
		</h1>
	</div>
</div>
