<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add advertisement</title>
    {{-- <style>
        .footer
    </style> --}}
</head>
<body>
    @include('heads.navibar')
    <div class="my-5"></div>
    <div class="columns">
        <div class="column is-3"></div>
        
        <div class="column is-6">
        <form action="/advertisement" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                    <input class="input" type="text" value="{{ App\Teacher::returnTeacherId(Auth::user()->id) }}" name="teacher_id" hidden>
                <div class="field">
                        <label class="label" >Name</label>
                            <div class="control">
                                <input class="input" type="text" name="name">
                            </div>
                            @if ($errors->has('name'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                            </span> @endif
                </div>
                <div class="field">
                    <label class="label"  >Choose Language</label>
                    <div class="control">
                        <div class="select">
                            <select name="language">
                                <option >Sinhala Medium</option>
                                <option >Tamil Medium</option>
                                <option >English Medium</option>
                            </select>
                            @if ($errors->has('language'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('language') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                </div>
                <div class="filed">
                    <label class="label" >Choose your Subject</label>
                    <div class="contorl">
                        <div class="select">
                            <select name="subject">                            
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
                            @if ($errors->has('subject'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('subject') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                </div>
                <div class="field">                   
                        <label class="label">Institution Name</label>
                            <div class="control">
                                <input class="input" name="institude" type="text">
                            </div>
                            @if ($errors->has('institude'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('institude') }}</strong>
                            </span> @endif
                </div>
                <div class="filed">
                        <label class="label"  >Province</label>
                            <div class="contorl">
                                <div class="select">
                                    <select name="province">                            
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
                                    @if ($errors->has('province'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('province') }}</strong>
                                    </span> @endif
                                </div>
                            </div>
                </div>
                <div class="field">
                    <label class="label">Postal Code</label>
                    <div class="contol">
                        <input class="input" type="text" name="postalCode">
                    </div>
                    @if ($errors->has('postalCode'))
                    <span>
                        <strong class="has-text-danger">{{ $errors->first('postalCode') }}</strong>
                    </span> @endif
                </div>
                <div class="field">
                    <label class="label" >City</label>
                    <div class="control">
                        <div class="select">
                            <select name="district">
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
                            @if ($errors->has('district'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('district') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">Contact Number</div>
                    <div class="control">
                        <input class="input" type="text" name="contactNumber">
                    </div>
                    @if ($errors->has('contactNumber'))
                    <span>
                        <strong class="has-text-danger">{{ $errors->first('contactNumber') }}</strong>
                    </span> @endif
                </div>
                <div class="field">
                    <label class="label">Email Address</label>
                    <div class="contol">
                        <input class="input" type="Email" name="email">
                    </div>
                    @if ($errors->has('email'))
                    <span>
                        <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
                    </span> @endif
                </div>
                <div class="field">
                        <label class="label">Class Conduct on</label>
                        <div class="contol">
                            <label><input type="checkbox" name="monday">Monday</label>
                            <label><input type="checkbox" name="tuesday">Tuesdat</label>
                            <label><input type="checkbox" name="wednesday">Wednesday</label>
                            <label><input type="checkbox" name="thursday">Thursday</label>
                            <label><input type="checkbox" name="friday">friday</label>
                            <label><input type="checkbox" name="saturday">Saturday</label>
                            <label><input type="checkbox" name="sunday">Sunday</label>
                         
                        </div>
                </div>
                <div class="field">
                        <label class="label">Class Conduct Time</label>
                        <div class="contol">
                            <label><input type="checkbox" name="morning">Morning</label>
                            <label><input type="checkbox" name="afternoon">Afternoon</label>
                            <label><input type="checkbox" name="evening">Evening</label>
                            <label><input type="checkbox" name="night">Night</label>
            
                        </div>
                 </div>
                <div class="field">
                    <div class="label">Image Uploade</div>
                    <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="filename">
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
                    @if ($errors->has('filename'))
                    <span>
                        <strong class="has-text-danger">{{ $errors->first('filename') }}</strong>
                    </span> @endif
                </div>
                <div class="field">
                        <label class="label">Discription</label>
                        <div class="control">
                          <textarea class="textarea" placeholder="Textarea" name="discription"></textarea>
                        </div>
                </div>
                @if ($errors->has('discription'))
                <span>
                    <strong class="has-text-danger">{{ $errors->first('discription') }}</strong>
                </span> @endif
                     <div class="field is-grouped">
                        <div class="control">
                          <button class="button is-success">Add advertisement</button>
                        </div>
                        <div class="control">
                          <button class="button is-link is-success">Cancel</button>
                        </div>
                      </div>
    
            </div>
        </form>
        </div>
    
        <div class="column is-3"></div>
        

    </div>
    <div>
        @include('heads.footer')
    </div>

        
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
</body>
</html>