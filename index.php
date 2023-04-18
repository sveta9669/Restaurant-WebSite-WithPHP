<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Time</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="header1">
              <div class="header_img">
                <a href="index.php">
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
             <div class="head1">
               <p class="name">Welcome to our Restaurant</p>
               <p class="name">&#9734;Lunch Time&#9734;</p>
             </div>
            <div class="head2">
             <div class="container">
                <div class="mySlides">
                    <img src="Images/lunchtime3.jpg">
                </div>
                <div class="mySlides">
                    <img src="Images/lunchtime1.jpg">
                </div>
                <div class="mySlides">
                    <img src="Images/lunchtime2.jpg">
                </div>
                <div class="mySlides">
                    <img src="Images/lunchtime4.jpg">
                </div>
              
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              
                <div class="row">
                  <div class="column">
                    <img class="demo" src="Images/lunchtime3.jpg" onclick="currentSlide(1)" alt="The Woods">
                  </div>
                  <div class="column">
                    <img class="demo" src="Images/lunchtime1.jpg" onclick="currentSlide(2)" alt="Cinque Terre">
                  </div>
                  <div class="column">
                    <img class="demo" src="Images/lunchtime2.jpg" onclick="currentSlide(3)" alt="Mountains and fjords">
                  </div>
                  <div class="column">
                    <img class="demo" src="Images/lunchtime4.jpg" onclick="currentSlide(4)" alt="Northern Lights">
                  </div>
                </div>
              </div>
             <div class="info">
                <p>Lunch Time Restaurant began on April 26th, 2004 in the city of Artik.
                    Focusing on the goals of “Quality, Healthy, and Tradition” the company is family
                    operation making each dish in our own kitchens from scratch. Lunch Time
                    Restaurant has three generations of family member working together to fulfill
                    the idea “Honor the Customer, Quality Comes First”. Every day, before dawn, without
                    fail, each store begins to grind up soybeans, roll out the dough for the oven baked 
                    bun and light the stoves to begin frying the deep fried crullers. We take pride in 
                    the faces of our satisfied customers leaving the restaurant after. </p>
             </div>
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
    <script>
        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    </script>
</body>
</html>