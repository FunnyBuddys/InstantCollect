<?php

declare(strict_types=1);

namespace FunnyBuddys\InstantCollect;

use FunnyBuddys\InstantCollect\Listener\BreakListener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info(TextFormat::GREEN."InstantCollect activated!");
		$this->registerListener();
	}

	private function registerListener(){
	    $this->getServer()->getPluginManager()->registerEvents(new BreakListener($this), $this);
    }

	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::RED."InstantCollect deactivated");
	}

}
