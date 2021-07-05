<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Comment;
use Livewire\WithPagination;

class Comments extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    //public $comments;

    public $newComment;

    public $searchTerm;


    public function mount(){

        //dd($initialComments);

        //$initialComments = Comment::all();

        $comments = Comment::all();
    }

    public function render()
    {   
        $searchTerm = '%'. $this->searchTerm . '%';

        //$initialComments = Comment::all();

        $comments = Comment::where('comment', 'like', $searchTerm)->paginate(10);

        //$comments = $initialComments;

        return view('livewire.comments', ['comments' => $comments]);
    }


    public function addComment(){

        if($this->newComment == '') return;


        $createdComment = Comment::create(['comment' => $this->newComment, 'user_id' => 3]);

        $comments = Comment::all();

        //$comments = $initialComments;

        $comments->push($createdComment);



        // array_unshift($this->comments,[
        //     'body' => $this->newComment,
        //     'created_at' => Carbon::now()->diffForHumans(),
        //     'creator' => "Baron Ggayi"
        // ]);

        $this->newComment = "";
    }
}
