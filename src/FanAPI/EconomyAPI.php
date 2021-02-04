<?php

namespace FanAPI;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;

class EconomyAPI extends PluginBase implements Listener{

    private static $instance;

    public function onEnable(){

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("FanEconomyAPI has been actived !");
        self::$intance = $this;
    }

    public static function getInstance() : EconomyAPI {
        return self::$instance;
    }
}