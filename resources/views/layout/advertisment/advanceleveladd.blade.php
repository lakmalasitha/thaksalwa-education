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
    @include('heads.innernavibar')
    <div class="columns">
        <div class="column is-3"></div>
        
        <div class="column is-6">
        <form action="/advertisement" method="POST">
            @csrf
            <div class="">
                    <input class="input" type="text" value="{{ Auth::user()->id }}" name="teacher_id" hidden>
                <div class="field">
                        <label class="label" >Name</label>
                            <div class="control">
                                <input class="input" type="text" name="name">
                            </div>
                </div>
                {{-- <div class="field">
                        <label class="label">Choose your Stream</label>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="question">
                                    GCE Ordinary Level
                                </label>
                                <label class="radio">
                                    <input type="radio" name="question">
                                    GCE Advanced Level
                                </label>
                            </div>
                </div> --}}
                <div class="field">
                    <label class="label"  >Choose Language</label>
                    <div class="control">
                        <div class="select">
                            <select name="language">
                                <option >Sinhala</option>
                                <option >Tamil</option>
                                <option >English</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filed">
                    <label class="label" >Choose your 
                    </label>
                    <div class="contorl">
                        <div class="select">
                            <select name="subject">                            
                                <option >Bio Stream</option>
                                <option >Maths Stream</option>
                                <option >Commerce Stream</option>
                                <option >Arts stream</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">                   
                        <label class="label">Institution Name</label>
                            <div class="control">
                                <input class="input" name="institude" type="text">
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
                    <div class="label">Image Uploade</div>
                    <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="resume">
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
                                <div class="input-group-btn">
                                        <button class="button is-success addmore" type="button"><i
                                                class="glyphicon glyphicon-plus"></i>More</button>
                                </div>
                    </div>
                </div>
                      <div class="field">
                        <label class="label">Discription</label>
                        <div class="control">
                          <textarea class="textarea" placeholder="Textarea" name="discription"></textarea>
                        </div>
                      </div>
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
        {{-- @include('heads.footer') --}}
    </div>
</body>
</html>