<?php require "logic.php"?>
<?php if($it['id']===$id):?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title><?php echo $it['uid']?></title>
</head>
<body>
    <div class="imgcont">
         <h3>ghgh</h3>
    </div>
    <section>
    <div>
       <h1><?php echo $it['head']?><br>
       <a class="date"><?php $d1=date($it['date']);
          echo $d2=date("M jS-Y",strtotime($d1));
    ?></a></h1> 
   </div>
    </section>
    <section>
    <blockquote>
           <?php echo $it['content'] ?>
    </blockquote>
    </section>
<?php endif ?>
<center>
    <footer>
        <p>&copy; st martins senior high 2020</p> 
    </footer>
</center>
</body>
</html>