<?php

namespace Terminator;

class Module
{
    const VERSION = '0.1';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}