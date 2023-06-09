<?php

namespace Ssiva\MpesaLaravelSdk;

use Illuminate\Support\Facades\Facade;

/**
 * Date 13/04/2023
 *
 * @author   Simon Siva <simonsiva13@gmail.com>
 */
class MpesaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Ssiva\MpesaDaraja\Mpesa';
    }
}