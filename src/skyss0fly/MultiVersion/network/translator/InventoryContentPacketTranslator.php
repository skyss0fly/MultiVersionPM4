<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4\network\translator;

use skyss0fly\MultiVersionPM4\network\Serializer;
use pocketmine\network\mcpe\protocol\InventoryContentPacket;
use function count;

class InventoryContentPacketTranslator{

    public static function serialize(InventoryContentPacket $packet, int $protocol) {
        $packet->putUnsignedVarInt($packet->windowId);
        $packet->putUnsignedVarInt(count($packet->items));
        foreach($packet->items as $item){
            Serializer::putItem($packet, $protocol, $item->getItemStack(), $item->getStackId());
        }
    }
}