<?php

$converted_mass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['mass']) && !empty($_POST['mass-conversion'])) {
        $mass = $_POST['mass'];
        $conversion = $_POST['mass-conversion'];

        if (is_numeric($mass)) {
            if ($conversion == 'kg-to-g') {
                $converted_mass = convertToGrams($mass);
            } else {
                $converted_mass = convertToKilos($mass);
            }
        }
    }
}

function convertToGrams($mass)
{
    return round((float) $mass * 1000, 2);
}

function convertToKilos($mass)
{
    return round((float) $mass / 1000, 2);
}
