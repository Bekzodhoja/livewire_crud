<?php

namespace App\Http\Livewire;

use App\Models\Post as Posts;
use Livewire\Component;

class Post extends Component
{

    public $posts;

    protected $rules=[
        'name'=>'required',
        'description'=>'required'
    ];
    public function render()
    {
        $this->posts = Posts::select('id','name','description')->get();
        return view('livewire.post');
    }
}
