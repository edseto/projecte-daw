<?php

use App\Models\Establishment;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

function getEstablishments(): Collection
{
    return Establishment::query()->whereNull('deleted_at')->get();
}

function getServices(): Collection
{
    return Service::all();
}

function getDatesBetween(DateTime $initial_date, DateTime $final_date): array
{
    $ret = [];

    $final_date = $final_date->modify( '+1 day' ); 

    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($initial_date, $interval, $final_date);

    foreach($daterange as $date){
        array_push($ret, $date);
    }

    return $ret;
}