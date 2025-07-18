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
    Schema::table('reservasis', function (Blueprint $table) {
        $table->text('catatan')->nullable()->after('status_reservasi');
    });
}

public function down()
{
    Schema::table('reservasis', function (Blueprint $table) {
        $table->dropColumn('catatan');
    });
}

};
