<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('osztaly_id');
        
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //$table->primary(['id', 'osztaly_id']);
        });

        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadsad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadssad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadsaad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadkksad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadasad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadvsad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadscxad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 2, 'name' => 'YamiDexter', 'email' => 'dsadsayd2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 3, 'name' => 'YamiDexter', 'email' => 'dsadsavcd2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 2, 'name' => 'YamiDexter', 'email' => 'dsadsjnjkad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 3, 'name' => 'YamiDexter', 'email' => 'dsadsady2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 2, 'name' => 'YamiDexter', 'email' => 'dsacvdsad2@gmail.com', 'password'=> 'aaaaaaa']);
        User::create(['osztaly_id' => 1, 'name' => 'YamiDexter', 'email' => 'dsadnsad2@gmail.com', 'password'=> 'aaaaaaa']);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
