<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4\network\translator;

use skyss0fly\MultiVersionPM4\network\Serializer;
use pocketmine\network\mcpe\protocol\InventorySlotPacket;

class InventorySlotPacketTranslator{

    public static function serialize(InventorySlotPacket $packet, int $protocol) {
        $packet->putUnsignedVarInt($packet->windowId);
        $packet->putUnsignedVarInt($packet->inventorySlot);
        Serializer::putItem($packet, $protocol, $packet->item->getItemStack(), $packet->item->getStackId());
    }
}