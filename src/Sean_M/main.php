<?php
namespace Sean_M\DeathKick;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

     public function onEnable();
     $this->getServer()->getPluginManager()->registerEvents($this);
     $this->getLogger()->info("DeathKick enabled!");
     }
