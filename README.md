
# EasyScoreboardAPI

Die EasyScoreboardAPI bietet die Option simple ein Scoreboard für dein PocketMine Server zu erstellen.
Es ist wirklich der cleanste Weg den ich kenne.

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

### Füge eine Linie hinzu
```php
$scoreboard->setLine($player, 1, "Linie 1");
```

### Entferne eine Linie
```php
$scoreboard->removeLine($player, 1);
```

# Installation
Einfach in dein Plugin Ordner packen und die passende Namespace eintragen!

# Empfehlung
Außerdem empfehle ich die Nutzung der API ausschließlich in Events, z.B. im PlayerJoinEvent dem Spieler sein Scoreboard zuteilen,
beim PlayerDeathEvent einfach die Line removen und neu adden.
Beim Ping Status oder TPS Status kann man natürlich eine Task benutzen, man sollte einfach beachten das sich nur Lines in der Task befinden die sich wirklich öfters wiederholen.
Beispiel: Der Spielername bleibt immer gleich, etc..!
