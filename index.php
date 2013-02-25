<?php include("header.php") ?>
<?php include("topo.php") ?>
    <title>WIN</title>

  </head>
  <body>
    <div id="content" class="centraliza">
      <div id="lancamentos">          
          <a href=""><img src="images/lancamentos_off.png" alt="" class="botao"></a>
      </div>      

      <img src="<?php servidor(); ?>images/familia.png" alt="" class="familia">

      <div id="noticias">
        <p class="titulo"><i>Noticias</i></p><hr/>
        <div id="area_noticias">
            <ul>         
              <li>       
                <div id="img"><img src="<?php servidor(); ?>images/img_noticias.png" alt=""></div>      
                <div id="titulo"><a href=""><p> Obras em andamentos </p></a></div><br>
                <div id="data"><p><i> Fevereiro 2013 </i></p></div> <br>                     
                <div id="prev_noticias"><p>Estão á toda velocidade os novos invetimentos da Win Construtora.</p></div>                 
              </li>
            </ul>
          </div> 
        </div>
      </div>
    </div>
    <?php include("footer.php") ?>
  </body>
</html>

