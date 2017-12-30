<?php

namespace League\Tactician\Bundle\Tests;

class EchoTestOtherHandler
{
    public function handle(EchoTestOther $command)
    {
        echo $command->getText();
    }
}
