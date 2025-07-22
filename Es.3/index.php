<?php

require 'class.php';

class RobotTesla
{
    public $name;
    public $mani;
    public $piedi;

    public function __construct(string $name, ArtiSuperiori $mani, ArtiInferiori $piedi)
    {
        $this->name = $name;
        $this->mani = $mani;
        $this->piedi = $piedi;
    }

    public function usaLaParteSuperiore()
    {
        echo "Il robot con nome:" . $this->name . ' usa: ' . $this->mani->muoviLeBraccia() . "\n";
    }

    public function usaLaParteInferiore()
    {
        echo "Il robot con nome:" . $this->name . ' usa: ' . $this->piedi->muoviLeGambe() . "\n";
    }
}

$robots = [];

for ($i = 1; $i <= 10; $i++) {
    $robots[$i] = new RobotTesla("Robot Teslta-" . $i, new Prendere(), new Salta());
}

foreach ($robots as $robot) {
    $robot->usaLaParteSuperiore();
    $robot->usaLaParteInferiore();
    echo "====================================================\n\n";
}
