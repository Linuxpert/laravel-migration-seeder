<?php

use Illuminate\Database\Seeder;

use App\Songs;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Songs::class, 50) -> create();
    }
}
