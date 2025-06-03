This demo map controller is meant to be run standalone.

Run a local PHP server inside this folder:

```bash
php -S localhost:8080
```

Then point the game's `liveUrl` configuration to `http://localhost:8080/map.php`.

The controller serves static JSON from the `json/` directory while all images continue to load from the original `cdn` directory.
