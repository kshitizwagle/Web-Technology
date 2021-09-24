<?php
class DivisionByZeroException extends Exception
{
    public function exceptionMessage()
    {
        $exceptionMsg = "Exception on line " . $this->getLine() . " in " . $this->getFile() . " " . $this->getMessage();
        return $exceptionMsg;
    }
}