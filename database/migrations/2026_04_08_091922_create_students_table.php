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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nim');
<<<<<<< HEAD
            $table->timestamps();
=======
                        $table->timestamps();

>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
