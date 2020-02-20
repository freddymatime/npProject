<!doctype html>
<html lang="en">
  <head>
    <!-- formulaire selection sport -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>free way</title>
  </head>
  <body>
  <form method ="post" action="match2.php" >
  <div class="container">
	<div class="row">
	    <div class="col-md-6 offset-md-3">
	    <div class="card" style="margin:50px 0">
                <div class="card-header">SPORT</div>
            
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Tennis
                                <label class="checkbox">
                                        <input type="checkbox" name="choix[]" value = "tennis"/>
                                        <span class="default"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Golf
                                                                <label class="checkbox">
                                        <input type="checkbox" name="choix[]" value="golf" />
                                        <span class="primary"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        football
                                                                <label class="checkbox">
                                        <input type="checkbox" name ="choix[]" value="football"/>
                                        <span class="success"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        futsall
                                                               <label class="checkbox">
                                        <input type="checkbox" name = "choix[]" value="futsall" />
                                        <span class="info"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        running
                                                               <label class="checkbox">
                                        <input type="checkbox" name ="choix[]" value = "running" />
                                        <span class="warning"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        crossfit
                                                              <label class="checkbox">
                                        <input type="checkbox" name ="choix[]" value = "crossfit" />
                                        <span class="danger"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                       Ping-pong
                                <label class="checkbox">
                                        <input type="checkbox" name = "choix[]" name = "ping-pong"/>
                                        <span class="default"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Basket-ball
                                                                <label class="checkbox">
                                        <input type="checkbox" name = "choix[]"/>
                                        <span class="primary"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Volley
                                                                <label class="checkbox">
                                        <input type="checkbox" />
                                        <span class="success"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Fitness
                                                               <label class="checkbox">
                                        <input type="checkbox" name ="choix[]" value="fitness" />
                                        <span class="info"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Escalade
                                                               <label class="checkbox">
                                        <input type="checkbox" name="choix[]" value ="escalade" />
                                        <span class="warning"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        Velo
                                                              <label class="checkbox">
                                        <input type="checkbox" name ="choix[]" value ="velo"/>
                                        <span class="danger"></span>
                                    </label>
                    </li>
                </ul>
                <div class="form-group ">
                    <input type="submit" name = "submit" class="btn btn-primary btn-lg btn-block login-button"></button>
                </div>
            </div> 
            </div>
            </div>


	    
</div>


  </form>

  
 


    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>