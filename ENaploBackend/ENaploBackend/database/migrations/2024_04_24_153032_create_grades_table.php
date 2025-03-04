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
        - student_id: idegen kulcs, a tanulóra, akihez a jegy tartozik
		- grade: egész szám, értékelés
		- weight: egész szám, értékelés súlya
		- comment: szöveg, 50 karakter, az értékelés magyarázata
        */

        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Student::class)->constrained();
            $table->integer('grade');
            $table->integer('weight');
            $table->string('comment', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
