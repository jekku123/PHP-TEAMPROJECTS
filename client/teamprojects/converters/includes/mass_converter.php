<?php

function convertToGrams($mass)
{
    return round((float) $mass * 1000, 2);
}

function convertToKilos($mass)
{
    return round((float) $mass / 1000, 2);
}

function convertMass()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mass = $_POST['mass'] ?? '';
        $conversion = $_POST['mass-conversion'] ?? '';

        if ($conversion && is_numeric($mass)) {
            if ($conversion == 'kg-to-g') {
                return '<span>' . $mass . 'kg is ' . convertToGrams($mass) . "g</span>";
            } else {
                return '<span>' . $mass . 'g is ' . convertToKilos($mass) . "kg</span>";
            }
        }
    }
}
