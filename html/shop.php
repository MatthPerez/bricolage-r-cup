  <?php
  $title= 'Samuel Mélia - Acheter';
  $active1 = '';
  $active2 = 'active';
  require '../back/header.php';
  ?>

  <!--Shopping-->
  <h1>Titre de la page shopping</h1>
  <p class="police">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor omnis assumenda facere ea neque dignissimos! Officia ratione sit repellat, voluptatibus, dolorem corporis culpa praesentium eligendi tempore est in quo animi. Velit ullam, aut voluptatum quas repudiandae tempora earum error odio deserunt quis, sed ad minus eos doloribus quisquam rerum pariatur dolor. Quidem repellendus, quibusdam praesentium quam iure saepe architecto consequuntur quod itaque officia qui eos delectus quos! Repellendus recusandae placeat vitae illo facilis velit praesentium, commodi corrupti consequuntur tenetur quos. Perspiciatis tempore, sit reprehenderit quaerat neque veritatis sunt nostrum hic odio expedita in magni omnis facere distinctio animi. Accusantium at sit excepturi sapiente esse magni exercitationem non sint rem dignissimos, aliquid deserunt nam ipsum vitae minima corrupti provident officiis accusamus quam praesentium blanditiis quas. Atque voluptatibus aut labore blanditiis obcaecati iure odit facere alias voluptas aperiam! Error quaerat maxime eius deserunt ad commodi earum dolorem facere, voluptates at quidem molestiae mollitia velit eaque enim sunt repellendus illum reprehenderit maiores id quibusdam harum! Ipsam quam amet cupiditate laudantium recusandae beatae reiciendis harum voluptatibus unde at, debitis saepe qui deserunt aperiam tenetur consectetur, explicabo obcaecati natus doloribus? Corrupti temporibus praesentium placeat necessitatibus. Consequuntur sapiente vitae excepturi at veniam deleniti quo dicta omnis laborum delectus labore iste pariatur aut dolores totam iure earum cumque ex optio, doloribus numquam nemo officia illo? Quisquam, fuga quibusdam optio temporibus, amet repudiandae illo impedit, tenetur ullam saepe quo possimus tempore voluptatum minima in? Amet totam cum illo magnam adipisci delectus, debitis quisquam, incidunt deserunt, voluptatem iure possimus.</p>
  <div class="row justify-content-evenly body">
  <?php
    require '../back/pics_list.php';
    $list = getList();
    for ($a=0; $a<count($list); $a++) {
        echo '<div class="card line-jump" style="width: 18rem;">
            <img src="../images/Photos personnelles/'.$list[$a]['pic'].'.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="police">'.$list[$a]['title'].'</h5>
                <p class="card-text f-secondary police">Prix : '.$list[$a]['price'].' €</p>
            </div>
            <button type="button" class="btn btn-antiquewhite line-jump1">Acheter</button>
        </div>';
    };
  ?> 

  </div>
</body>

<?php
    $footer = 'Ceci est un test pour le pied de page du magasin.';
    require '../back/footer.php';
?>
</html>