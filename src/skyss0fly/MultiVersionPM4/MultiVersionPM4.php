<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4;

use pocketmine\player\Player;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

use skyss0fly\MultiVersionPM4\session\SessionManager;

class MultiVersionPM4 {

    public static function getProtocol(Player $player) : int {
        return SessionManager::getProtocol($player) ?? ProtocolInfo::CURRENT_PROTOCOL;
    }
}