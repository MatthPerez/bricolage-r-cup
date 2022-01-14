  <?php
  $title= 'Samuel Mélia - Galerie photos';
  $active1 = 'active';
  $active2 = '';
  require '../back/header.php';
  ?>

  <!--Haut de page-->
  <h1>Titre de la page galerie</h1>
  
  <!--Corps de page-->
  <?php
    require '../back/pics_list.php';
    $categories = ['Nature vive', 'Nature morte', 'Tristan', 'Samuel'];
    $list = getList();

    foreach ($categories as $category) {
        echo '<h2>'.$category.'</h2>'.PHP_EOL.'<div class="row justify-content-evenly">';
        for ($a=0; $a<count($list); $a++) {
            if ($list[$a]['category'] == $category) {
                echo '
                    <div class="card zoom-m line-jump" style="width: 18rem;">
                        <img src="../images/Photos personnelles/'.$list[$a]['pic'].'.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>'.$list[$a]['title'].'</h5>
                            <p class="card-text f-secondary">'.$list[$a]['text'].'</p>
                        </div>
                    </div>';
            };
        };
    };
  ?>
</body>

<?php
  $footer = 'Ceci est un test pour le pied de page de la galerie.';
  require '../back/footer.php';
?>
</html>