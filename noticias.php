<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php 
  $guia[12]="current";
    if(isset($_GET["pg"]) ){
        $pg = $_GET["pg"];
    }else{ 
      $pg="";
    }

?>
    <title>WIN</title>

  </head>
  <body>
    <div id="content_noticias" class="centraliza">          
      <div id="title"> <p>Noticias</p><hr></div>
      <div id="coluna_prev">
        <img src="<?php servidor(); ?>images/noticias/img_noticias.png" alt="">
        <hr>
        <div id="noticias_prev">
          <ul>
            <li>
              <div id="data">
                <a href="<?php servidor(); ?>noticias/pg/05-04"><p>05-04</p></a>
              </div>
              <div id="noticias_prev">Lançamento Módena</div>
            </li>
            <hr>
            <li>
              <div id="data">
                <a href="<?php servidor(); ?>noticias/pg/15-03"><p>15-03</p></a>
              </div>
              <div id="noticias_prev">Estréia da Win Construtora</div>
            </li>
            <hr>
          </ul>
        </div>
      </div>  

      <div id="coluna_principal">

          <?php if($pg == "05-04" || $pg==""){ ?>
        <div id="data">
          <p>05 ABR</p>
        </div>

        <div id="area_noticias">
          <div id="titlo_do_texto">
            <p>Lançamento Módena</p>
          </div>
            <div id="conteudo">    
              <div class="modena-img">
                <img src="<?php servidor(); ?>images/noticias/noticia-modena.jpg" alt="">                
              </div>       
              <p>
                Módena Residence é um conceito moderno de viver, que agrega a praticidade da vida moderna à tranquilidade e conforto que pareciam estar esquecidos em algum lugar do passado. Módena Residence é uma nova experiência de vida, em localização privilegiada, cercado de todos os equipamentos urbanos necessários para você e sua família: de bancos à supermercados, de salões de beleza à academias de ginástica e laboratórios de análises clínicas. Tudo isso, há alguns passos do seu sonho, exatamente como na província italiana que serviu de inspiração e que brindou o mundo com a modernidade da marca Ferrari e a beleza de um canto de Pavarotti, por exemplo. Viver no Módena Residence vai ser viver feliz. Pra sempre!
              </p>          
            </div>
          <?php } ?>

          <?php if($pg == "15-03"){ ?>
        <div id="data">
          <p>15 MAR</p>
        </div>

        <div id="area_noticias">
          <div id="titlo_do_texto">
            <p>Estréia da Win Construtora</p>
          </div>
            <div id="conteudo">
              <div class="modena-img">
                <img src="<?php servidor(); ?>images/noticias/Lancamento.jpg" alt="">
                <img src="<?php servidor(); ?>images/noticias/Lancamento-02.jpg" alt="">
              </div>          
              <p>
                Na tarde do último dia 15 de março, a Win Construtora e Incorporadora realizou o briefing de lançamento do seu primeiro empreendimento imobiliário, o Módena Residence, que está sendo construído no bairro da Pedreira, em localização privilegiada: Tv. Mauriti, entre Av. Marquês de Herval e Av. Pedro Miranda. 
              </p>
              <p>
                Realizado no auditório da empresa Valéria Pires Franco e Corretores Associados, o evento contou também com a presença da empresa parceira Conquiste Consultoria de Imóveis. Um delicioso coffee break selou o encontro, que apresentou excelentes oportunidades de negócio aos corretores das duas empresas.
              </p>          
            </div>
          <?php } ?>
        </div>
      </div>  
      <div id="voltar"><a href="<?php servidor(); ?>index"><p><b>voltar a página inícial</b></p></a></div>         
    </div> 
    <?php include("footer.php") ?>
  </body>
</html>

