<?php

abstract class Processore
{
    abstract public function infoprocessore(string $processore);
}

class Apple extends Processore
{
    public $processore;

    public function __construct(string $processore)
    {
        $this->processore = $processore;
    }

    public function infoprocessore(string $processore)
    {
        return 'Apple Silicon ' . $this->processore;
    }
    public function __toString()
    {
        return 'Apple Silicon ' . $this->processore;
    }
}

class AMDcpu extends Processore
{
    public $processore;

    public function __construct(string $processore)
    {
        $this->processore = $processore;
    }

    public function infoprocessore(string $processore)
    {
        return 'AMD ' . $this->processore;
    }
    public function __toString()
    {
        return 'AMD ' . $this->processore;
    }
}

class Intelcpu extends Processore
{
    public $processore;

    public function __construct(string $processore)
    {
        $this->processore = $processore;
    }

    public function infoprocessore(string $processore)
    {
        return 'Intel ' . $this->processore;
    }
    public function __toString()
    {
        return 'Intel ' . $this->processore;
    }
}
