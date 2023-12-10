<?php

namespace SamobotCom\LaravelAbo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SamobotCom\LaravelAbo\Skeleton\SkeletonClass
 */
class Abo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'abo';
    }
}
