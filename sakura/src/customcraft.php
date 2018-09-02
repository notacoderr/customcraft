<?php

namespace sakura;

use pocketmine\Server;

use sakura\{NewItems, NewRecipes};
use pocketmine\plugin\PluginBase;


class customcraft extends PluginBase
{
    public function onEnable() : void
    {
        NewItems::init();
        NewRecipes::init();
    }
}
