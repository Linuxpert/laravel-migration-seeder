<?php

use Illuminate\Database\Seeder;

use App\Artists;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Artists::class, 150) -> create();
    }
}
