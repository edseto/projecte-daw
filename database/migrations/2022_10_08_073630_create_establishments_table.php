<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('establishments')) {
            Schema::create('establishments', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description');
                $table->string('address');
                $table->string('image');
                $table->string('establishment_type');
                $table->string('city');
                $table->string('postal_code');
                $table->foreignIdFor(UserModel::class, 'user_id');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('establishments');
    }
};
