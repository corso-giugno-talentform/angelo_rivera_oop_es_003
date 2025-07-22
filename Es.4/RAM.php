<?php

abstract class Ram
{
    abstract public function inforam(int $ram);
}

class GB extends Ram
{
    public $ram;

    public function __construct(int $ram)
    {
        $this->ram = $ram;
    }

    public function inforam($ram)
    {
        return $this->ram . ' GB';
    }
    public function __toString()
    {
        return $this->ram . ' GB';
    }
}
