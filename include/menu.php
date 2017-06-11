<div class="menu">
	<div class="center">
	    <h5>lucian marin</h5>
	    <h1>
	        <a <? if(strpos($self, 'index.php') or strpos($self, 'note.php')): ?>class="selected"<? endif; ?> href="/">notes</a>
            <a <? if(strpos($self, 'archive.php')): ?>class="selected"<? endif; ?> href="/archive.php">search</a>
        	<a <? if(strpos($self, 'about.php')): ?>class="selected"<? endif; ?> href="/about.php">about</a>
	        <? if($auth): ?>
	            <a <? if(strpos($self, 'add.php')): ?>class="selected"<? endif; ?> href="/add.php">add</a>
            <? else: ?>
            	<a <? if(strpos($self, 'contact.php')): ?>class="selected"<? endif; ?> href="/contact.php">contact</a>
	        <? endif; ?>
	    </h1>
	</div>
</div>
