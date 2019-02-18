<?php 
namespace Aleksandra\Igra\Models\Exceptions;

class RegistrationException extends \Exception
{
    public function __construct($message)
    {
    	parent::__construct($message);
    }
}
