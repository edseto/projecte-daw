<?php

use App\Models\Establishment;
use App\Models\Service;
use App\Models\Booking;
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

function getBookingsByRoom(int $id): Collection
{
    return Booking::query()->select('bookings.*')->leftJoin('rooms', 'rooms.id', '=', 'bookings.room_id')->whereNull('bookings.deleted_at')->where(['rooms.user_id' => $id])
        ->orderBy('initial_date', 'DESC')->get();
}