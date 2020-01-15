<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/custom.css">
    <title>add advertisement</title>
    <style>
      .footer{
        margin-top: 20%;
      }
    </style>
</head>
<body>
    @include('heads.navibar')
    <div class="container">
      <div class="selectstream">
        <div class="columns">
          <div class="column is-3"></div>
          <div class="column is-4">
            <figure class="image is-128x128">
                <img class="is-rounded" src="images/ol.jpg">
                <div class="selectbutton">
                    <a href="/addolevel"><button class="button is-success">Ordinary level</button></a>
                </div>
                <label for=""></label>
            </figure>
          </div>
          <div class="column is-4">
              <figure class="image is-128x128">
                  <img class="is-rounded" src="images/ol.jpg">
                  <div class="selectbutton">
                      <a href="/addalevel"><button class="button is-success">Advanced level</button></a>
                  </div>
                  <label for=""></label>
              </figure>
          </div>
          <div class="column is-1"></div>
          </div>   

      </div>
    </div>
    
        @include('heads.footer')


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
      

</body>
</html>