<?php

function convertToFahrenheit($temp)
{
    return round((float) ($temp * 9 / 5) + 32, 2);
}

function convertToKelvin($temp)
{
    return round((float) $temp + 273.15, 2);
}

function convertTemp()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST['temp'] ?? '';
        $conversion = $_POST['temp-conversion'] ?? '';

        if ($conversion && is_numeric($temp)) {
            if ($conversion == 'c-to-f') {
                return '<span>' . $temp . '°C is ' . convertToFahrenheit($temp) . "°F</span>";
            } else {
                return '<span>' . $temp . '°C is ' . convertToKelvin($temp) . " K</span>";
            }
        }
    }
}
