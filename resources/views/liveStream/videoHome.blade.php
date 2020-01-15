<!DOCTYPE html>
<html lang="en">
<head>
	@include('heads.heads')
	<title>Education Supporting System</title>
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
		@include('heads.outernavibar')
                <header>
                        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                        </video>
                        <div class="container h-100">
                        <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                            <h1 class="display-3">Live Video Stram Goes Here</h1>
                        </div>
                        </div>
                </div>
                </header>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="comment-form" method="post" action="{{ route('comments.store') }}" >
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                        <textarea class="form-control" name="comment" placeholder="Add comments about this video..!!"></textarea>
                        <div class="row" style="padding: 10px;">
                            <div class="form-group">
                    
                            </div>
                        </div>
                        <div class="row" style="padding: 0 10px 0 10px;">
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body comment-container" >
                    
                    @foreach($comments as $comment)
                        <div class="well">
                            <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                            <span> {{ $comment->comment }} </span>
                            <div style="margin-left:10px;">
                                <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                <a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a>
                                <div class="reply-form">
                                    
                                    <!-- Dynamic Reply form -->
                                    
                                </div>
                                @foreach($comment->replies as $rep)
                                     @if($comment->id === $rep->comment_id)
                                        <div class="well">
                                            <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                            <span> {{ $rep->reply }} </span>
                                            <div style="margin-left:10px;">
                                                <a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
                                            </div>
                                            <div class="reply-to-reply-form">
                                    
                                                <!-- Dynamic Reply form -->
                                                
                                            </div>
                                            
                                        </div>
                                    @endif 
                                @endforeach
                                
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</main>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/videomain.js') }}">
  
</script>   
            @include('heads.footer')
</div>


    
</body>
</html>




