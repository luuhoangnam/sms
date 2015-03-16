<?php

namespace Namest\Sms\Contracts;

/**
 * Interface Provider
 *
 * @author  Nam Hoang Luu <nam@mbearvn.com>
 * @package Namest\Sms\Contracts
 *
 */
interface Provider
{
    /**
     * @param string $number
     * @param string $message
     *
     * @return bool
     */
    public function send($number, $message);
}
