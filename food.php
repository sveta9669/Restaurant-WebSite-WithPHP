
<?php 

    $date = mysqli_connect('localhost', 'root', '', 'webphp');
     if($date){

        $query ="SELECT * FROM `products`";

        $response=mysqli_query($date, $query);
        $product = mysqli_fetch_all($response,MYSQLI_ASSOC);
     } 
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Food</title>
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
        <div class="content">
            <div class="menu">
				<div class="link" id="food"><a href="food.html">Food</a></div>
                <div class="link"><a href="drinks.php">Drinks</a></div>
                <div class="link"><a href="sweets.php">Sweets</a></div>
			</div>
            <div class="food">
                <?php 


            foreach ($product as $key => $product) { ?>
                <div class="product">
                    <div class="product_img">
                     <img src="/web2/Cookies/food/<?php echo $product["image"] ?>" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p><?php echo $product["title"] ?></p><br>
                        <hr>
                        <p><?php echo $product["price"] ?></p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="single.php?id=<?php echo $product['id'];?>">See more</a></div>
                    </div>
                </div>
                <?php }
                 ?>
                <!-- <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/CheeseBurger1000.png" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p>Cheese Burger</p><br>
                        <hr>
                        <p>1000 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Cheesebuger De Luxe1100.png" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p>Cheeseburger De Luxe</p>
                        <hr>
                        <p>1100 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Chefburger De Luxe1300.png" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p>Chefburger De Luxe</p>
                        <hr>
                        <p>1300 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Bigger1650.png" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p>Bigger</p><br>
                        <hr>
                        <p>1650 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Double Chefburger1750.png" alt="Burger">
                    </div>
                    <div class="product_info">
                        <p>Double Chefburger</p>
                        <hr>
                        <p>1750 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Habanero BBQ Shrimp 1000.jpg" alt="Grill">
                    </div>
                    <div class="product_info">
                        <p>Habanero BBQ Shrimp</p>
                        <hr>
                        <p>1000 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Seared Scallops with Brown Butter and Lemon Pan Sauce1100.jpg" alt="Grill">
                    </div>
                    <div class="product_info">
                        <p>Seared Scallops</p><br>
                        <hr>
                        <p>1100 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Braised Chiken Legs with Grapes and Fennel 1200.jpg" alt="Grill">
                    </div>
                    <div class="product_info">
                        <p>Braised Chicken Legs</p>
                        <hr>
                        <p>1200 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Grilled Pork Spareribs with Sode Bottle Barbecue Sauce1500.jpg" alt="Grill">
                    </div>
                    <div class="product_info">
                        <p>Grilled Pork Spareribs</p>
                        <hr>
                        <p>1500 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Grilled Coconut Shrimp with Shishito Peppers1700.jpg" alt="Grill">
                    </div>
                    <div class="product_info">
                        <p>Grilled Coconut Shrimp</p>
                        <hr>
                        <p>1700 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Seafood300.jpg" alt="Pizza">
                    </div>
                    <div class="product_info">
                        <p>Seafood</p><br>
                        <hr>
                        <p>300 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Pepperoni350.jpg" alt="Pizza">
                    </div>
                    <div class="product_info">
                        <p>Pepperoni</p><br>
                        <hr>
                        <p>350 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Sicilian450.png" alt="Pizza">
                    </div>
                    <div class="product_info">
                        <p>Sicilian</p><br>
                        <hr>
                        <p>450 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/grilled mushroom500.jpg" alt="Pizza">
                    </div>
                    <div class="product_info">
                        <p>Grilled mushroom</p><br>
                        <hr>
                        <p>500 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product_img">
                     <img src="Cookies/food/Mushrooms600.png" alt="Pizza">
                    </div>
                    <div class="product_info">
                        <p>Mushrooms</p><br>
                        <hr>
                        <p>600 AMD</p>
                    </div>
                    <div class="product_links">
                        <div class="product_links1"><a href="#">Buy</a></div>
                        <div class="product_links2"><a href="singl1.html">See more</a></div>
                    </div>
                </div> -->
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