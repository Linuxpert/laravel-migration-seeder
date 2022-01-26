<?php

use Illuminate\Database\Seeder;

use App\Albums;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Albums::class, 50) -> create();
    }
}
