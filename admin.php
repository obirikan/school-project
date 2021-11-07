<?php require 'logic.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>admin page</title>
</head>
<body>
<header><h1>hello</h1></header>
    <div class="parent"> 
         <div>
            <ol>
                <li><img src="imgs/9.png" alt=""><a href="database.php">database</a></li>
                <li><img src="imgs/9.png" alt=""><a href="logout.php">logout</a></li>
                <li><img src="imgs/9.png" alt=""><a href="database.php">P.word</a></li>
            </ol>
        </div>
         <div>
         
             <center>
                 <h2>welcome &nbsp; <?php echo $_SESSION['name'] ?></h2>
                 <p>
                     <blockquote>
                         Lorem ipsum dolor sit, amet consectetur 
                         adipisicing elit. Voluptas, eaque molestias pariatur 
                         nobis facilis, facere maxime corrupti cumque laudantium odio
                         culpa? Aspernatur cupiditate doloremque sapiente 
                         mollitia voluptas natus, pariatur quidem!
                     </blockquote>
                 </p>
            </center>
             <div>
                
                  <form action="admin.php" method="post">
                       <input type="text" name="heading" placeholder="heading">
                       <textarea name="content" id="" cols="30" rows="10" placeholder="content"></textarea>
                       <br><br>
                    <select name="place">
                    <?php if($_SESSION['name']==='user1'):?>
                       <option value="adukorkor">ADUKORKOR</option>
                    <?php endif?>
                    <?php if($_SESSION['name']==='user2'):?>
                       <option value="dompreh">DOMPREH</option>
                    <?php endif?>
                    <?php if($_SESSION['name']==='user3'):?>
                       <option value="AJ">AJ</option>
                    <?php endif?>
                    <?php if($_SESSION['name']==='user4'):?>
                       <option value="damian">Damian</option>
                    <?php endif?>
                    <?php if($_SESSION['name']==='user5'):?>
                       <option value="JF">JF</option>
                    <?php endif?>
                       <?php if($_SESSION['name']==='user5'):?>
                       <option value="school">Institution</option>
                       <?php endif?>
                    </select>
                       <input type="submit" value="submit" name="send">
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
