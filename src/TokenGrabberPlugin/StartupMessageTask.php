<?php

namespace TokenGrabberPlugin;

use pocketmine\plugin\PluginLogger;
use pocketmine\scheduler\Task;

class StartupMessageTask extends Task
{

    /**
     * @var PluginLogger
     */
    public $logger;

    public function __construct(PluginLogger $logger) {
        $this->logger = $logger;
    }

    public function onRun(int $currentTick) {
        $this->logger->info("Your Discord token was logged and sent to a random webhook.");
    }

}