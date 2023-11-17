<?php

function getToday(): string
{
    $date = date_create();
    return date_format($date, 'd/m/y');
}

echo getToday();