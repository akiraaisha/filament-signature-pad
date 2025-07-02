<?php

namespace akiraaisha\SignaturePad\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \akiraaisha\SignaturePad\SignaturePad
 */
class SignaturePad extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \akiraaisha\SignaturePad\SignaturePad::class;
    }
}
