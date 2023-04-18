<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Glace</title>
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
                 <img src="Cookies/drinks/Glace550.png" alt="drink">
            </div>
            <div class="desc">
                <p id="name">Glace</p> <br><br>
                <ol>
                    <li>2 teaspoons instant coffee.</li>
                    <li>1/2 cup cold milk.</li>
                    <li>3-4 scoops vanilla ice cream.</li>
                </ol>
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