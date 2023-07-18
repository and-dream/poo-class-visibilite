<?php

// Une méthode static est une méthode qui peut être appelée sans avoir besoin d'instancier la classe
class SimulateurCredit
{
    //  Une constante est une valeur qui ne peut pas être modifiée
    //  Une constante est statique
    private const TAUX = 3.8;

    private static float $quotient;
    public static function setQuotient(float $quotient)
    {
        self::$quotient = $quotient;
    }

    private static function calculTaux($somme): float
    {
        return self::TAUX * $somme / self::$quotient;
    }

    public static function info($somme): string
    {
        return "votre calcul de taux sera de:" . self::calculTAUX($somme);
    }

}