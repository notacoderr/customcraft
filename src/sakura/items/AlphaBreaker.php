<?php

namespace sakura\items;

use pocketmine\item\TieredTool;

use pocketmine\block\Block;
use pocketmine\block\BlockToolType;

use pocketmine\entity\Entity;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class AlphaBreaker extends TieredTool {
	
	public function __construct(int $id = 409, int $meta = 0) {
		
		parent::__construct($id, $meta, "Alpha Breaker", TieredTool::TIER_IRON);
	}
	
	public function getBlockToolType() : int{
		return BlockToolType::TYPE_SWORD;
	}
	
	public function getAttackPoints() : int{
		return self::getBaseDamageFromTier($this->tier);
	}
	
	public function getBlockToolHarvestLevel() : int{
		return 1;
	}
	
	public function getMiningEfficiency(Block $block) : float{
		return parent::getMiningEfficiency($block) * 1.5; //swords break any block 1.5x faster than hand
	}
	
	protected function getBaseMiningEfficiency() : float{
		return 10;
	}
	
	public function onDestroyBlock(Block $block) : bool{
		if($block->getHardness() > 0){
			return $this->applyDamage(2);
		}
		return false;
	}
	
	public function onAttackEntity(Entity $victim) : bool{
		return $this->applyDamage(1);
	}
	
}
