<?php

namespace Givecookie;

use pocketmine\event\player\PlayerMoveEvent;
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
	
	public function onPlayerMove(PlayerMoveEvent $event) {
		if ($player == null) return;
		if ($player->getLevel () == null) return;
		
		// under
		$x = ( int ) round ( $player->x - 0.5 );
		$y = ( int ) round ( $player->y - 1 );
		$z = ( int ) round ( $player->z - 0.5 );
		
		$id = $player->getLevel ()->getBlockIdAt ( $x, $y, $z );
		$data = $player->getLevel ()->getBlockDataAt ( $x, $y, $z );
		//#28 ~ #37까지의 라인은 hm님의 Trampoline에서 복붙해옴. 제가 직접 코드 짜는 것 보단 잘 짜신 흠님 것을 님이 보고 공부하시는 것이
		//도움이 될 듯 하여 올림. 절대 물외한인이 귀찮아서가 아님.
		if($id == 35 && $data == 1) {
		$player = $event->getPlayer();	
		$player->getInventory()->addItem(new Item(ITEM::COOKIE, 0, 1));
	    $player->sendTip(TextFormat::GRAY . "{§dGiveCookie}" . TextFormat::GREEN . "You've received a cookie!");
		}
	}
}
?>
