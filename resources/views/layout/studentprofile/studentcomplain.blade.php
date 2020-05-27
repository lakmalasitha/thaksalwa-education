<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Complain</title>
</head>
<body>
<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
      <ul>
        <li><a href="/studentprofile">Profile</a></li>
        <li class="is-active"><a href="/profile">Create Complain</a></li>
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
    <div class="card cardmargin" style="margin:30px;">
        <h1 class="title has-text-centered"> Create Complain</h1>
        
          <form action="{{url('complain_upload')}}" method="post">
            @csrf
            <div class="field">
              <center><input type="text" name="email" value={{ Auth::user()->email }} disabled style="width:80%;margin:30px;margin-bottom:-20px;"></center>
              <p class="control has-icons-left">
                <center><textarea name="complain" required style="width:80%;height:150px;margin:30px;" placeholder="Type your complain here.."></textarea></center>
              </p>
            </div>
            <div class="field">
              <p class="control has-text-centered">
                <button class="button is-success" type="submit">
                    <span class="buttonspace">Submit Complain</span>
                </button>
              </p>
              <br>
            </div>
          </form>
        </div>
    </div>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>

  @include('heads.footer')


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>