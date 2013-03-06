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
                <a href="<?php servidor(); ?>noticias/pg/30-nov"><p>30 NOV</p></a>
              </div>
              <div id="noticias_prev">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <hr>
            <li>
              <div id="data">
                <a href="<?php servidor(); ?>noticias/pg/15-dez"><p>15 DEZ</p></a>
              </div>
              <div id="noticias_prev">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <hr>
            <li>
              <div id="data">
                 <a href="<?php servidor(); ?>noticias/pg/20-dez"><p>20 DEZ</p></a>
              </div>
              <div id="noticias_prev">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <hr>
            <li>
              <div id="data">
                 <a href="<?php servidor(); ?>noticias/pg/28-dez"><p>28 DEZ</p></a>
              </div>
              <div id="noticias_prev">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <hr>
            <li>
              <div id="data">
                 <a href="<?php servidor(); ?>noticias/pg/12-jan"><p>12 JAN</p></a>
              </div>
              <div id="noticias_prev">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <hr>
          </ul>
        </div>
      </div>  

      <div id="coluna_principal">
        <div id="data">
          <p>12 NOV</p>
        </div>

        <div id="area_noticias">
          <div id="titlo_do_texto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>

          <?php if($pg == "30-nov"){ ?>
            <div id="conteudo">            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel cumque hic omnis adipisci dolorem culpa facilis libero saepe voluptate optio facere. Sunt eaque animi vel tenetur quasi debitis rem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda omnis consequatur optio perferendis autem iure qui accusamus commodi? Enim unde deleniti. Aliquam et incidunt illum dolore enim temporibus sint?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quia repudiandae itaque modi eligendi earum odit saepe obcaecati labore nulla aliquid soluta praesentium dolorem quis nobis culpa voluptatum non corrupti.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae consectetur laboriosam ratione natus necessitatibus ipsum dolore quibusdam recusandae tempora alias possimus nulla nihil non et debitis laborum obcaecati odio ab!</p>
              <p>Quasi maxime sit impedit enim quam nam architecto iure error temporibus neque quaerat inventore minus debitis provident asperiores ipsum deserunt sed natus placeat quos odio tenetur distinctio doloribus voluptatibus itaque!</p>
              <p>Nulla quia fugiat ipsam facilis corporis impedit temporibus neque excepturi autem cupiditate quibusdam quam deserunt! Atque aliquid delectus eos minima quia veniam cupiditate. Dolorem nemo blanditiis eum iusto placeat omnis!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ipsam laudantium numquam neque quae nesciunt iusto laborum sequi iste tempora modi pariatur nobis quaerat similique a exercitationem vero labore!</p>          
            </div>
          <?php } ?>

          <?php if($pg == "15-dez"){ ?>
            <div id="conteudo">            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel cumque hic omnis adipisci dolorem culpa facilis libero saepe voluptate optio facere. Sunt eaque animi vel tenetur quasi debitis rem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda omnis consequatur optio perferendis autem iure qui accusamus commodi? Enim unde deleniti. Aliquam et incidunt illum dolore enim temporibus sint?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quia repudiandae itaque modi eligendi earum odit saepe obcaecati labore nulla aliquid soluta praesentium dolorem quis nobis culpa voluptatum non corrupti.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae consectetur laboriosam ratione natus necessitatibus ipsum dolore quibusdam recusandae tempora alias possimus nulla nihil non et debitis laborum obcaecati odio ab!</p>
              <p>Quasi maxime sit impedit enim quam nam architecto iure error temporibus neque quaerat inventore minus debitis provident asperiores ipsum deserunt sed natus placeat quos odio tenetur distinctio doloribus voluptatibus itaque!</p>
              <p>Nulla quia fugiat ipsam facilis corporis impedit temporibus neque excepturi autem cupiditate quibusdam quam deserunt! Atque aliquid delectus eos minima quia veniam cupiditate. Dolorem nemo blanditiis eum iusto placeat omnis!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ipsam laudantium numquam neque quae nesciunt iusto laborum sequi iste tempora modi pariatur nobis quaerat similique a exercitationem vero labore!</p>          
            </div>
          <?php } ?> 

          <?php if($pg == "20-dez"){ ?>
            <div id="conteudo">            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel cumque hic omnis adipisci dolorem culpa facilis libero saepe voluptate optio facere. Sunt eaque animi vel tenetur quasi debitis rem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda omnis consequatur optio perferendis autem iure qui accusamus commodi? Enim unde deleniti. Aliquam et incidunt illum dolore enim temporibus sint?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quia repudiandae itaque modi eligendi earum odit saepe obcaecati labore nulla aliquid soluta praesentium dolorem quis nobis culpa voluptatum non corrupti.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae consectetur laboriosam ratione natus necessitatibus ipsum dolore quibusdam recusandae tempora alias possimus nulla nihil non et debitis laborum obcaecati odio ab!</p>
              <p>Quasi maxime sit impedit enim quam nam architecto iure error temporibus neque quaerat inventore minus debitis provident asperiores ipsum deserunt sed natus placeat quos odio tenetur distinctio doloribus voluptatibus itaque!</p>
              <p>Nulla quia fugiat ipsam facilis corporis impedit temporibus neque excepturi autem cupiditate quibusdam quam deserunt! Atque aliquid delectus eos minima quia veniam cupiditate. Dolorem nemo blanditiis eum iusto placeat omnis!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ipsam laudantium numquam neque quae nesciunt iusto laborum sequi iste tempora modi pariatur nobis quaerat similique a exercitationem vero labore!</p>          
            </div>
          <?php } ?> 

          <?php if($pg == "28-dez"){ ?>
            <div id="conteudo">            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel cumque hic omnis adipisci dolorem culpa facilis libero saepe voluptate optio facere. Sunt eaque animi vel tenetur quasi debitis rem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda omnis consequatur optio perferendis autem iure qui accusamus commodi? Enim unde deleniti. Aliquam et incidunt illum dolore enim temporibus sint?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quia repudiandae itaque modi eligendi earum odit saepe obcaecati labore nulla aliquid soluta praesentium dolorem quis nobis culpa voluptatum non corrupti.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae consectetur laboriosam ratione natus necessitatibus ipsum dolore quibusdam recusandae tempora alias possimus nulla nihil non et debitis laborum obcaecati odio ab!</p>
              <p>Quasi maxime sit impedit enim quam nam architecto iure error temporibus neque quaerat inventore minus debitis provident asperiores ipsum deserunt sed natus placeat quos odio tenetur distinctio doloribus voluptatibus itaque!</p>
              <p>Nulla quia fugiat ipsam facilis corporis impedit temporibus neque excepturi autem cupiditate quibusdam quam deserunt! Atque aliquid delectus eos minima quia veniam cupiditate. Dolorem nemo blanditiis eum iusto placeat omnis!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ipsam laudantium numquam neque quae nesciunt iusto laborum sequi iste tempora modi pariatur nobis quaerat similique a exercitationem vero labore!</p>          
            </div>
          <?php } ?> 

          <?php if($pg == "12-jan"){ ?>
            <div id="conteudo">            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel cumque hic omnis adipisci dolorem culpa facilis libero saepe voluptate optio facere. Sunt eaque animi vel tenetur quasi debitis rem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda omnis consequatur optio perferendis autem iure qui accusamus commodi? Enim unde deleniti. Aliquam et incidunt illum dolore enim temporibus sint?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quia repudiandae itaque modi eligendi earum odit saepe obcaecati labore nulla aliquid soluta praesentium dolorem quis nobis culpa voluptatum non corrupti.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae consectetur laboriosam ratione natus necessitatibus ipsum dolore quibusdam recusandae tempora alias possimus nulla nihil non et debitis laborum obcaecati odio ab!</p>
              <p>Quasi maxime sit impedit enim quam nam architecto iure error temporibus neque quaerat inventore minus debitis provident asperiores ipsum deserunt sed natus placeat quos odio tenetur distinctio doloribus voluptatibus itaque!</p>
              <p>Nulla quia fugiat ipsam facilis corporis impedit temporibus neque excepturi autem cupiditate quibusdam quam deserunt! Atque aliquid delectus eos minima quia veniam cupiditate. Dolorem nemo blanditiis eum iusto placeat omnis!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ipsam laudantium numquam neque quae nesciunt iusto laborum sequi iste tempora modi pariatur nobis quaerat similique a exercitationem vero labore!</p>          
            </div>
          <?php } ?> 

        </div>
      </div>  
      <div id="voltar"><a href=""><p><b>voltar a página inícial</b></p></a></div>         
    </div> 
    <?php include("footer.php") ?>
  </body>
</html>

