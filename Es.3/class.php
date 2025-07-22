<?php

abstract class ArtiSuperiori
{
    abstract public function muoviLeBraccia();
}

abstract class ArtiInferiori
{
    abstract public function muoviLeGambe();
}

class Pugno extends ArtiSuperiori
{
    public function muoviLeBraccia()
    {
        return "Tira un pugno";
    }
}

class Prendere extends ArtiSuperiori
{
    public function muoviLeBraccia()
    {
        return "Afferra Bicchiere";
    }
}

class Calcio extends ArtiInferiori
{
    public function muoviLeGambe()
    {
        return "Calcia la palla";
    }
}

class Salta extends ArtiInferiori
{
    public function muoviLeGambe()
    {
        return "Salta il muretto";
    }
}
