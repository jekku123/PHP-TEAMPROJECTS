
 

<?php
function convertToGrams($mass)
{
    return (float) $mass * 1000;
}

function convertToKilos($mass)
{
    return (float) $mass / 1000;
}

function convertMass()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mass = $_POST['mass'] ?? '';
        $conversion = $_POST['mass-conversion'] ?? '';

        if ($conversion && is_numeric($mass)) {
            if ($conversion == 'kg-to-g') {
                return '<span>' . round($mass, 2) . 'kg is ' . round(convertToGrams($mass), 2) . "g</span>";
            } else {
                return '<span>' . round($mass, 2) . 'g is ' . round(convertToKilos($mass), 2) . "kg</span>";
            }
        }
    }
}
