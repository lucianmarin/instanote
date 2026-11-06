# Instanote

![screenshot](screenshot.png)

Lightweight note taking and link sharing built with PHP and a single JSON file (`data/notes.json`).

## Features

- **Zero-Database Storage**: Saves all notes (title, URL, quote, commentary) keyed by timestamp in `data/notes.json` with pretty-printed JSON.
- **Paginated Stream & Permalinks**: Displays 8 notes per page (`index.php?p=1`) and individual note permalinks (`note.php?id=`) with relative timestamps (`ago()`).
- **Full-Text Search**: Case-insensitive search across note titles, links, quotes, and body text (`search.php?q=`).
- **RSS Feed**: Generates an RSS 2.0 feed of recent notes at `rss.php`.
- **Cookie Authentication**: Simple MD5 password authentication (`login.php` / `set.php`) protecting `edit.php` and `delete.php`.

## Setup

1. Make the JSON storage files writable:
   ```bash
   chmod +w data/notes.json data/backup.json
   ```
2. Generate an MD5 hash of your password and set `$password` in `include/auth.php`:
   ```php
   <?php $password = '<md5-hash-of-your-password>'; ?>
   ```
3. Serve with PHP (`php -S localhost:8000` or Nginx via `insta.conf`) and log in at `/login.php`.
