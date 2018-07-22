

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>College Event Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/indexpage.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
      
    <style>
                ::-webkit-scrollbar
        {
            border-radius: 10px;
            width: 15px;
            background-color:rgba(77,77,77,0.75);
        }
        ::-webkit-scrollbar-thumb
        {
            border-radius:10px;
            background-color:rgba(255,255,255,0.15);
        }

              .container-2 {
        float: left;
        padding: 20px;
        width: 100%;
        height: 875px;
                  background-color: rgba(77,77,77,0.5);
                  margin-top: 100px;
          
      }
      
      .hiscores {
        float: left;
        padding: 20px;
        width: 80%;
        background-color: white;
                            background-color: rgba(77,77,77,0.5);
      }
      
      .column {
            float: left;
            width: 33.33%;
      }

      
      .searchbar {
        float: right;
        padding: 20px;
        width: 20%;
        background-color: black;
        
      }
      
      .usersearch {
        float: left;
        padding: 20px 20px;
        width: 100%;
        background-color: white;
        border-width: 1px;
        border-color: aqua;
        border-style: solid;
        margin-bottom: 10px;
      }
      
      .ranksearch {
        float: left;
        padding: 20px 20px;
        width: 100%;
        background-color: white;
        border-width: 1px;
        border-color: aqua;
        border-style: solid;
        margin-bottom: 10px;
      }
      
      .comparesearch {
        float: left;
        padding: 20px 20px;
        width: 100%;
        background-color: white;
        border-width: 1px;
        border-color: aqua;
        border-style: solid;
      }
      
      .usersearchtext {
          font-size: 8px;
      }
      
      input {
          width: 125px;
      }
      
      th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      .titles {
          width: 800px;
      }
        
    </style>
      


  </head>

  <body id="page-top">
      

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Event Manager</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">

    </header>
      
            <div class = "container">
            <div class ="container-2">
                <div class = "hiscores">
                    <table class="titles">
                        <caption align ="top">Hiscores</caption>

                        <thead>
                            <tr>
                                <th class ="">Rank</th>
                                <th>Username</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                    
                    </table>
                
                </div>
                
                
                <div class ="searchbar">
                    <div class = "usersearch">
 
                        <form>
                            Search by User:<br>
                            <input type = "text" name="user"><br>
                            <input type= "submit" value="Submit"><br>
                        </form>
                    </div>
                    
                    <div class = "ranksearch">
                        <form>
                            Search by Rank:<br>
                            <input type = "text" name="rank"><br>
                            <input type= "submit" value="Submit"><br>
                        </form>
                        
                    </div>
                        
                    <div class = "comparesearch"> 
                        <form>
                            Compare Users:<br>
                            <input type = "text" name="compareusers"><br>
                            <input type = "text" name="compareusers"><br>
                            <input type= "submit" value="Submit"><br>
                        </form>
                    </div>

                </div>
            
            </div>
            
        
        </div>
      



    <!-- Map Section 
    <div id="map"></div>

    -->

      
    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; College Event Manager 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script src="js/login.js"></script>

  </body>

</html>
