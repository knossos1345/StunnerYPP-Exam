<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Song as Songs;


class Song extends Component
{

    public $songs, $title, $artist, $body, $song_id;
    public $updateSong = false;

    protected $listeners = [
        'deleteSong'=>'destroy'
    ];

    protected $rules = [
        'title'=>'required',
        'artist'=>'required',
        'body'=>'required'
    ]; 

    public function render()
    {
        $this->songs = Songs::all();
        return view('livewire.song');
    }
    public function resetFields(){
        $this->title = '';
        $this->artist = '';
        $this->body = '';
    }

    public function store(){

        // Validate Form Request
        $this->validate();

        try{
            // Create Song
            Songs::create([
                'title'=>$this->title,
                'artist'=>$this->artist,
                'body'=>$this->body
            ]);
    
            session()->flash('success','The song is saved successfully!!');

            // Reset Form Fields After Creating Song
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while saving the song!');

            // Reset Form Fields After Creating Song
            $this->resetFields();
        }
    }

    public function edit($id){
        $song = Songs::findOrFail($id);
        $this->title = $song->title;
        $this->artist = $song->artist;
        $this->body = $song->body;
        $this->song_id = $song->id;
        $this->updateSong = true;
    }

    public function cancel()
    {
        $this->updateSong = false;
        $this->resetFields();
    }

    public function update(){

        // Validate request
        $this->validate();

        try{

            // Update song
            Songs::find($this->song_id)->fill([
                'title'=>$this->title,
                'artist'=>$this->artist,
                'body'=>$this->body,
            ])->save();

            session()->flash('success','Song Updated Successfully!!');
    
            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating the song!');
            $this->cancel();
        }
    }

    public function destroy($id){
        try{
            Songs::find($id)->delete();
            session()->flash('success',"Song Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting the song!");
        }
    }
}

