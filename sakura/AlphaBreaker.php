<?php

namespace sakura;

use pocketmine\item\Tool;
use pocketmine\item\{Item, ItemFactory};

class AlphaBreaker extends Tool {
	
	public function __construct(int $meta = 0, $count = 1)
	{
		parent::__construct(600, $meta, "Alpha Breaker");
	}
	
	/*
	public static function init()
	{

		ItemFactory::registerItem(new AlphaBreaker(600, 0, "Alpha Breaker"), true);
		Item::initCreativeItems(600);
	}*/
	
	public function getMaxDurability(): int{
		return 251;
	}

	public function getMaxStackSize(): int{
		return 1;
	}
	
	public function getAttackPoints(): int{
		return 12;
	}
}
