<div class="menu">
    <div class="center">
        <h5>lucian marin</h5>
        <h1>
            <a <? if(strpos($self, 'index.php') or strpos($self, 'note.php')): ?>class="selected"<? endif; ?> href="/">notes</a>
            <a <? if(strpos($self, 'search.php')): ?>class="selected"<? endif; ?> href="/search.php">search</a>
            <a <? if(strpos($self, 'products.php')): ?>class="selected"<? endif; ?> href="/products.php">products</a>
            <a <? if(strpos($self, 'about.php')): ?>class="selected"<? endif; ?> href="/about.php">about</a>
            <? if($auth): ?>
                <a <? if(strpos($self, 'add.php')): ?>class="selected"<? endif; ?> href="/add.php">add</a>
            <? endif; ?>
        </h1>
    </div>
</div>
