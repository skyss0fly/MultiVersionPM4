<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4;

use skyss0fly\MultiVersionPM4\session\SessionManager;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\Player;

class MultiVersionPM4{

    public static function getProtocol(Player $player): int{
        return SessionManager::getProtocol($player) ?? ProtocolInfo::CURRENT_PROTOCOL;
    }
}
