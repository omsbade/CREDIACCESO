<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#1,#2,#3,#4,#5,#6,#7,#8,#9,#0').click(function(){
        var v = $(this).val();
        $('#answer').val($('#answer').val() + v);   
    });
    $('#C').click(function(){
        $('#answer').val('');
        $('#operation').val('');
        $('#operation').removeClass('activeAnswer');
        $('#equals').attr('onclick','');
    });
    $('#plus').click(function(e) { 
    
        if($('#answer').val() == ''){
            return false;
            $('#equals').attr('onclick','');
        }
        else if ( $('#operation').attr('class') == 'activeAnswer') {
            $('#operation').val( $('#operation').val() + $('#plus').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
        else{
            $('#operation').val( $('#operation').val() + $('#answer').val() + $('#plus').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
    });
    $('#subtract').click(function(e) { 
    
        if($('#answer').val() == ''){
            return false;   
            $('#equals').attr('onclick','');
        }
        else if ( $('#operation').attr('class') == 'activeAnswer') {
            $('#operation').val( $('#operation').val() + $('#subtract').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
        else{
            $('#operation').val( $('#operation').val() + $('#answer').val() + $('#subtract').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
    });
    $('#divide').click(function(e) { 
    
        if($('#answer').val() == ''){
            return false;   
            $('#equals').attr('onclick','');
        }
        else if ( $('#operation').attr('class') == 'activeAnswer') {
            $('#operation').val( $('#operation').val() + $('#divide').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
        else{
            $('#operation').val( $('#operation').val() + $('#answer').val() + $('#divide').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
    });
    $('#product').click(function(e) { 
    
        if($('#answer').val() == ''){
            return false;   
            $('#equals').attr('onclick','');
        }
        else if ( $('#operation').attr('class') == 'activeAnswer') {
            $('#operation').val( $('#operation').val() + $('#product').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
        else{
            $('#operation').val( $('#operation').val() + $('#answer').val() + $('#product').val() );
            $('#answer').val('');
            $('#equals').attr('onclick','');
        }
    }); 
    $('#equals').click(function(){
        
        if($('#equals').attr('onclick') != 'return false'){
        
            var a = $('#answer').val();
            var b = $('#operation').val();
            var c = b.concat(a);
            $('#answer').val(eval(c));
            $('#operation').val(eval(c));
            $('#operation').addClass('activeAnswer');
            $('#equals').attr('onclick','return false');
        
        }
    });
});
</script>
<style>
form,input,button { margin:0px; }
</style>
</head>

<body>
<div style="width:200px; margin:auto;">
    <form action="" id="calculator">
        <input type="hidden" id="operation" value=""/>
        <input type="text" id="answer" value="" style="width:98%; height:35px;" disabled="disabled"/>
        <input type="button" value="+" id="plus" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="-" id="subtract" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="/" id="divide" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="*" id="product" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="1" id="1" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="2" id="2" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="3" id="3" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="4" id="4" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="5" id="5" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="6" id="6" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="7" id="7" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="8" id="8" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="9" id="9" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="0" id="0" style="width:50px; height:50px; float:left;"/>
        <input type="button" value="C" id="C" style="width:50px; height:50px; float:left; color:red;"/>
        <input type="button" value="=" id="equals" style="width:50px; height:50px; float:left;"/>
    </form>
    <div style="clear:both;"></div>
</div>
</body>
</html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOS MEJORES CRÉDITOS PARA AUTOS USADOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
            
                <a class="navbar-brand" href="#SITIO EN CONSTRUCCION">EN CONSTRUCCIÓN</a>
            </div>

     
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/flatviper.png" alt="">
                    <div class="intro-text">
                        <span class="name">CREDIACCESO</span>
                        <hr class="star-light">
                        <span class="skills">El mejor crédito para que adquieras un auto usado, !EN CONSTRUCCIÓN!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Footer -->
    
        <div class="footer-below">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
       <h3>Acerca de CREDIACCESO: (Sitio en construcción)<h3>
                        <p>CREDIACCESO es un comparador para adquirir el mejor crédito disponible para un auto usado.<a href="http://omarbade.xyz">GRUPO BADE</a>.</p>               
Contacto:
<a href="mailto:oms.bade@gmail.com" target="_top">ENVIAR MAIL</a>

                    </div>
                    <div class="col-lg-12">
                        Copyright &copy; CREDIACCESO 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    