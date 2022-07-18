
# EasyScoreboardAPI

Die EasyScoreboardAPI bietet dir die Option simple ein Scoreboard für dein PocketMine Server zu erstellen.
Es ist wirklich der cleanste und einfachste Weg den ich kenne.

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

### Füge eine Linie hinzu
```php
$scoreboard->setLine($player, 1, "Linie 1");
```

### Entferne eine Linie
```php
$scoreboard->removeLine($player, 1);
```

# Installation
ScoreboardAPI.php herunterladen und in dein Projekt Ordner packen, namespace auf dein Projekt anpassen und du kannst die API direkt nutzen!

# Empfehlung
Außerdem empfehle ich die Nutzung der API ausschließlich in Events, z.B. im PlayerJoinEvent dem Spieler sein Scoreboard zuteilen,
beim PlayerDeathEvent einfach die Line removen und neu adden (falls Kills/Deaths in Scoreboard eingetragen sind).
Beim Ping Status oder TPS Status kann man natürlich eine Task benutzen, man sollte einfach beachten das sich nur Lines in der Task befinden die sich wirklich öfters wiederholen.
Beispiel: Der Spielername bleibt immer gleich, etc..!
