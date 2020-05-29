<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Teacher Profile </title>
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 2%">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            @foreach ($teachers as $teacher)
                            <h4>Name: &nbsp;<b>{{$teacher->name}}</b></h4>
                            <p>Email: &nbsp;{{$teacher->email}}</p>
                            <p>Role:  &nbsp;{{$teacher->role}}</p>
                            @endforeach
                        </div>
                        <a href="/teacherManage"><button style="width:100%" class="btn btn-primary">Back</button></a>
                    </div> 
                </div>
                <div class="col-md-8">
                    <h3><b>Infromation</b></h3>
                    <hr>
                    @foreach ($tchs as $tch)
                    <p>Selected Stream: &nbsp;{{$tch->stream}}</p>
                    <p>Selected Medium: &nbsp;{{$tch->medium}}</p>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>