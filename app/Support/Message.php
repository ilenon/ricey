<?php

namespace App\Support;

class Message
{
    private $type;
    private $text;

    public function getType()
    {
        return $this->type;
    }

    public function getText()
    {
        return $this->text;
    }

    public function write(string $message, string $type): Message
    {
        $this->type = $type;
        $this->text = $message;
        return $this;
    }

    public function render()
    {
        return "
        <div class='ajax-message alert alert-{$this->getType()} alert-dismissible rounded-0 border-0 fade show' role='alert'>
            {$this->getText()}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
}
