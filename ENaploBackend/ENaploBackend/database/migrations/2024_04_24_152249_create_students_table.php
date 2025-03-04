<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*
        - name: szöveg mely a tanuló nevét tárolja, maximális hossza 255 karakter lehet
		- active: boolean, az alapértelmezett értéke legyen „true”, azt adja meg, hogy a tanulónak aktív jogviszonya van-e
		- eduid: szöveg, 11 karakteres, a tanuló oktatási azonosítóját tárolja
         * */

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->boolean('active')->default(true);
            $table->string('eduid', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
