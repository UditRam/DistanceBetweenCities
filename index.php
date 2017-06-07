<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Distance between cities</title>

        <!-- Bootstrap -->
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="jumbotron">
            <div class="container-fluid"> <!--for full width-->
                <h1>Distance between cities</h1>
                <p>Do you know how far it is!!!</p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="from" class="col-xs-2 control-label">From:</label>
                        <div class="col-xs-10">
                            <!--                  Input1-->
                            <input type="text" id="from" placeholder="From" class="form-control">
                        </div>
                        <label for="to" class="col-xs-2 control-label">To:</label>
                        <div class="col-xs-10">
                            <!--                  Input2-->
                            <input type="text" id="to" placeholder="To" class="form-control">
                        </div>
                    </div>
                </form>
                <div class="col-xs-offset-2 col-xs-10">
                    <button class="btn btn-info " onclick="calcRoute();">Calculate</button>
                </div>
            </div>

        </div>
        <!--      Div for map-->
        <div class="container-fluid">
            <div id="map"></div>
            <div id="output">

            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuvAsaZYMGoaUOt4K3zEpxH87rHphSWBs&libraries=places"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap.min.js"></script>
        <script src="javascript.js"></script>
    </body>
</html>