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
        $conversion = $_POST['conversion'] ?? '';

        if ($conversion && $mass) {
            if ($conversion == 'kg-to-g') {
                return '<span>' . $mass . 'kg is ' . convertToGrams($mass) . "g</span>";
            } else {
                return '<span>' . $mass . 'g is ' . convertToKilos($mass) . "kg</span>";
            }
        }
    }
}
