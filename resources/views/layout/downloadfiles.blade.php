<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download files</title>
</head>
<body>
        <div class="container">
        <div id="download_file" style="padding-top:70px;">
                <div class="jumbotron">
                  <h1>Downloadable content</h1>
                  <hr>
                    @if (count($files)>0)
                    <div class="row">
                        @foreach ($files as $file)
                            <div class="well">
                                
                                    <div class="col-md-12">
                                            <div class="card" style="width: 18rem;">
                                                    <img src="pdf.png" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$file->title}}</h5>
                                                        <h6>{{$file->description}}</h6>
                                                        <p class="card-text"><small>uploaded on {{$file->created_at}}</small></p>
                                                        <a href="/storage/uploads/{{$file->upload_file}}" download="{{$file->upload_file}}.pdf"><button class="btn btn-primary" style="width:100%"><i class="fas fa-arrow-circle-down">Download</i></button></a>
                                                    </div>
                                                </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                    @else 
                        <p>No downloadable content available</p>
                    @endif
          
                </div>
              </div>
        </div>
        @include('heads.footer')
</body>
</html>