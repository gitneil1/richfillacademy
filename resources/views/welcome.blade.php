<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <title>RichFillAcademy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body>
        <div class="container">
            <h1>
                <a href="#">RichFill Academy</a>
            </h1>

            <h4>
                - Learning here is so much fun!
            </h4>

            <div class="row">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
                </div>
                
            </div>

            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="list-inline">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="">Projects</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Downloads</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="jumbotron">
                <h1>Marketing Stuff!</h1>

                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                <a href="#" class="btn btn-large btn-success">Get Started</a>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <ul class="nav navlist">
                        <li class="nav-header">What we are?</li>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li class="nav-header">Our Friend</li>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Yahoo!</a></li>
                        <li><a href="#">Bing</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Gadgetic World</a></li>
                    </ul>
                </div>

                <div class="col-md-8">
                    <h3>How we started ?</h3>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                    <h3>How do we market?</h3>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div><!-- end of row -->

            <div class="row">
                <div class="col-md-4">
                    <h4 class="muted text-center">
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                        
                        <a href="#" class="btn"><i class="icon-user"></i> Our Clients</a>
                    </h4>
                </div>

                <div class="col-md-4">
                    <h4 class="muted text-center">Know Our Employees</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <a href="#" class="btn btn-success"><i class="icon-star icon-white"></i> Our Employees</a>
                </div>

                <div class="col-md-4">
                    <h4 class="muted text-center">Reach Us</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <a href="#" class="btn btn-info">Contact Us</a>
                </div>
            </div>
        </div>

        
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </body>
</html>
