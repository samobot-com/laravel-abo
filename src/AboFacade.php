<?php

namespace SamobotCom\LaravelAbo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SamobotCom\LaravelAbo\Skeleton\SkeletonClass
 */
class AboFacade extends Facade
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
