<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Contact Us</title>
</head>
<body>
      @guest
        @include('heads.outernavibar')

        @else
          @include('heads.navibar')
      @endguest
        

        <div class="contactusimage">
            <div class="my-5"></div>
            
            <div class="container">

                <div class="columns">

                        <div class="column is-4">
                                <div class="field">
                                    <label class="label has-text-centered is-capitalized">Drop your Message</label>
                                </div>

                            <form action="{{ route('createContact') }}" method="POST">
                                @csrf

                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                      <input class="input" type="text" name="name" placeholder="Enter Your Name" reqired>
                                    </div>
                                </div>

                                  <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control has-icons-left has-icons-right">
                                      <input class="input is-danger" type="email" name="email" placeholder="Enter Your Email" reqired>
                                      <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                      </span>
                                      <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                      </span>
                                    </div>
                                  </div>
                                  
                                  <div class="field">
                                    <label class="label" name="inquary">Type Of Inquary</label >
                                    <div class="control">
                                      <div class="select">
                                        <select>
                                          <option value="services">Service</option>
                                          <option vlaue="website">web site</option>
                                          <option vlaue="colors">colours</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control">
                                      <textarea class="textarea" name="message" placeholder="Textarea" reqired></textarea>
                                    </div>
                                  </div>

                                  <div class="field is-grouped">
                                    <div class="control">
                                      <button class="button is-link" type="submit">Send</button>
                                    </div>
                                    <div class="control">
                                      <button class="button is-link is-light">Cancel</button>
                                    </div>
                                  </div>

                            </form>
        
                        </div>

                    </div>
                    <div class="column is-4"></div>
                    <div class="column is-4"></div>
                    
                </div>
               
            </div>

        </div>

        <div>
            @include('heads.footer')
        </div>
        <script src="/js/jquery-3.3.1.min.js"></script>

    
</body>
</html>