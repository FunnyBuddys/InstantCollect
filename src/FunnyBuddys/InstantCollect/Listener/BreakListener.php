<?php
namespace FunnyBuddys\InstantCollect\Listener;

use FunnyBuddys\InstantCollect\Main;
use pocketmine\block\BlockToolType;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;

class BreakListener implements Listener {

    public function __construct(Main $main) {
        $this->main = $main;
    }

    public function onBreak(BlockBreakEvent $event) {
        if($event->getPlayer()->getGamemode() === 0){
            if($event->isCancelled() === false){
                if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 359){
                    if($event->getBlock()->getId() === 18){
                        $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                        $event->getPlayer()->getInventory()->addItem(Item::get($event->getBlock()->getId(), $event->getBlock()->getDamage(), 1));
                    } elseif($event->getBlock()->getId() === 32) {
                        $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                        $event->getPlayer()->getInventory()->addItem(Item::get($event->getBlock()->getId(), $event->getBlock()->getDamage(), 1));
                    }

                } elseif($event->getBlock()->getId() === 18) {
                    if(mt_rand(1, 20) === 1){
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::SAPLING, 0, 1));
                    } elseif(mt_rand(1, 200) === 1) {
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::APPLE, 0, 1));
                    }

                } elseif($event->getBlock()->getId() === 59) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    if($event->getBlock()->getDamage() >= 7){
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::WHEAT));
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::WHEAT_SEEDS, 0, mt_rand(0, 3)));
                    } else {
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::WHEAT_SEEDS));
                    }

                } elseif($event->getBlock()->getId() === 457) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    if($event->getBlock()->getDamage() >= 7){
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::BEETROOT));
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::BEETROOT_SEEDS, 0, mt_rand(0, 3)));
                    } else {
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::BEETROOT_SEEDS));
                    }

                } elseif($event->getBlock()->getId() === 105) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get(Item::MELON_SEEDS));

                } elseif($event->getBlock()->getId() === 104) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get(Item::PUMPKIN_SEEDS));

                } elseif($event->getBlock()->getId() === 142) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get(Item::POTATO, 0, $event->getBlock()->getDamage() >= 7 ? mt_rand(1, 4) : 1));

                } elseif($event->getBlock()->getId() === 141) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get(Item::CARROT, 0, $event->getBlock()->getDamage() >= 7 ? mt_rand(1, 4) : 1));

                } elseif($event->getBlock()->getId() === 32) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get(Item::STICK, 0, mt_rand(0, 2)));

                } elseif($event->getBlock()->getId() === 31) {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    if(mt_rand(0, 14) === 0){
                        $event->getPlayer()->getInventory()->addItem(Item::get(Item::WHEAT_SEEDS));
                    }

                } elseif($event->getBlock()->getToolType() === BlockToolType::TYPE_PICKAXE) {
                    if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 278 or $event->getPlayer()->getInventory()->getItemInHand()->getId() === 257 or $event->getPlayer()->getInventory()->getItemInHand()->getId() === 285 or $event->getPlayer()->getInventory()->getItemInHand()->getId() === 274 or $event->getPlayer()->getInventory()->getItemInHand()->getId() === 270){
                        $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                        if($event->getBlock()->getId() === 73){
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::REDSTONE_DUST, 0, mt_rand(4, 5)));
                        } elseif($event->getBlock()->getId() === 21) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::REDSTONE_DUST, 0, mt_rand(4, 8)));
                        } elseif($event->getBlock()->getId() === 16) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::COAL, 0, 1));
                        } elseif($event->getBlock()->getId() === 129) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::EMERALD, 0, 1));
                        } elseif($event->getBlock()->getId() === 56) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::DIAMOND, 0, 1));
                        } elseif($event->getBlock()->getId() === 1) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::STONE, 0, 1));
                        } elseif($event->getBlock()->getId() === 153) {
                            $event->getPlayer()->getInventory()->addItem(Item::get(Item::QUARTZ, 0, 1));
                        } else {
                            $event->getPlayer()->getInventory()->addItem(Item::get($event->getBlock()->getId(), $event->getBlock()->getDamage(), 1));
                        }
                    }
                } else {
                    $event->setDrops(array(Item::get(Item::AIR, 0, 0)));
                    $event->getPlayer()->getInventory()->addItem(Item::get($event->getBlock()->getId(), $event->getBlock()->getDamage(), 1));
                }
            }
        }
    }

}