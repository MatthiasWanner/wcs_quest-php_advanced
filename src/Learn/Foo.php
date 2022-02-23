<?php namespace App\Learn;

Class Foo 
{
    private string $word;

    public function __construct(?string $word = 'any') 
    {
        $this->word = $word;
    }

    public function classInfos()
    {
        return "The class is instancied with <strong>{$this->word}</strong> word";
    }
}