<?php

namespace DerCommander610\Clear;

use pocketmine\player\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->getResource("config.yml");
    }
        public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
            switch ($command->getName()){
              case "clearchat":  
                  if($sender->hasPermission("clearchat.clearchat.cmd")){
                    $this->getServer()->broadcastMessage($this->getServer()->broadcastMessage(str_repeat("\n", 250))
                    $sender->sendMessage($this->getConfig()->get("ClearChatPrefix" . " " . $this->getConfig()->get("Clearchat.succesfull-message")))
                }
        }
     return true;
    }
}
