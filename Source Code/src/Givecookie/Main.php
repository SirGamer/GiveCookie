<?php

namespace Givecookie;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat;


class Main extends PluginBase implements Listener{
	public function onLoad() {
		$this->getLogger()->info("§aThis plugin is Givecookie plugin.");
		$this->getLogger()->info("§cMade By ZINGDING.");
	}
	public function onEnable() {
		$this->getLogger()->info("§dGiveCookie Plugin enabled.");
		$this->getLogger()->info("§cThis plugin's License is the ZINGDING-EULA.");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	
	public function onDisable() {
	$this->getLogger()->emergency("§dGiveCookie Plugin is Disabled.");
		}
	
	public function playerInteract(PlayerInteractEvent $event) {
		if($event->getBlock ()->getId () == 35 && $event->getBlock ()->getDamage () == 1) {
		$player = $event->getPlayer();	
		$player->getInventory()->addItem(new Item(ITEM::COOKIE, 0, 1));
	    $player->sendTip(TextFormat::GRAY . "{§dGiveCookie}" . TextFormat::GREEN . "You've received a cookie!");
		}
	}
}
?>
