<?php 
namespace Aleksandra\Igra\Models\Exceptions;

class AddQuestionException extends \Exception
{
    public function __construct($message)
    {
    	parent::__construct($message);
    }
}
