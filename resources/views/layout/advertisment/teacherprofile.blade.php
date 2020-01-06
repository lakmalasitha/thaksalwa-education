<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .footer{
            margin-top: 20%
        }
    </style>
</head>
<body>
    @include('heads.outernavibar')
    <form method="POST" action="/teacher/search" >
     @csrf
      <div class="field has-addons searchinput">
          

      </div>
    </form>
        <div class="container">
            <div class="tprofile">
                <div class="my-5"></div>
                <div class="row">
                    <div class="col-md-4">
                            <div class="card">
                                    <div class="card-image">
                                      <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                      </figure>
                                    </div>
                                    <div class="card-content">
                                      <div class="media">
                                        <div class="media-left">
                                          <figure class="image is-48x48">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                          </figure>
                                        </div>
                                        <div class="media-content">
                                          <p class="title is-4">John Smith</p>
                                          <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                      </div>
                                  
                                      <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.                              
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                        <button class="button is-success is-pulled-right">See More</button>                                     
                                  </div>
                    </div>
                    <div class="col-md-4">
                           
                    </div>
                    <div class="col-md-4">
                            
                    </div>
                    </div>
                </div>

            </div>
        </div>

      {{-- <div class="div">
            @include('heads.footer')
      </div> --}}
    </div>
</body>
</html>