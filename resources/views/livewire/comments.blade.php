<div class="container">
    <hr>
    <h1>Comments</h1>

    <hr>
    
    <form class="form-inline float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  wire:model="searchTerm">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    

    <br><br>

    <form wire:submit.prevent="addComment">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter comment here..." wire:model.lazy="newComment">
          <div class="input-group-append">
            <button class="btn  btn-primary" type="button" wire:click="addComment" type="submit">Save</button>
          </div>
        </div>
    </form>



    @foreach($comments as $comment)
      <div class="container jumbotron">

          <h3>
            {{ $comment->creator->name }}
            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
          </h3>
          <h6>{{ $comment->comment }}</h6>
      </div>
    @endforeach


    <hr>

    <p style="text-align: center !important;">{{ $comments->onEachSide(1)->links() }}</p>

    

</div>
