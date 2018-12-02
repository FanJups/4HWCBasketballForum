<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : "Basketball Forum" ?>
    </title>

    
    <meta charset="utf-8" />

    <meta name="description" content="Forum de basketball mondial ">

    <meta name="author" content="Passion pour le basketball">

    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="/css/styles_first.css" type="text/css" />

    <link rel="stylesheet" href="/css/styles.css" type="text/css" />

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css" />

    <link rel="icon" href="/images/salle.jpg">

    

    
  </head>
  
  <body >

    <div class="container-fluid">

      <div class="row">

        <div class="col-xs-12">


              <div id="wrap">

                    <header>
                      <h1><a href="/">Forum de Basketball Mondial</a></h1>
                      <p>Du basketball, encore et encore !!!</p>
                    </header>
                    
                    <nav>
                      <ul>
                        <li><a href="/">Infos</a></li>
                        <li><a href="/admin/">Publication</a></li>
                        <?php if ($user->isAuthenticated()) { 

                          ?>
                        
                        <li><a href="/admin/news-insert.html">Ajouter une info</a></li>
                        <li><a href="/admin/deconnexion">Déconnexion</a></li>
                        <?php } ?>
                      </ul>
                    </nav>
                    
                    <div id="content-wrap">
                      <section id="main">
                        <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
                        
                        <?= $content ?>
                      </section>
                    </div>
                  
                    <footer></footer>
                    
              </div>
          

      </div>
        

      </div>
      

    </div>


    
    <script src="/js/forum.js"></script>

  </body>
</html>