<?php

require 'RAM.php';
require 'SchedaVideo.php';
require 'Processore.php';

class Computer
{
    public $computer;
    public $ram;
    public $schedavideo;
    public $processore;

    public function __construct(string $computer, Ram $ram, SchedaVideo $schedavideo, Processore $processore)
    {
        $this->computer = $computer;
        $this->ram = $ram;
        $this->schedavideo = $schedavideo;
        $this->processore = $processore;
    }

    public function infoGet()
    {
        echo " " . $this->computer . "\n\n" . " RAM: " . $this->ram . "\n Scheda Video: " . $this->schedavideo . "\n Processore: " . $this->processore;
    }
}

$computers = [];

for ($i = 1; $i <= 10; $i++) {
    $computers[$i] = new Computer('Computer-' . $i, new GB(64), new Nvidia('RTX 3070 Ti'), new AMDcpu('Ryzen 5 5600X'));
}

foreach ($computers as $computer) {
    $computer->infoGet();
    echo "\n\n====================================================\n\n";
}
