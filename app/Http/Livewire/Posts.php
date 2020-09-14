<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;


class Posts extends Component
{
    public function render()
    {
        return view('livewire.posts',[
           'posts'=>Post::where('user_id','=',auth()->user()->id)->paginate(3),
        ]);

    }
}
