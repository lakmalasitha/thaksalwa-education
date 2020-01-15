<link rel="stylesheet" href="/css/bootstrap.css">
<div class="column displaybox">
    {{-- @include('profile.navprofile') --}}
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/myadvertisment">My Advertisment</a></li>
        </ul>
    </nav>
    <div class="">
        <div class="grayme">
            <div class="row">
                   
                 
                    @if($StudentPost->count() > 0) 
                    @foreach ($StudentPost as $item)
                        @include('layout.studentprofile.myrequset') 
                    @endforeach 
                    {{-- @else
                        @include('profile.noresult') --}}
                    @endif
            </div>
            {{ $StudentPost->links() }}
        </div>
        
    </div>
</div>
