<?php

namespace App\Classes\Helpers;

use http\Exception\UnexpectedValueException;

class ExceptionHelper
{
    /**
     * Retieve's given exception name.
     *
     * @param $exception
     * @return string
     */
    public function getExceptionName($exception) {
        if (!($exception instanceof \Exception)) {
            throw new UnexpectedValueException("Given value is not instance of Exception");
        }
        return get_class($exception);
    }
}
