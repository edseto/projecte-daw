<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ServiceModel;
use App\Models\RoomModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('room_has_service')) {
            Schema::create('room_has_service', function (Blueprint $table) {
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
        Schema::dropIfExists('room_has_service');
    }
};
