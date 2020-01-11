<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add advertisement</title>
</head>
<body>
    @include('heads.navibar')
    <div class="my-5"></div>
    <div class="columns">
        <div class="column is-3"></div>
        
        <div class="column is-6">
        <form action="/request" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                    <input class="input" type="text" value="{{ Auth::user()->id }}" name="student_id" hidden>
                <div class="field">
                        <label class="label" >Name</label>
                            <div class="control">
                                <input class="input" type="text" name="name">
                            </div>
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
                        </div>
                    </div>
                </div>
                <div class="filed">
                    <label class="label" >Enter your Subject
                    </label>
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
                        </div>
                    </div>
                </div>
                <div class="field">
                        <label class="label">Class category</label>
                        <div class="contol">
                            <label><input type="checkbox" name="group">Group class</label>                        
                            <label><input type="checkbox" name="individual">individual class</label>
                            <label><input type="checkbox" name="hall">Hall class</label>                     
                        </div>
                 </div>
                <div class="filed">
                        <label class="label"  >Province</label>
                            <div class="contorl">
                                <div class="select">
                                    <select name="province">                            
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
                        <input class="input" type="text" name="postalCode">
                    </div>
                </div>
                <div class="field">
                    <label class="label" >District</label>
                    <div class="control">
                        <div class="select">
                            <select name="district">
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
                        <input class="input" type="text" name="contactNumber">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email Address</label>
                    <div class="contol">
                        <input class="input" type="Email" name="email">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Class needed </label>
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
                        <label class="label">Class needed Time</label>
                        <div class="contol">
                            <label><input type="checkbox" name="morning">Morning</label>                        
                            <label><input type="checkbox" name="afternoon">Afternoon</label>
                            <label><input type="checkbox" name="evening">Evening</label>                     
                            <label><input type="checkbox" name="night">Night</label>
                        </div>
                 </div>
                <div class="field">
                        <label class="label">Discription</label>
                        <div class="control">
                          <textarea class="textarea" placeholder="Discription" name="discription"></textarea>
                        </div>
                </div>
                     <div class="field is-grouped">
                        <div class="control">
                          <button class="button is-success">Add Request</button>
                          <button class="button is-success">Cancel</button>
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