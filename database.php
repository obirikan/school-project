<?php require 'logic.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
        body{
            margin:0px;
        }
         header{
             border:1px solid black;
             color:white;
             background-color:blue;
             padding:20px;
         }
        div{
            border:1px solid black;
            padding:10px;
        }
        p{
            padding:10px;
            display:inline-block;
            background-color:lightgreen;
            color
        }
        .p1{
            float:right;
            background-color:red;
        }
        h1{
            text-transform:uppercase;
        }
        a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <header>
          <h2>welcome to your dataBase</h2>
    </header>
    <section>
    <?php foreach($paste as $all):?>
    <?php if($_SESSION['name']===$all['poster']):?>
     <div>
       <h1><?php echo $all['head']?></h1>
       <p><a href="database.php?file2=<?php echo $all['id']?>">edit</a></p>
       <p class="p1"><a href="database.php?file2=<?php echo $all['id']?>">delete</a></p>
     </div>
    <?php endif?>
    <?php endforeach?>
    </section>
</body>
</html>