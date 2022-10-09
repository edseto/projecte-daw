<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RoomModel;
use App\Models\ServiceModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('room_services')) {
            Schema::create('room_services', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(RoomModel::class, 'room_id');
                $table->foreignIdFor(ServiceModel::class, 'service_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_services');
    }
};
