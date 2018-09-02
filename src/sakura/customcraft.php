<?php

namespace sakura;

use pocketmine\Server;

use sakura\items\NewItems;
use sakura\recipes\NewRecipes;

use pocketmine\plugin\PluginBase;

class customcraft extends PluginBase
{
    public function onEnable() : void
    {
        NewItems::init();
        NewRecipes::init();
    }
}
