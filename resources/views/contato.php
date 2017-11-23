<!DOCTYPE html>
    
<html>
    <head>
        <meta charset="utf-8">
        <title>RGBA</title>
        <link rel="stylesheet" type="text/css" href="css/style_contact.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
    </head>
    <body>

	<div class="contato">
                <h1>RGBA</h1>
				<h3> Contato <h3>
				
                <form name="meu_form" action="conexao.php" method="get"> 
                    <p class="nome"> 
                        <input type="text" id="nomeid" placeholder="Nome" required="required" name="nome" /> 
                    </p>
                    <p class="fone">
                        <input type="text" id="foneid" placeholder="(xx) xxxxx-xxxx" name="fone" /> 
                    </p>
                    <p> 
                        <input type="text" id="emailid" placeholder="nome@mail.com" name="email" /> 
                    </p>
                    <p> 
                        <textarea type = "text" id="opiniaoid" placeholder="Escreva sua opnião" name = "opiniao" ></textarea> 
                    </p> 
                    <p class="submit"> <input type="submit" onclick="Enviar();" value="Enviar" /> 
                    </p>                    
                </form>
                <div class="redes-sociais">
                    <?php
                    echo "<a href= $face target='_blank'><img src='_img/ico_face.jpg'></a>";
                    echo "<a href= $linkedin target='_blank'><img src='_img/linkedin.png'></a>";
                    ?>
                </div>
            </div>
		</body>
</html>
