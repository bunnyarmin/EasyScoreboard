
# EasyScoreboardAPI

Die EasyScoreboardAPI bietet die Option simple ein Scoreboard fÃ¼r dein Minecraft: Bedrock Server zu erstellen.

Es ist eine API deshalb findet ihr keine Config File!!!

# Wie funktioniert es?

### Erstelle ein Scoreboard

```php
$scoreboard = new ScoreboardAPI();
$scoreboard->create($player, "Mein Server");
```

NICHT!
```php
Scoreboard::create();
```

### Entferne ein Scoreboard
```php
$scoreboard->remove($player);
```

### FÃ¼ge eine Linie hinzu
```php
$scoreboard->setLine($player, 1, "Linie 1");
```

### Entferne eine Linie
```php
$scoreboard->removeLine($player, 1);
```
