<?php

use Illuminate\Database\Seeder;
use App\Note;
class notesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Note::class,10)->create();
    }
}
