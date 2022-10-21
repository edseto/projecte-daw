<?php

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Collection;

function getEstablishments(): Collection
{
    return Establishment::all();
}
