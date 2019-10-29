<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 4; $i++) { 
            Tag::create([
                'name' => 'Tag ' . $i,
                'slug' => 'tag-' . $i
            ]);
        }
    }
}
