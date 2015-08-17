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
            $death = $tempconf->get('death');
            $status = $death['status'];
              $this->getLogger()->info("DeathKick enabled!");
     }
 
     public function onPlayerDeath(PlayerDeathEvent $event){
        $p = $event->getEntity();
          $p->ban($this->settings['message'][That Death :(!]);
          $this->getServer()->broadcastMessage($p->getName(). "Has been banned. Reason Death!");
     }
}
