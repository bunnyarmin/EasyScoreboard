<?php

declare(strict_types=1);

namespace Test;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info("Test Scoreboard wurde geladen!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event): void
    {
        $player = $event->getPlayer();
        self::sendBasicScoreboard($player);
    }

    public function sendBasicScoreboard(Player $player): void
    {
        $scoreboard = new ScoreboardAPI();
        $scoreboard->create($player, " §6Mein Server ");
        $scoreboard->setLine($player, 1, "§1"); //empty
        $scoreboard->setLine($player, 2, " §cPlayerName§8: ");
        $scoreboard->setLine($player, 3, "§8» §r{$player->getDisplayName()}"); //displayName if player has a rank with color?
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()) {
            case "add":
                if ($sender instanceof Player) {
                    if ($sender->hasPermission("test.sb.add")) {
                        self::sendBasicScoreboard($sender);
                    }
                }
                return true;
            case "remove":
                if ($sender instanceof Player) {
                    if ($sender->hasPermission("test.sb.remove")) {
                        $scoreboard = new ScoreboardAPI();
                        $scoreboard->remove($sender);
                    }
                }
                return true;
            case "removeline":
                if ($sender instanceof Player) {
                    if ($sender->hasPermission("test.sb.rmline")) {
                        $scoreboard = new ScoreboardAPI();
                        //we will remove the displayname for testing
                        $scoreboard->removeLine($sender, 3);
                    }
                }
                return true;
            default:
                return false;
        }
    }
}