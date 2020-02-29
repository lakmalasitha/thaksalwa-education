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
                <h1 class="title has-text-centered">Edit Your Advertisment</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="input" type="hidden" name="id" value="{{$teacherPost->id}}">
                    <input class="input" type="hidden" name="teacher_id" value="{{$teacherPost->teacher_id}}">
                        <div class="field">
                                <label class="label" >Name</label>
                                    <div class="control">
                                        <input class="input" type="text" name="name" value="{{$teacherPost->name}}">
                                    </div>

                        </div>  
                        <div class="field">
                            <label class="label"  >Choose Language</label>
                            <div class="control">
                                <div class="select">
                                    <select name="language">
                                        <option selected>{{$teacherPost->language}}</option>
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
                                        <option selected>{{$teacherPost->subject}}</option>                           
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
                                <label class="label">Institution Name</label>
                                    <div class="control">
                                        <input class="input" name="institude" type="text" value="{{$teacherPost->institude}}">
                                    </div>
                        </div>
                        <div class="filed">
                                <label class="label"  >Province</label>
                                    <div class="contorl">
                                        <div class="select">
                                            <select name="province"> 
                                                <option selected>{{$teacherPost->province}}</option>                           
                                                    <option >Central</option>
                                                    <option >Eastern</option> 
                                                    <option >North Central</option>
                                                    <option >Northern</option>
                                                    <option >North Western</option>                                  
                                                    <option >Sabaragamuwa</option>  
                                                    <option >Southern</option>
                                                    <option >Uva</option>
                                                    <option >Western</option>                                 
                                            </select>
                                        </div>
                                    </div>
                        </div>
                        <div class="field">
                            <label class="label">Postal Code</label>
                            <div class="contol">
                                <input class="input" type="text" name="postalCode" value="{{$teacherPost->postalCode}}">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" >City</label>
                            <div class="control">
                                <div class="select">
                                    <select name="district">
                                        <option selected>{{$teacherPost->district}}</option>
                                            <option>Ambalangoda</option>
                                            <option>Ampara</option>
                                            <option>Anuradhapura</option>
                                            <option>Avissawella</option>
                                            <option>Badulla</option>
                                            <option>Balangoda</option>
                                            <option>Bandarawela</option>
                                            <option>Batticaloa</option>
                                            <option>Beruwala</option>
                                            <option>Chavakacheri</option>
                                            <option>Chilaw</option>
                                            <option>Colombo</option>
                                            <option>Dambulla</option>
                                            <option>Dehiwala-Mount Lavinia</option>
                                            <option>Embilipitiya</option>
                                            <option>Eravur</option>
                                            <option>Galle</option>
                                            <option>Gampaha</option>
                                            <option>Gampola</option>
                                            <option>Hambantota</option>
                                            <option>Haputale</option>
                                            <option>Harispattuwa</option>
                                            <option>Hatton</option>
                                            <option>Horana</option>
                                            <option>Ja-Ela</option>
                                            <option>Jaffna</option>
                                            <option>Kadugannawa</option>
                                            <option>Kalmunai</option>
                                            <option>Kalutara</option>
                                            <option>Kandy</option>
                                            <option>Kattankudy</option>
                                            <option>Katunayake</option>
                                            <option>Kegalle</option>
                                            <option>Kelaniya</option>
                                            <option>Kolonnawa</option>
                                            <option>Kuliyapitiya</option>
                                            <option>Kurunegala</option>
                                            <option>Mannar</option>
                                            <option>Matale</option>
                                            <option>Matara</option>
                                            <option>Minuwangoda</option>
                                            <option>Moneragala</option>
                                            <option>Moratuwa</option>
                                            <option>Nawalapitiya</option>
                                            <option>Negombo</option>
                                            <option>Nuwara Eliya</option>
                                            <option>Panadura</option>
                                            <option>Peliyagoda</option>
                                            <option>Point Pedro</option>
                                            <option>Puttalam</option>
                                            <option>Ratnapura</option>
                                            <option>Sri Jayawardenapura Kotte</option>
                                            <option>Talawakele</option>
                                            <option>Tangalle</option>
                                            <option>Trincomalee</option>
                                            <option>Valvettithurai</option>
                                            <option>Vavuniya</option>
                                            <option>Wattala</option>
                                            <option>Wattegama</option>
                                            <option>Weligama</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="label">Contact Number</div>
                            <div class="control">
                                <input class="input" type="text" name="contactNumber" value="{{$teacherPost->contactNumber}}">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email Address</label>
                            <div class="contol">
                                <input class="input" type="Email" name="email" value="{{$teacherPost->email}}">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Class Conduct on</label>
                            <div class="contol">
                                <label><input type="checkbox" name="monday" value="{{$teacherPost->monday}}">Monday</label>
                                <label><input type="checkbox" name="tuesday" value="{{$teacherPost->tuesday}}">Tuesdat</label>
                                <label><input type="checkbox" name="wednesday" value="{{$teacherPost->wednesday}}">Wednesday</label>
                                <label><input type="checkbox" name="thursday" value="{{$teacherPost->thursday}}">Thursday</label>
                                <label><input type="checkbox" name="friday" value="{{$teacherPost->friday}}">friday</label>
                                <label><input type="checkbox" name="saturday" value="{{$teacherPost->saturday}}">Saturday</label>
                                <label><input type="checkbox" name="sunday" value="{{$teacherPost->sunday}}">Sunday</label>
                             
                            </div>
                        </div>
                        <div class="field">
                                <label class="label">Class Conduct Time</label>
                                <div class="contol">
                                    <label><input type="checkbox" name="morning" value="{{$teacherPost->morning}}">Morning</label>                        
                                    <label><input type="checkbox" name="afternoon" value="{{$teacherPost->afternoon}}">Afternoon</label>
                                    <label><input type="checkbox" name="evening" value="{{$teacherPost->evening}}">Evening</label>                     
                                    <label><input type="checkbox" name="night" value="{{$teacherPost->night}}">Night</label>
                                </div>
                         </div>
                         <div class="field">
                                <div class="label">Image Uploade</div>
                                <div class="file has-name">
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="filename" value="{{$teacherPost->filename}}">
                                                <span class="file-cta">
                                                    <span class="file-icon">
                                                    <i class="fas fa-upload"></i>
                                                    </span>
                                                    <span class="file-label">
                                                    Choose a file
                                                    </span>
                                                </span>
                                                <span class="file-name">
                                                    Screen Shot 2017-07-29 at 15.54.25.png
                                                </span>
                                        </label>                            
                                </div>
                            </div>
                        <div class="field">
                                <label class="label">Discription</label>
                                <div class="control">
                                  <textarea class="textarea" placeholder="Discription" name="discription" >{{$teacherPost->discription}}</textarea>
                                </div>
                        </div>
                             <div class="field is-grouped">
                                <div class="control">
                                  <button class="button is-success" type="submit">Update advertisement</button>
                                  <button class="button is-success">Cancel</button>
                                </div>
                              </div>
            
                    </div>
                </form>
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