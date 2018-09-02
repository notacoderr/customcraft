<?php

namespace CortexPE\item;
use CortexPE\Main;

use pocketmine\item\{
	Item, ItemFactory
};

class ItemManager {
	public static function init(){
		ItemFactory::registerItem(new Boat(), true);
		Item::initCreativeItems();
	}
}
