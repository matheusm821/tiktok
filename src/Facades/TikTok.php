<?php

namespace Matheusm821\TikTok\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Matheusm821\TikTok\Skeleton\SkeletonClass
 */
class TikTok extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tiktok';
    }
}
