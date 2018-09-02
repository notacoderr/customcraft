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
    $recipe = new ShapelessRecipe(Item::get(287), Item::get(341));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    $recipe->addIngredient(Item::get(287));
    CM::registerShapelessRecipe($recipe);
  }
}
