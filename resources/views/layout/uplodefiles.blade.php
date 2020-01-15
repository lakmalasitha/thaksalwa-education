<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <
    <title>upload</title>
</head>
<body>
            
             <div class="container">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="reg_teachers">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    
                    @endif
                    </div>
                    @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto"  style="cursor:pointer">
                              <li class="nav-item">
                                  <a class="nav-link" onclick="document.getElementById('add_file').style.display='inline';document.getElementById('uploaded_files').style.display='none';">Upload Files</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" onclick="document.getElementById('uploaded_files').style.display='inline';document.getElementById('add_file').style.display='none';">Remove Files</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                </div>

            
            <div id="add_file" style="padding: 25px;">
                    <form method="POST" action="{{url('files_upload')}}" enctype="multipart/form-data">
                      @csrf
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputEmail4">Title</label>
                              <input type="text" class="form-control" id="inputEmail4" name="title">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Description</label>
                              <textarea class="form-control" id="inputEmail4" name="body"></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">File</label>
                                <input type="file" class="form-control" id="inputEmail4" name="upload_file">
                              </div>
                            </div>                          
                          {{-- <button type="submit" class="btn btn-success" style="width:150px;height:70px;">Save File</button> --}}
                        </form>
                    </div>
             </div>

            <div class="conatiner">
             <div id="uploaded_files" style="display:none;">
                <div class="jumbotron">
                    <div class="row justify-content-center">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header">
                          
                            <div style="float:right">
                               Total Number of files uploaded : {{count($files)}}
                            </div>
                          </div>
                          <div class="card-body">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Uploaded Date</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($files as $file)
                                    <tr><td>{{$file->created_at}}</td><td>
                                        <form action="/delete/filedelete/{{$file->id}}" method="post">
                                          @csrf
                                          <input type="hidden" name="id" value="{{$file->id}}">
                                          <button class="button is-danger " type="submit">Delete</button>
                                        </form>
                                        </td>
                                    <tr>
                                @endforeach
                              </tbody>
                          </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
              
          @include('heads.footer')
</body>
</html>