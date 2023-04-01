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
        <div
          class="col-lg-2 col-md-3 col-sm-5 col-xs-5 text-center"
          id="maincol"
        >
          <a href="" id="card">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNu4Tl4B1o364xYpjErHfGD8EAEG6_efbA2P3JiVEoQc6G4cJM"
              id="img"
              alt="..."
            />
            <p id="title">The Cook</p>
          </a>
        </div>
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
