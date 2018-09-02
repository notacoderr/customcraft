<?php

namespace sakura;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\inventory\ShapelessRecipe;

class NewRecipes {
        public static function init() {
        
          $ing = [
          Item::get(341), Item::get(341), Item::get(341),
          Item::get(341), Item::get(341), Item::get(341),
          Item::get(341) ,Item::get(341) Item::get(341)
          ];
          
          $recipe = new ShapelessRecipe($ing, [Item::get(287)]);
          Server::getInstance()->getCraftingManager()->registerShapelessRecipe($recipe);
        }
}
