<?php include("header.php") ?>
<?php include("topo.php") ?>
    <title>WIN</title>

  </head>
  <body>
    <div id="content" class="centraliza">
      <div id="lancamentos">          
          <a href="<?php servidor(); ?>lancamentos-modena"><img src="images/lancamentos_off.png" alt="" ></a>
      </div>
      <img src="<?php servidor(); ?>images/familia.png" alt="" class="familia">

      <div id="noticias">
        <p class="titulo"><i>Noticias</i></p><hr/>
        <div id="area_noticias">
            <ul>         
              <li>       
                <div id="img"><img src="<?php servidor(); ?>images/noticias/prev-home/andamento.jpg" alt=""></div>      
                <div id="titulo"><a href="noticias/pg/05-04"><p>MÓDENA</p></a></div>
                <div id="data"><p><i>05/04</i></p></div>
                <div id="prev_noticias"><p>Módena Residence é um conceito moderno de viver, que agrega a praticidade...</p></div>                 
              </li>
             <div id="separa"></div>
              <li>       
                <div id="img"><img src="<?php servidor(); ?>images/noticias/prev-home/lancamento-modena.jpg" alt=""></div>      
                <div id="titulo"><a href="noticias/pg/15-03"><p> LANÇAMENTO DO EMPREENDIMENTO MÓDENA RESIDENCE </p></a></div>
                <div class="modena-residence"><p><i>15/03</i></p></div>                  
                <div id="prev_noticias"><p>Na tarde do último dia 15 de março, a Win Construtora e Incorporadora...</p></div>                 
              </li>
              <div id="separa"></div>
            </ul>
          </div> 
        </div>

        <div id="boleto">
          <a href="http://www.biossistemas.com/clientes/win/boleta_2v/" target="_blank"><img src="<?php servidor(); ?>images/boleto_off.png" alt="" class="botao"></a>          
        </div>
        <div id="face">
          <a href=""><img src="<?php servidor(); ?>images/bt_twitter_off.png" alt="" class="botao"></a>
          <a href=""><img src="<?php servidor(); ?>images/bt_face_off.png" alt="" class="botao"></a>
          <a href=""><img src="<?php servidor(); ?>images/bt_youtube_off.png" alt="" class="botao"></a>
        </div>
      </div>
    </div>
    <?php include("footer.php") ?>
  </body>
</html>

