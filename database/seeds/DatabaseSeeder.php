<?php

use App\Clients;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Llenado de Tabla automaizado */
        factory(Clients::class, 8) -> create();
    }
}