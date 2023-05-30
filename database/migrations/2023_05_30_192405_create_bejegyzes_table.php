<?php

use App\Models\Bejegyzes;
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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->constrained('tevekenysegs', 'tevekenyseg_id');
            $table->unsignedBigInteger('osztaly_id')->references('osztaly_id')->on('users');
            $table->boolean('allapot')->default(0);
            $table->timestamps();
        });

        Bejegyzes::create(['tevekenyseg_id' => 1, 'osztaly_id' => 1, 'allapot' => 0]);
        Bejegyzes::create(['tevekenyseg_id' => 2, 'osztaly_id' => 1, 'allapot' => 0]);
        Bejegyzes::create(['tevekenyseg_id' => 3, 'osztaly_id' => 3, 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 4, 'osztaly_id' => 1, 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 4, 'osztaly_id' => 2, 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 1, 'osztaly_id' => 2, 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 5, 'osztaly_id' => 1, 'allapot' => 0]);
       }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
