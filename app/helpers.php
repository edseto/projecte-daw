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
