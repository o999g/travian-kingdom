This demo map controller is meant to be run standalone.

Run a small PHP server inside this folder so it can reply to requests:

```bash
php -S localhost:8080 -t .
```

After starting the server, adjust the game's API URL. In
`cdn/0.48/js/game.js` set `config.SERVER_ENV` to `"devPHP"` and point
`config.devPHPUrl` at your running server:

```javascript
config.SERVER_ENV = "devPHP";
config.devPHPUrl = "http://localhost:8080/map.php";
```

The controller here serves static JSON from the `json/` directory while
image assets remain loaded from the original `cdn` directory. CORS
headers allow the rest of the project to fetch this data directly.

When running from another directory, ensure the game URL is set to the full path to `map.php`. The script includes CORS headers so you can keep using images hosted by the original project.
