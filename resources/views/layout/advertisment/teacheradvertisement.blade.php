<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Show Advertisement</title>
    @include('heads.heads')
    
</head>
<body>
        @include('heads.outernavibar')
        <div class="container">
            <form action="/teachersearch" method="POST">
                @csrf
                <div class="field has-addons searchagain">
                    <p class="control has-icons-left is-expanded">
                        <input class="input is-medium inputsearchbox" type="text" placeholder="Search by City or Province" id="search" name="searchquery">
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                    <div class="control">
                        <button class="button inputsearchbox is-black is-medium"><span class="subtitle is-6 has-text-white">Search</span></button>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select name="stream">
                                      <option value="0">Select Stream</option>
                                      <option value="OL">Ordinary Level</option>
                                      <option value="AL">Advance Level</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select name="medium">
                                      <option value="0">Select Medium</option>
                                      <option>Sinhala Medium</option>
                                      <option>Tamil Medium</option>
                                      <option>English Medium</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                    </div>
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select name="subject" class="form-control form-control-lg" id="subject">
                                      <option value="0">Select Subject</option>
                                      <option value="english" >English</option>
                                      <option value="Sinhala">Sinhala</option>
                                      <option value="Buddhisum">Buddhisum</option>
                                      <option value="Mathematics">Mathematics</option>
                                      <option value="sinhala literature">sinhala literature </option>
                                      <option value="Tamil Language">Tamil Language</option>
                                      <option value="Science">Science</option>
                                      <option  value="Hindi">Hindi</option>
                                      <option >Art</option>
                                      <option >Oriantal Music</option>
                                      <option >Western Music</option>
                                      <option >Dancing</option>
                                      <option >Business & Accounting Studies </option>
                                      <option >History</option>
                                      <option >Information & communication Studies</option>
                                      <option >Health and Physical Education</option>
                                      <option >Combin mathes</option>
                                      <option >Bio</option>
                                      <option >Chemitry</option>
                                      <option >Technology</option>
                                    </select>
                                    {{-- <script>
                                      $("#subject").select2();
                                    </script> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="column is-6"></div>
                    <div class="container">

                    </div>
                    
                          

                </div>

            </form>
            <div class="my-5"></div>
            
            <div class="container">
            <div class="row">
              @foreach ($ShowAds as $item)
                  <div class="col-md-4">
                    <div class="card">
                            <div class="card-image">
                              <figure class="image is-4by3">
                                <img src="uploads/img/{{$item->images}}" alt="Placeholder image">
                              </figure>
                            </div>
                            <div class="card-content">
                              <div class="media">
                                <div class="media-left">
                                  <figure class="image is-48x48">
                                    <img src="uploads/img/{{$item->images}}" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="media-content">
                                  <p class="title is-4">{{$item->name}}</p>
                                  <p class="subtitle is-6">{{$item->email}}</p>
                                </div>
                              </div>
                          
                              <div class="content"> 
                                <br>             
                                <h4>{{$item->subject}}</h4>
                                <h5>{{$item->language}}</h5>
                                {{str_limit(str_replace("&nbsp;",'',strip_tags($item->discription)),100)}}
                                <br>
                                <time datetime="2016-1-1">{{$item->created_at->isoFormat('LLLL')}}</time>
                                <a href="/showmore/{{$item->id}}"><button class="button is-success is-pulled-right">See more</button></a>
                              </div>
                            </div>
                          </div>
                </div>
                @endforeach
                
            </div>
            </div> 
        </div>
</body>
</html>