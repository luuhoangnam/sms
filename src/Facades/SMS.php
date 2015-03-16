<?php

namespace Namest\Sms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SMS
 *
 * @author  Nam Hoang Luu <nam@mbearvn.com>
 * @package Namest\Sms\Facades
 *
 */
class SMS extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'namest.sms';
    }

}