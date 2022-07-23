<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4\network\translator;

use skyss0fly\MultiVersionPM4\network\Serializer;
use pocketmine\network\mcpe\protocol\GameRulesChangedPacket;

class GameRulesChangedPacketTranslator{

    public static function serialize(GameRulesChangedPacket $packet, int $protocol) {
        Serializer::putGameRules($packet, $packet->gameRules, $protocol);
    }
}