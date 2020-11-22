<?php

class Speedometer

{
    const KmtoMiles = 0.621;
    const MilesToKm = 1.609;

    public static function convertKmToMiles(int $speedInKm)
    {
        return $speedInKm * self::KmtoMiles;
    }

    public static function convertMilesToKm(int $speedInMiles)
    {
        return $speedInMiles * self::MilesToKm;
    }
}