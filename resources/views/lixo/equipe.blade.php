


 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css"> 
     
    </head>
    <body>
                <div class="content">
                <div class="title m-b-md">
                    RGBA
                </div>

                <div class="links">
                    
                    <!-- código abaixo usando php
                    <h2>
                      <? 
                        foreach ($equipe as $nome){ 
                            echo "$nome</br>";
                            
                        }?>
                      
                    </h2> -->
                    
                    <!-- Usando BLADE -->
                    @foreach ($equipe as $e)
                        <h2> {{$e}} </h2> 
                        
                    @endforeach
                        
                        
                </div>
            </div>
        </div>
    </body>
</html>
