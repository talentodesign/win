<?php include("header.php") ?>
<?php include("topo.php") ?>
<title>WIN</title>

</head>
<body>
  <div id="content_contato" class="centraliza">   
    <div id="texto">        
      <p>Preeencha o formulário abaixo e entre em contato conosco.
        Será um prazer atende-los.</p>
    </div>  

      <div id="conteiner_contato">        
        <div id="formulario">    
          <form action="">
            <label for=""><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label><br>
            <input type="text" name="" id="nome"><br>

            <label for=""><img src="<?php servidor(); ?>images/contato/telefone.png" alt=""></label><br>
            <input type="text" name="" id="tel"><br>

            <label for=""><img src="<?php servidor(); ?>images/contato/e-mail.png" alt=""></label><br>
            <input type="text" name="" id="email"><br>               

            <label for=""><img src="<?php servidor(); ?>images/contato/mensagem.png" alt=""></label><br>
            <textarea name="" id="mens" cols="30" rows="10"></textarea><br>                   
            <input type="image" src="<?php servidor(); ?>images/contato/enviar_off.png" alt="" class="botao" id="cont_bt">                    
          </form>                                  
        </div>     
      </div> 

      <div id="img">
        <img src="<?php servidor(); ?>images/contato/bg_contato.png" alt="">        
      </div>
      
    </div>
      <?php include("contato_msg.php") ?>
      <?php include("footer.php") ?>
    </body>
    </html>

