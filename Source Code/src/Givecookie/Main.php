<?php

namespace Givecookie;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\Event;
use pocketmine\block\Block;
use pocketmine\item\item;
use pocketmine\utils\Text;

class Main extends PluginBase implements Listener{
	 public function onLoad() {
		$this->getLogger()->info("Givecookie plugin");
	    $this->getLogger()->info("Made By ZINGDING");
	}
		public function onEnable() {
			 $this->getLogger()->info("Givecookie Plugin on Enable");
			 $this->getLogger()->info("This plugin has ZINGDING-EULA ");
			 $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
		 }
		 
		 public function onPlayerMove(PlayerMoveEvent $event) {
		 $block = $event->getPlayer()->getLevel()->getBlock($event->getPlayer()->getPosition()->subtract(0,1,0));
	      if($block->getId() === 35 && $block->getDamage() ===1 ) {
	      	   $player = $event->getPlayer ();
	      	   $player->getInventory()->addItem(new Item(357, 0, 1 ));
	      	   $player->sendTip(TextFormat::GRAY . ">" . TextFormat::GREEN . "You've recieved a cookie!")
	                
	      }

    
        }

}

?>
