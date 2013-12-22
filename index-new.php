<html>
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="styles/js/main.js"></script>
        <link rel="stylesheet" href="styles/css/bootstrap.css" />  
        <link rel="stylesheet" href="styles/css/main-new.css" />  
        <link rel="stylesheet" href="styles/css/mediaqueries.css" />  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-10">
                    <a class="logo" href="#"><h1>Carpinteria Gonzalo</h1></a>
                </div>
                <div class="col-xs-2 contact-icon">
                    <a data-toggle="modal" href="#contact"><img src="styles/images/email.png"/></a>
                </div>
            </div>
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://mybuilder-uploads.s3.amazonaws.com/2_thumb/463529_fda30284db.jpg" >
                            <div class="carousel-caption">
                                <p>
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras tempor euismod ante, non scelerisque augue lobortis ac. Donec gravida dignissim blandit. Nam egestas, ante ut condimentum gravida, enim quam consectetur ipsum, a tempus arcu nisi vitae mi. Fusce vitae consectetur risus, id dictum metus. Nulla sed suscipit nunc, et rutrum tortor. In vel nisi nisi. Pellentesque quis massa ante. Proin eget sapien egestas risus ullamcorper ultrices sit amet nec enim. Ut condimentum nibh et sagittis congue. Nulla aliquam condimentum consectetur. Phasellus imperdiet malesuada risus, vel porta nisi consequat non.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://mybuilder-uploads.s3.amazonaws.com/2_thumb/463529_fda30284db.jpg" >
                            <div class="carousel-caption">
                                <p>
                                    Fusce dictum leo non orci gravida sagittis. Maecenas congue nisl quis ante pharetra ullamcorper. Nunc eget dictum tortor. Integer imperdiet mollis leo nec facilisis. Donec sed est purus. Fusce et diam ut sem varius convallis ornare sed ante. Aliquam quis viverra felis. Praesent ac faucibus justo, facilisis tempor augue. Suspendisse potenti. Praesent fermentum lorem a sem lacinia, ut tempus justo blandit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Contacto</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary contact-send">Enviar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </body>
</html>