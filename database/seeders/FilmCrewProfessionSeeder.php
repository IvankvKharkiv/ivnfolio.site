<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\FilmCrewProfession;
class FilmCrewProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $professions=[
        'Director', 
        'Screenwriter', 
        'Screenplay', 
        'Producer', 
        'Executive producer', 
        'Line producer', 
        'Production assistant', 
        'Casting director', 
        'Director of Photography',
    ];
    public function run()
    {
        foreach($this->professions as $profession){
            if( is_null( FilmCrewProfession::where('profession', '=', $profession)->first() ) ){
                FilmCrewProfession::factory()->create(['profession'=>$profession,]);
            }
        }
    }
}
