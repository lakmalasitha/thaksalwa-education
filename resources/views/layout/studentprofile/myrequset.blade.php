<div class="col-sm-4 col-sm-3 center-responsive">
    <div class="column is-gaps is-12">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="uploads/img/{{$item->images}}" >
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="media-content">
                        <p class="is-6">
                            <span class="has-text-dark">Name :{{$item->name}}</span>  <br>
                            <span class="has-text-dark">Subject :{{$item->subject}}</span>  <br>
                            <span class="has-text-dark">Medium :{{$item->language}}</span> </p>
                    </div>
                </div>

                <div class="content">
                    <div class="buttons is-pulled-right">
                            <button class="button is-success is-pulled-right" onclick="window.open('/showrequest/{{$item->id}}','_blank');">See More</button>
                            <button class="button is-black is-pulled-right" onclick="window.open('/profile/ad/{{$item->id}}/editrequest','_blank');">Edit</button>
                            <form action="/delete/teacherpost/{{$item->id}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button class="button is-danger is-pulled-right" type="submit">Delete</button>
                            </form>
                    </div>
                </div>
            </div>                   
        </div>
    </div>
</div>