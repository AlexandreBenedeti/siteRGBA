<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo','RGBA')</title>
        
        @section('estilo')
        <link  media="all" rel="stylesheet" type="text/css" href="css/style.css"/> 
       @show

    </head>
    <body>
       @section('cabecalho')
       
       <div class ="logo"><img src="_img/logo.png"></div>
        <div class="links">
                    <a href="projs">Projetos</a>
                    <a href="equipe02">Equipe</a>
                    <a href="contato02">Contato</a>                  
        </div> 
       @show 
       
       @section('rodape')
       <div class="rodape">
                
           <h3> RGBA </h3>
               
       </div>
       @show
    </body>
</html>

