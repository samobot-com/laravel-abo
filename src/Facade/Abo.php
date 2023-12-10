<?php

namespace SamobotCom\LaravelAbo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SamobotCom\LaravelAbo\Skeleton\SkeletonClass
 */
class Abo extends Facade
{
    public const UHRADA = 1501; 
    public const INKASO = 1502;

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
