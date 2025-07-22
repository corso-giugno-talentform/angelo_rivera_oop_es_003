<?php

abstract class SchedaVideo
{
    abstract public function infogc(string $gc);
}

class Nvidia extends SchedaVideo
{
    public $gc;

    public function __construct(string $gc)
    {
        $this->gc = $gc;
    }

    public function infogc(string $gc)
    {
        return 'Nvidia ' . $this->gc;
    }
    public function __toString()
    {
        return 'Nvidia ' . $this->gc;
    }
}

class AMDgc extends SchedaVideo
{
    public $gc;

    public function __construct(string $gc)
    {
        $this->gc = $gc;
    }

    public function infogc(string $gc)
    {
        return 'AMD ' . $this->gc;
    }
    public function __toString()
    {
        return 'AMD ' . $this->gc;
    }
}

class Intelgc extends SchedaVideo
{
    public $gc;

    public function __construct(string $gc)
    {
        $this->gc = $gc;
    }

    public function infogc(string $gc)
    {
        return 'Intel ' . $this->gc;
    }
    public function __toString()
    {
        return 'Intel ' . $this->gc;
    }
}
