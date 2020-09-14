<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class PostForm extends Component
{

    public $title;
    public $content;


    protected $rules = [
        'title' => 'required|min:10|max:20',
        'content' => 'required',
    ];
    private function clearVars()
    {
        $this->title=null;
        $this->content=null;
    }
    public function save()
    {
        $this->validate();
        $data=[
            'title'=>$this->title,
            'content'=>$this->content,
            'user_id'=>auth()->user()->id,
        ];

        Post::create($data);
        $this->clearVars();
    }
    public function render()
    {
        return view('livewire.post-form');
    }
}
