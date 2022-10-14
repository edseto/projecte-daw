<?php

use App\Models\EstablishmentModel;
use Illuminate\Database\Eloquent\Collection;

function getEstablishments(): Collection
{
    return EstablishmentModel::all();
}
