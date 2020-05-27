<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Complains</title>
</head>
<body>
<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
      <ul>
        <li><a href="/adminlogin"><- Admin Panel</a></li>
        <li class="is-active"><a href="/profile">View Complain</a></li>
      </ul>
    </nav>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
            {{-- @include('layouts.errors')  --}}
            @if(session()->has('errormsg'))
            <div class="notification is-danger">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('errormsg') }}</b></h1>
            </div>
            @endif
            @if(session()->has('warningmsg'))
            <div class="notification is-warning">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('warningmsg') }}</b></h1>
            </div>
            @endif
            @if(session()->has('success'))
            <div class="notification is-success">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('success') }}</b></h1>
            </div>
            @endif
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (count($complains)>0)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">Complain</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($complains as $complain)
                            <tr>
                               <td>{{$complain->id}}</td>
                               <td>{{$complain->email}}</td>
                               <td>{{$complain->complain}}</td>
                               <td>
                                    <form action="/delete/deleteComplain/{{$complain->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$complain->id}}">
                                        <button class="button is-danger " type="submit">Address</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else 
                   <p>No complains available</p>
                @endif
            </div>
        </div>
    </div>
    <div>
        
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>