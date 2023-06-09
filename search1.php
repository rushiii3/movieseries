<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="movieseries.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #1f2823">
  <div class="page-loader">
      <img src="https://i.pinimg.com/originals/b8/71/76/b8717641f46cdfdced2c86e984f07c11.gif" style="height: 100vh;width: 100%;">
    </div>    
    <script>
      $(window).on('load',function(){
	setTimeout(function(){ // allowing 3 secs to fade out loader
	$('.page-loader').fadeOut('slow');
	},2000);
});
    </script>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Movies00</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li >
              <a href="index.html" id="nav">Home</a>
            </li>
            <li ><a href="movie.html" id="nav">Movies</a></li>
            <li><a href="#" id="nav">Series</a></li>
            <li  style="background-color: #c3073f"><a href="series.html" id="nav">Search</a></li>
            <li><a href="requestuss.html" id="nav">Request us</a></li>
            <li><a href="abootutt.html" id="nav">About us</a></li>
          </ul>
        </div>
      </div>
    </nav>


   
    <div class="container">
      <div class="row" style="margin-left: 1rem; margin-right: 1rem">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
            <input type="text" id="searchbar" placeholder="Serach your movies and series" oninput="search()" style="width: 100%;height: 4rem;padding: 1rem;border-radius: 10px;">
            </div>
      </div>
    </div>
    <div class="container">
      <div class="row" style="margin-left: 1rem; margin-right: 1rem" id="show">
        
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            function search()
            {
            
                $.ajax({
                    type: 'POST',
                    url: 'm&sajax.php',
                    data: 'srch=' + $('#searchbar').val(),
                    success: function(data) {
                        $('#show').html(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }

        </script>

  </body>
</html>
