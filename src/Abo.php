<?php

namespace SamobotCom\LaravelAbo;

require(__DIR__ . "/../abo.php");
require(__DIR__ . "/../abo/group.php");
require(__DIR__ . "/../abo/item.php");
require(__DIR__ . "/../abo/account/file.php");

class Abo
{
    // Build your next great package.

    public function __construct()
    {
    }

    public function abo()
    {
        return new \abo();
    }
}
