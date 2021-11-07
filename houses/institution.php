<?php require '../logic.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="adu.css"> 
    <title>Institution</title>
</head>
<body>
      <nav>
           <div class="cont3">
          <h2 class="text">St.Martins Senior High</h2>
          <blockquote>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, repellendus?
          </blockquote>
           </div>
      </nav>
      <!--content-->
      <section>
  
              <div>
                <?php foreach($paste as $one):?>
                  <?php if($one['uid']==='school'):?>
                  <figure class="fig">
                 
                  <div class="cont">
                  <img src="../imgs/1.jpg" alt="">
                  <div class="cont1">
                     <h1><a href="../page.php?file=<?php echo $one['id']?>"><?php echo $one['head']?></a></h1>
                     <figcaption>by <a class="user"><?php echo $one['poster']?></a>
                    <?php 
                    $d1=date($one['date']);
                    $d2=date("h:i:sa");

                    $a=date_create($d1);
                    $b=date_create($d2);

                    $int=date_diff($a,$b);
                    echo $int->format("%a days ago")
                    ?>
                    </div>
                    </div>
                    </figcaption>
                    </figure>
                    <hr>
                  <?php endif ?>
                <?php endforeach?>
              </div>
      </section>
</body>
</html>
