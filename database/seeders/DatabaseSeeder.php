<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\usuarios;
use App\Models\locales;
use App\Models\eventos;
use App\Models\invitacion;
use App\Models\consumibles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
    usuarios::factory(10)->create();
    locales::factory(10)->create();
    eventos::factory(10)->create();
    invitacion::factory(10)->create();
    consumibles::factory(10)->create();   
    
    
    }
}
