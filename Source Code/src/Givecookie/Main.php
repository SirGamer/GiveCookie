<?php

namespace Givecookie;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\Event;
use pocketmine\block\Block;
use pocketmine\item\item;

class Main extends PluginBase implements Listener{
	 public function onLoad() {
	 	 $this->getLogger()->info(" ");
		$this->getLogger()->info("Givecookie plugin");
	     $this->getLogger()->info("Made By ZINGDING");
	}
		public function onEnable() {
			 $this->getLogger()->info(" ");
			 $this->getLogger()->info("Givecookie Plugin on Enable");
			 $this->getLogger()->info(" ");
			 $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
		 }
		 
		 public function onPlayerMove(PlayerMoveEvent $event) {
		 $block = $event->getPlayer()->getLevel()->getBlock($event->getPlayer()->getPosition()->subtract(0,1,0));
	      if($block->getId() === 35 && $block->getDamage() ===1 ) {
	                
	      }

    
        }
}

?>