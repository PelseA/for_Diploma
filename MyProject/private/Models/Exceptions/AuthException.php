<?php 
namespace Aleksandra\Igra\Models\Exceptions;

class AuthException extends \Exception
{
    public function __construct($message)
    {
    	parent::__construct($message);
    }
}
