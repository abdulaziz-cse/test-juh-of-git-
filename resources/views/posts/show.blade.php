  @extends('layouts.app')
  @section('start')

  <!-- Page Content -->
  <div class="container" style="padding: 50px;">
    <div class="row">
      <div class="col-md-12">

        <div class="d-flex align-items-end flex-column">
            <div class="p-2">
                <a  class="btn btn-outline-info" href="/posts" >Back </a>
            </div>
          </div>

        <div class="card mb-4"> 

          
          <div class="card-body">
            <h2 class="card-title">Description of the code </h2>   

            <p class="lead"> {{  $post->body}} </p>
          
          <h1 class="my-4"> Photo</h1>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="d-block w-100" alt="{{$post->post_image}}"> 
                </div>
                </div>
                <br>
                <h1 class="my-4"> More Data </h1>
                <br>

                <div class="container">
                <form action="{{ route('pay') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm">
                            <i class="fas fa-dollar-sign"></i>
                            <input type="hidden" name="price" value="{{ $post->price }}" >{{ $post->price }}
                              </div>
                              
                      <div class="col-sm">
                          <input type="hidden" name="name" value="{{ $post->name }}" >
                        </div>
                        
                        <div class="col-sm">
                              <button type="button" class="btn btn-primary"> <i class="fab fa-line"></i> Live on link </button>
                          </div>

                      <div class="col-sm">
                          <button class="btn btn-success" type="submit" > Bay Now </button>
                        </div>
                    </div>
                </form>
                    </div>


          
          </div>
        
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} العروض </h3>
            @foreach($post->comments as $comment)
              <div class="comment">
                <div class="author-info">
      
                  <div class="author-name">
                    <h4>{{ $comment->price }}</h4>
                    <p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                  </div>
      
                </div>
      
                <div class="comment-content">
                  {{ $comment->comment }}
                </div>
      

              </div>
            @endforeach
          </div>
        </div>
      
        <div class="row">
          <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
      
              <div class="row">
                <div class="col-md-6">
                  {{ Form::label('price', "Price:") }}
                  {{ Form::text('price', null, ['class' => 'form-control']) }}
                </div>
      
                <div class="col-md-12">
                  {{ Form::label('comment', "Comment:") }}
                  {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
      
                  {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                </div>
              </div>
      
            {{ Form::close() }}
          </div>
      </div>
        
      </div>
      

    </div>

  </div>
  @endsection


