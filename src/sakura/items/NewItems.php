<?php

namespace sakura\items;

use sakura\customcraft;

use pocketmine\item\{Item,
                     ItemFactory};

class NewItems {

      public static function init() {
      
          ItemFactory::registerItem(new AlphaBreaker(), true);
          //Item::initCreativeItems();
        
          /* Removing items from the creative inventory */
        
          Item::removeCreativeItem(Item::get(409)); //Prismarine Shard 409
          
      }

}
