<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('data_pasiens', function (Blueprint $table) {
        $table->string('no_cm')->nullable()->after('id'); // jangan langsung unique
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pasiens', function (Blueprint $table) {
            //
        });
    }
};
