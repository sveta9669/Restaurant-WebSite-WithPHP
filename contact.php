<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <div class="content_contact">
            <div class="left">
                <form>
                    
                    <input type="text" name="text" placeholder="Name"> <br>
                    <input type="text" name="text" placeholder="Lastname"> <br>
                    <input type="email" name="email" placeholder="Email" required="yes"> <br>
                    <br> 
                    <label for="textarea">Message:</label><br>
                    <textarea></textarea>
                    <br>
                    <input type="submit" name="submit">
        
                </form>
            </div>
            <div class="right">
                <p>Please fill in the fields and address any questions 
                or concerns you may have.</p>
                <br>
                <p>You can also contact us at the following phone numbers: <br>
                    &nbsp;&nbsp;(010) 001 001 <br>
                    &nbsp;&nbsp;(060) 066 066 <br>
                    or visit Tigran Mec 26.</p>
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