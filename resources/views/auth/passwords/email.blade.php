{{-- @extends('layouts.app')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Sent Email</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="is-mobile textboxlogin">
                        <p class="subtitle has-text-dark is-6 has-text-centered">{{ ('Hi! User') }}</p>
                        <p class="title has-text-success is-4 has-text-centered">{{ __('Reset Your Password') }}</p>
                    </div>
    
                    <div class="columns fulllog is-centered">
                        <div class="column is-two-thirds leftsideeffect">

                
                        <div class="column is-12">
                        @if (session('status'))
                        <div class="notification is-success is-size-7">
                                <button class="delete"></button> {{ __('Password reset link has been sent to your email address.')
                                }} </div>
                        </div>
                        @endif
                        <div class="column is-12">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="field">
                                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>
        
                                    <div class="control has-icons-left">
                                        <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                                        <span class="icon is-small is-left">
                                                <i class="fas fa-at"></i>
                                        </span>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
    
                            <div class="field">
                                        <div class="control column is-offset-4 is-mobile">
                                            <button type="submit" class="button is-success">
                                                {{ __('Request Reset Link') }}
                                            </button>
                                        </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>

        
                
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/fontawesome.js"></script>
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
</body>
{{-- @include('heads.footer') --}}
</html>
{{-- @endsection --}}
