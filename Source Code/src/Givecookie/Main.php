<?php

namespace Givecookie;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\network\protocol\PlayerActionPacket;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{
	public function onLoad() {
		$this->getLogger()->info("§aThis plugin is Givecookie plugin.");
		$this->getLogger()->info("§cMade By ZINGDING.");
	}
	public function onEnable() {
		$this->getLogger()->info("§dGivecookie plugin enabled.");
		$this->getLogger()->info("§cThis plugin's License is the ZINGDING-EULA.");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function onPlayerMove(PlayerMoveEvent $event) {
		$player = $event->getPlayer();
		$block = $player->level->getBlock(new Vector3((int) $player->x, (int) ($player->y - 1), (int) $player->z));
		if($block->getId() === 35 && $block->getDamage() === 1) {
			$player->getInventory()->addItem(new Item(ITEM::COOKIE, 0, 1));
			$player->sendTip(TextFormat::GRAY . "{§dGiveCookie}" . TextFormat::GREEN . "You've received a cookie!");
		}
	}
}
?>
