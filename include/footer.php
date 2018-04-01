    <div class="footer">
        <div class="center">
            <p>
                <a href="/set.php?clear">Light</a>
                <b>&frasl;</b>
                <a href="/set.php?dark=on">Dark</a>
                <b>&frasl;</b>
                <span>
                    <?= date("Y"); ?> &copy;
                    <? if ($auth): ?>
                        <a href="/set.php?logout">Logout</a>
                    <? else: ?>
                        <a href="https://sublevel.net/lucian/">lucian</a>
                    <? endif; ?>
                </span>
            </p>
        </div>
    </div>
</body>
</html>
