<?php
function convertToGrams($kilo)
{
    return (int) $kilo * 1000;
}

function convertToKilos($gram)
{
    return (int) $gram / 1000;
}

function convertMass()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kilo = $_POST['kilo'] ?? '';
        $gram = $_POST['gram'] ?? '';


        if ($kilo) {
            return '<span>' . $kilo . 'kg is ' . convertToGrams($kilo) . "g</span>";
        } else if ($gram) {
            return '<span>' . $gram . 'g is ' . convertToKilos($gram) . "kg</span>";
        } else {
            return '';
        }
    }
}
