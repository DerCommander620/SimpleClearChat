<?php

namespace DerCommander610\Clear;

use pocketmine\player\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase {

    public function onEnable(): void {}

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch ($command->getName()){
            case "clearchat":
                if ($sender->hasPermission("clearchat.clear")){
                    Server::getInstance()->broadcastMessage(str_repeat("\n", 250));
                    $sender->sendMessage("§aChat has been cleared!");  
                } else {
                    $sender->sendMessage("§cYou don't have permission to execute this command");                    
                }
                return true;
        }
        return false;
    }
}
