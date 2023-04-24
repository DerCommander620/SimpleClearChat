<?php

namespace DerCommander610\Clear;

use pocketmine\player\Player;
use pocketmine\command\CommanderSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

class Clearchat extends PluginBase {

    public function onEnable(): void {
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->getResource("config.yml")
    }

        public function onCommand(CommandSender $sender, Command $command, string $label, array $args): void {
            if($command->getName()){
              case "clearchat"
                if($sender->hasPermission("clearchat.cmd")){
                    $player->sendMessage(" \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n" . $this->getConfig()->get("Prefix") . "§a >> Du hast erfolgreich den Chat gelöscht!");
                }
        }
    }
}