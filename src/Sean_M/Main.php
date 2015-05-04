<?php
namespace Sean_M\DeathKick;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\PlayerDeathEvent;

class Main extends PluginBase implements Listener{

     public function onEnable();
     $this->getServer()->getPluginManager()->registerEvents($this);
     $this->getLogger()->info("DeathKick enabled!");
     }
 
       public function onPlayerDeath(PlayerDeathEvent $event){
       $p = $event->getEntity();
       $p->kick($reason="You have died!");
       }
}
