<?php
function convertToGrams($kilo)
{
    return (float) $kilo * 1000;
}

function convertToKilos($gram)
{
    return (float) $gram / 1000;
}

function convertMass()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mass = $_POST['mass'] ?? '';
        $conversion = $_POST['mass-conversion'] ?? '';

        if ($conversion && is_numeric($mass)) {
            if ($conversion == 'kg-to-g') {
                return '<span>' . round($mass, 2) . 'kg is ' . convertToGrams($mass) . "g</span>";
            } else {
                return '<span>' . round($mass, 2) . 'g is ' . round(convertToKilos($mass), 2) . "kg</span>";
            }
        }
    }
}
