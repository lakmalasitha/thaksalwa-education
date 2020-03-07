<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/profile">Edit Advertisment</a></li>
        </ul>
    </nav>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
    {{-- @include('layouts.errors') --}}
     @if(session()->has('message'))
            <div class="notification is-success">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('message') }}</b></h1>
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
    <div class="card cardmargin">
        <div class="containerx">
            <style>
                #map {
                    height: 300px;
                }
            </style>
            <h1 class="title has-text-centered">Edit Your Request</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <input class="input" type="hidden" name="id" value="{{$studentPost->id}}">
                    <input class="input" type="hidden" name="student_id" value="{{$studentPost->student_id}}">
                    <div class="field">
                            <label class="label" >Name</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" value="{{$studentPost->name}}">
                                </div>
                               
                    </div>  
                    <div class="field">
                        <label class="label"  >Choose Language</label>
                        <div class="control">
                            <div class="select">
                                <select name="language" >
                                    <option selected>{{$studentPost->language}}</option>
                                    <option >Sinhala Medium</option>
                                    <option >Tamil Medium</option>
                                    <option >English Medium</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="filed">
                        <label class="label" >Enter your Subject
                        </label>
                        <div class="contorl">
                            <div class="select">
                                <select name="subject">   
                                    <option selected>{{$studentPost->subject}}</option>                         
                                        <option >English</option>
                                        <option >Sinhala</option>
                                        <option >Buddhisum</option>
                                        <option >Mathematics</option>
                                        <option >sinhala literature </option>
                                        <option >Tamil Language</option>
                                        <option >Science</option>
                                        <option >Hindi</option>
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
                            </div>
                        </div>
                    </div>
                    <div class="field">
                            <label class="label">Class category</label>
                            <div class="contol">
                                <label><input type="checkbox" name="group" value="{{$studentPost->group}}">Group class</label>                        
                                <label><input type="checkbox" name="individual" value="{{$studentPost->individual}}">individual class</label>
                                <label><input type="checkbox" name="hall" value="{{$studentPost->hall}}">Hall class</label>                     
                            </div>
                     </div>
                    <div class="filed">
                            <label class="label"  >Province</label>
                                <div class="contorl">
                                    <div class="select">
                                        <select name="province">
                                            <option selected >{{$studentPost->province}}</option>                            
                                            <option >Central</option>
                                            <option >South</option> 
                                            <option >North</option>
                                            <option >Western</option>                                
                                        </select>
                                    </div>
                                </div>
                    </div>
                    <div class="field">
                        <label class="label">Postal Code</label>
                        <div class="contol">
                            <input class="input" type="text" name="postalCode" value="{{$studentPost->postalCode}}">
                        </div>
                        
                    </div>
                    <div class="field">
                        <label class="label" >District</label>
                        <div class="control">
                            <div class="select">
                                <select name="district">
                                    <option  selected>{{$studentPost->district}}</option>
                                    <option >Kandy</option>
                                    <option >Kurunagala</option>
                                    <option >Colombo</option>
                                    <option >Anurdhapura</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">Contact Number</div>
                        <div class="control">
                            <input class="input" type="text" name="contactNumber" value="{{$studentPost->contactNumber}}">
                        </div>
                    
                    </div>
                    <div class="field">
                        <label class="label">Email Address</label>
                        <div class="contol">
                            <input class="input" type="Email" name="email" value="{{$studentPost->email}}">
                        </div>
                   
                    </div>
                    <div class="field">
                        <label class="label">Class needed </label>
                        <div class="contol">
                            <label><input type="checkbox" name="monday" value="{{$studentPost->monday}}">Monday</label>
                            <label><input type="checkbox" name="tuesday" value="{{$studentPost->tuesday}}">Tuesdat</label>
                            <label><input type="checkbox" name="wednesday"value="{{$studentPost->wednesday}}">Wednesday</label>
                            <label><input type="checkbox" name="thursday"value="{{$studentPost->thursday}}">Thursday</label>
                            <label><input type="checkbox" name="friday"value="{{$studentPost->friday}}">friday</label>
                            <label><input type="checkbox" name="saturday"value="{{$studentPost->saturday}}">Saturday</label>
                            <label><input type="checkbox" name="sunday" value="{{$studentPost->sunday}}">Sunday</label>
                         
                        </div>
                    </div>
                    <div class="field">
                            <label class="label">Class needed Time</label>
                            <div class="contol">
                                <label><input type="checkbox" name="morning" value="{{$studentPost->morning}}">Morning</label>                        
                                <label><input type="checkbox" name="afternoon" value="{{$studentPost->afternoon}}">Afternoon</label>
                                <label><input type="checkbox" name="evening" value="{{$studentPost->evening}}">Evening</label>                     
                                <label><input type="checkbox" name="night" value="{{$studentPost->night}}">Night</label>
                            </div>
                     </div>
                    <div class="field">
                            <label class="label">Discription</label>
                            <div class="control">
                              <textarea class="textarea" placeholder="Discription" name="discription">{{$studentPost->discription}}</textarea>
                            </div>
                          
                    </div>
                         <div class="field is-grouped">
                            <div class="control">
                              <button class="button is-success">Save Change</button>
                              <button class="button is-success">Cancel</button>
                            </div>
                          </div>
        
                </div>
            </form>
                </div>
          
        </div>
    </div>
    <br>
    <br>
</div>
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script src="/js/jquery-3.3.1.min.js"></script>
<script>
    tinymce.init({ selector:'textarea' });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initAutocomplete"
    async defer></script>
<script type="text/javascript">
    $(document).ready(function() {
    
          $(".addmore").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
    
          $("body").on("click",".removepic",function(){ 
              $(this).parents(".control-group").remove();
          });
    
        });
</script>
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
</div>
</div>