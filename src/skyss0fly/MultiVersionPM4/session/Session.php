<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4\session;

use pocketmine\player\Player;

class Session {

    /** @var int */
    public $protocol;
    /** @var Player */
    private $player;

    public function __construct(Player $player, int $protocol) {
        $this->player = $player;
        $this->protocol = $protocol;
    }
}