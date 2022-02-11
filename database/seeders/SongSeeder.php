<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            
      
        Song::create([
            'title' => 'Joy',
            'artist' => 'Bastille',
            'body' => "Whoa, whoa, whoa, whoa

            Thought I'd never be waking on the kitchen floor
            But here I lie, not the first time
            Now my morning has broken, and it brings the fear
            My mind's falling, falling
            
            Then I feel my pulse quickening
            But regrets can't change anything
            Yeah, I feel my pulse quickening
            When your name lights up the screen
            
            Oh joy, when you call me
            I was giving up, oh, I was giving in
            Joy, set my mind free
            I was giving up, oh, I was giving in
            
            How'd you always know when I'm down?
            How'd you always know when I'm down?
            
            Take a walk through the wreckage, clearing out my head
            I hear your eyes roll right down the phone
            I'm your walking disaster, keep on dragging me
            From self-pity, poor me
            
            Then I feel my pulse quickening
            But I wouldn't change a thing
            
            Oh joy, when you call me
            I was giving up, oh, I was giving in
            Joy, set my mind free
            I was giving up, oh, I was giving in
            
            How'd you always know when I'm down?
            How'd you always know when I'm down?
            
            As the night dissolves into this final frame
            You're a sweet relief, you saved me from my brain
            From my brain, from my brain, from my brain (brain, brain, brain, brain)
            Whoa, whoa, whoa, whoa (brain, brain, brain, brain)
            
            Oh joy, when you call me
            I was giving up, oh, I was giving in
            Joy, set my mind free
            I was giving up, oh, I was giving in
            
            How'd you always know when I'm down?
            How'd you always know when I'm down?
            
            I feel joy when you call me
            I feel joy when you call me (I-I-I feel joy)
            I feel joy when you call me
            I feel joy when you call me
            How'd you always know when I'm down?
            How'd you always know when I'm down?",
        ]);
    }
    }
}
