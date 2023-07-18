<?php

class Mathematique
{
  
    /**
     *
     * @param float $a
     * @param float $b
     * 
     * @return float
     * 
     */
    public static function addition(float $a, float $b): float
    {
        return $a + $b;  
    } 
    
    public static function division(float $a, float $b): float|string
    {
        $res = self::isNull($b);
        if($res == true){
            return $a / $b; 
        } else {
            return "Vous n'avez pas le droit de diviser par 0";
        }
         
    } 
    
    private static function isNull(float $x): bool
    {
        if($x === 0){
            return false;
        }else {
            return true;
        }
    }

    public static function multiplication (float $a, float $b): float
    {
        return $a * $b;  
    }    
    
    public static function soustraction(float $a, float $b): float
    {
        return $a - $b;  
    } 
    


    

}


