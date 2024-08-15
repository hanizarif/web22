<?php  
session_start();
if (isset($_POST['submit'])){
    $_SESSION['user'] = $_POST['user'];
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='stylesheet' href='./style.css'>
        <title>Document</title>
    </head>
    <body>
        <header>
            <nav>
                <h1>hanie zarif</h1>
                <h2 id="job">programmm</h2>

                <ul>
                    <li><a href="">summary</a></li>
                    <li><a href="">skills</a></li>
                    <li><a href="">experience</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <div> 
            <i class='bx bx-menu'></i>
           </div>
      </header>
      <article>
        <section>
            <h2>login</h2>
            <form method="post">
                <label><input type="text" name="user" placeholder="username"></label>
                <label> <input type="password" name="pass" placeholder="password"></label>
                <label><input type="submit" name="submit" value="login"></label>
            </form>
        </section>
      </article>
      <footer>
          <ul>
            <li><a href="">instagram</a></li>
            <li><a href="">githab</a></li>
            <li><a href="">telegram</a></li>
          </ul> 
   </footer>             
   </body>
   </html>
    
      
     
        
