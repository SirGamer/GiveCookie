<?php

namespace Givecookie;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	public function onLoad() {
		$this->getLogger()->info("Givecookie plugin.");
		$this->getLogger()->info("Made By ZINGDING.");
	}
	public function onEnable() {
		$this->getLogger()->info("Givecookie plugin enabled.");
		$this->getLogger()->info("This plugin's license is the ZINGDING-EULA.");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function onPlayerMove(PlayerMoveEvent $event) {
		$block = $event->getPlayer()->getLevel()->getBlock($event->getPlayer()->getPosition()->subtract(0,1,0));
		if($block->getId() === 35 && $block->getDamage() === 1) {
			$player = $event->getPlayer();
			$player->getInventory()->addItem(new Item(ITEM::COOKIE, 0, 1 ));
			$player->sendTip(TextFormat::GRAY . ">" . TextFormat::GREEN . "You've recieved a cookie!");
		}
	}
}
?>
