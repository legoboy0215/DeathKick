<?php
namespace Sean_M\DeathKick;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;

use pocketmine\event\Event;
use pocketmine\event\EventPriority;
use pocketmine\event\Listener;

use pocketmine\utils\Config;

use pocketmine\Player;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{

     public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
          $this->saveDefaultConfig();
          $tempconf = $this->getConfig();
          $this->getLogger()->info("DeathKick enabled!");
     }
 
     public function onPlayerDeath(PlayerDeathEvent $event){
          $p = $event->getEntity();
          $m = $event->getDeathMessage();
            $p->kick($m);
     }
}
