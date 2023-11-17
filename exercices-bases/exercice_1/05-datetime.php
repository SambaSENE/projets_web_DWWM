<?php

function getToday(): string
{
    $date = date_create('Y-m-d ');
    return  date_format($date , 'd/m/y');
}
echo getDate();