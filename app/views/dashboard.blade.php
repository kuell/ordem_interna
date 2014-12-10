<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ordem Interna</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/starter-template.css') }}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    {{--HTML::script('assets/js/ie-emulation-modes-warning.js') --}}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::style('assets/css/jquery-ui.css') }}
    {{ HTML::script('assets/js/jquery-ui.js') }}
    {{ HTML::script('assets/js/jquery.maskedinput.min.js') }}
    {{ HTML::script('assets/js/jquery.maskMoney.min.js') }}

    {{HTML::script('assets/js/plugins/dataTables/jquery.dataTables.js') }}
    {{HTML::script('assets/js/plugins/dataTables/dataTables.bootstrap.js') }}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--HTML::script('assets/js/ie10-viewport-bug-workaround.js') --}}


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Frizelo Frigorificos Ltda.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/osi">Ordem Interna</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container ">
        @yield('main')
    </div><!-- /.container -->

<script type="text/javascript">
  $(function(){
    $('input[type=text] , textarea').blur(function(){
      string = $(this).val().toUpperCase();
      $(this).val(string);
    })
  })

</script>

  </body>
</html>