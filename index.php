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
        <div class="sketch-1">
            <div class="sketch-2">
                <div class="sketch-3">
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
                            <div id="slideshow-principal" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#slideshow-principal" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#slideshow-principal" data-slide="next">
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
                                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                                    <h4 class="modal-title" id="myModalLabel">Contacto</h4>
                                    <div class="info-contacto">
                                        <h5>Telefono: 099890924</h5>
                                        <button type="button" class="btn btn-primary show-map" data-toggle="modal" data-target="#mapa">Ver en mapa</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="modal-body">
                                    <form role="form" >
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label>
                                            <input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                                        </div>
                                        <div class="form-group">
                                            <label for="mensaje">Mensaje</label>
                                            <textarea name="mensaje" class="form-control" id="mensaje"></textarea>
                                        </div>
                                    </form>
                                    <div id="respuesta"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" id="contact-send" class="btn btn-primary contact-send">Enviar</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="mapa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Mapa</h4>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="modal-body">
                                    <div id="mapa-wrapper" class="fluid-wrapper">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>