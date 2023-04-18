<?php 
    $date = mysqli_connect('localhost', 'root', '', 'webphp');
     if($date){

        $query ="SELECT * FROM `products` WHERE `id`=".$_GET['id'];

        $response=mysqli_query($date, $query);
        if(!empty($response)) {
        $product = mysqli_fetch_assoc($response);

        }else{ 
            echo 'DateBase Error';
        }
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheeseBurger</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="header1">
              <div class="header_img">
                <a href="/web2/index.php">
                    <img src="Images/logo.png" alt="Logo" width="150">
                </a>
              </div>
            </div>
            <div class="header2">
                <div class="search">
                    <input type="text" name="text" placeholder="Enter the name of the meal․․․">
                </div>
                <div class="search_btn">
                    <button><img src="Images/searchbutton.png" alt=""></button>
                </div>
            </div>
            <div class="header3">
				<?php include("menu.php") ?>
			</div>
        </div>
    </header>

    <main>
        <div class="content_singl">
            <div  class="image">
                 <img src="/Web2/Cookies/food/<?php echo $product["image"] ?>" alt="burger">
            </div>
            <div class="desc">
                <p id="name"><?php echo $product["title"] ?></p> <br><br>
                <ol>
                    <li>2 pounds freshly ground chuck</li>
                    <li>1 tablespoon onion powder.</li>
                    <li>1 teaspoon salt.</li>
                    <li>1 teaspoon freshly ground black pepper.</li>
                    <li>12 slices deli-counter American cheese.</li>
                    <li>6 large burger buns, preferably homemade, toasted if desired.</li>
                </ol>
                <?php echo $product["price"] ?>
            </div>

        </div>
    </main>

    <footer>
      <div class="footer">
        <div class="sites">
            <a href="https://www.facebook.com/" target="_blank"><img src="Images/facebook.png" alt="facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="Images/instagram.png" alt="Instagram"></a>
            <a href="https://www.vk.com/" target="_blank"><img src="Images/vk.png" alt="Vk"></a>
            <a href="https://www.telegram.org/" target="_blank"><img src="Images/telegram.png" alt="telegram"></a>
        </div>
        <div class="textby">
            <p>&#169;&nbsp;Design and Developed by Sveta</p>
        </div>
      </div>
    </footer>
</body>
</html>