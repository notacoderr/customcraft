<?php

namespace sakura\recipes;

use sakura\customcraft;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\inventory\ShapelessRecipe;

class NewRecipes {
        public static function init() {
        
          $ing = [
                  Item::get(422), Item::get(422), Item::get(422),
                  Item::get(422), Item::get(276), Item::get(422),
                  Item::get(422) ,Item::get(422), Item::get(422)
          ];
          
          $recipe = new ShapelessRecipe($ing, [Item::get(409)]);
          Server::getInstance()->getCraftingManager()->registerShapelessRecipe($recipe);
        }
}
