<?php

namespace sakura;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\inventory\ShapedRecipe;
use pocketmine\inventory\ShapelessRecipe;
use pocketmine\inventory\CraftingManager as CM;

class customcraft extends PluginBase
{
  public function onEnable() : void
  {
    //ing [] , $result []
    $ing = [
    Item::get(341), Item::get(341), Item::get(341),
    Item::get(341), Item::get(341), Item::get(341),
    Item::get(341) ,Item::get(341) Item::get(341)
    ];
    $recipe = new ShapelessRecipe($ing, [Item::get(287)]);
    Server::getInstance()->getCraftingManager()->registerShapelessRecipe($recipe);
  }
}
