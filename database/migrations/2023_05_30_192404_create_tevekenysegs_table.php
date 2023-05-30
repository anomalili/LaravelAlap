<?php

use App\Models\Tevekenyseg;
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
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        Tevekenyseg::create(['tevekenyseg_nev' => 'kirikpir', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => '•	ültettem egyéb növényt ', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => '•	kevesebb húst ettem a héten', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'kdsfirikpir', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => '•	ökológiai gazdaságból származó élelmiszert vettem ', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'kirikpir', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'kiriffdsfkpir', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'sssss', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'kirfdsfdsikpir', 'pontszam' => 1]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
