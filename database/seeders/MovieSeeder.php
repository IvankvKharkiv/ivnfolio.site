<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Movie;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $testmovies=[
        [
            'video_path'=>'video/echo2014.mp4',
            'video_trailer_path'=>'video/echo2014trailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=YJgIv_hrjdg',
            'poster_path'=>'images/videoposters/echo2014poster.jpg',
            'description'=>'Tuck, Munch and Alex are a closely bonded trio of inseparable friends, but their time together is coming to an end. Their neighborhood is being destroyed by a highway construction project that is forcing their families to move away. But just two days before they must part ways, the boys find a cryptic signal has infected their phones. Convinced something bigger is going on and looking for one final adventure together, they set off to trace the messages to their source and discover something beyond their wildest imaginations: hiding in the darkness is a mysterious being, stranded on Earth, and wanted by the government. This launches the boys on an epic journey full of danger and wonder, one that will test the limits of their friendship and change all of their lives forever.',
            'title'=>'Echo',
            'ganre'=>'Sci-Fi Adventure',
            'release_date'=>'2014-07-02',            
        ],
        
        [
            'video_path'=>'video/honestthief.mp4',
            'video_trailer_path'=>'video/honestthieftrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=ZUIEOMOxIDo',
            'poster_path'=>'images/videoposters/honestthiefposter.jpg',
            'description'=>'A bank robber tries to turn himself in because he\'s falling in love and wants to live an honest life...but when he realizes the Feds are more corrupt than him, he must fight back to clear his name.',
            'title'=>'Honest Thief',
            'ganre'=>'Action, Thriller, Crime, Drama',
            'release_date'=>'2020-10-08',            
        ],

        [
            'video_path'=>'video/mandalorian.mp4',
            'video_trailer_path'=>'video/mandaloriantrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=aOC8E8z_ifw',
            'poster_path'=>'images/videoposters/mandalorianposter.jpg',
            'description'=>'The Mandalorian and the Child continue their journey, facing enemies and rallying allies as they make their way through a dangerous galaxy in the tumultuous era after the collapse of the Galactic Empire.',
            'title'=>'Mandalorian',
            'ganre'=>'Sci-Fi Adventure',
            'release_date'=>'2019-11-12',            
        ],

        [
            'video_path'=>'video/tenet.mp4',
            'video_trailer_path'=>'video/tenettrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=AZGcmvrTX9M',
            'poster_path'=>'images/videoposters/tenetposter.jpg',
            'description'=>'Armed with only one word—Tenet—and fighting for the survival of the entire world, the Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time. 
            Not time travel.  Inversion. ',
            'title'=>'Tenet',
            'ganre'=>'Sci-Fi Action',
            'release_date'=>'2019-11-12',            
        ],

        [
            'video_path'=>'video/thewitches.mp4',
            'video_trailer_path'=>'video/thewitchestrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=4IVKVZ-Yk-c',
            'poster_path'=>'images/videoposters/thewitchesposter.jpg',
            'description'=>'In late 1967, a young orphaned boy goes to live with his loving grandma in the rural Alabama town of Demopolis. As the boy and his grandmother encounter some deceptively glamorous but thoroughly diabolical witches, she wisely whisks him away to a seaside resort. Regrettably, they arrive at precisely the same time that the world\'s Grand High Witch has gathered.',
            'title'=>'The Witches',
            'ganre'=>'Fantasy, Family, Adventure, Comedy, Horror',
            'release_date'=>'2020-10-29',            
        ],

        [
            'video_path'=>'video/wonderwoman.mp4',
            'video_trailer_path'=>'video/wonderwomantrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=XW2E2Fnh52w',
            'poster_path'=>'images/videoposters/wonderwomanposter.jpg',
            'description'=>'Wonder Woman comes into conflict with the Soviet Union during the Cold War in the 1980s and finds a formidable foe by the name of the Cheetah.',
            'title'=>'Wonder Woman 1984',
            'ganre'=>'Fantasy, Action, Adventure',
            'release_date'=>'2020-12-24',            
        ],

        [
            'video_path'=>'video/wonderwoman.mp4',
            'video_trailer_path'=>'video/wonderwomantrailer.mp4',
            'youtube_trailer_link'=>'https://www.youtube.com/watch?v=XW2E2Fnh52w',
            'poster_path'=>null,
            'description'=>'Just some test movie with no poster',
            'title'=>'Some movie',
            'ganre'=>'Fantasy, Action, Adventure',
            'release_date'=>'2020-12-24',            
        ],

        
    ];

    

    public function run()
    {
        foreach($this->testmovies as $testmovie){
            if( is_null(Movie::where('title', $testmovie['title'])->first()) ){
                if(is_null($testmovie['poster_path'])){
                    Movie::factory()->create([
                        'approved'=>true,
                        'video_path'=>$testmovie['video_path'],
                        'video_trailer_path'=>$testmovie['video_trailer_path'],
                        'youtube_trailer_link'=>$testmovie['youtube_trailer_link'],
                        'description'=>$testmovie['description'],
                        'title'=>$testmovie['title'],
                        'rating'=>rand(1, 100),
                        'ganre'=>$testmovie['ganre'],
                        'release_date'=>$testmovie['release_date'],
                    ]);
                }else{
                    Movie::factory()->create([
                        'approved'=>true,
                        'video_path'=>$testmovie['video_path'],
                        'video_trailer_path'=>$testmovie['video_trailer_path'],
                        'youtube_trailer_link'=>$testmovie['youtube_trailer_link'],
                        'poster_path'=>$testmovie['poster_path'] ,
                        'description'=>$testmovie['description'],
                        'title'=>$testmovie['title'],
                        'rating'=>rand(1, 100),
                        'ganre'=>$testmovie['ganre'],
                        'release_date'=>$testmovie['release_date'],
                    ]);
                }
            }

        }

        foreach(Movie::where('slug',null)->get() as $movienoslug){
            $movienoslug->slug = $movienoslug->id.'-'.(Str::slug($movienoslug->title, '-'));
            $movienoslug->save();
        }
        
    }
}
