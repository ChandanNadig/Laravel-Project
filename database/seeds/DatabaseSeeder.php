<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Register Seeders */
        $this->call(MasterProductSeeder::class);
        $this->call(PartTypeSeeder::class);
        $this->call(BoxTypeSeeder::class);
    }
}
