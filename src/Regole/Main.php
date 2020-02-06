<?php

namespace Regole;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command, CommandSender};
class Main extends PluginBase implements Listener {

  public function onEnable(){
 
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
    if ($cmd->getName() == "regole") {
      $sender->sendMessage("regole: 1. no grief, 2. no cheating, 3. no insulti 4. no bestemmie"); //puoi aggiungerne altri tra le virgolrtte
    }
    $this->getServer()->getPluginManager()->disablePlugin($this);
  }
  
}
