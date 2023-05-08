<?php
if(!empty( $_POST['add'])){
        $image=$_POST['image'];
        $title=$_POST['title'];
        $price=$_POST['price'];

    $date = mysqli_connect('localhost', 'root', '', 'webphp');
    
     if($date){
        $query ="INSERT INTO `products` (`image`, `title`, `price`) VALUES ('$image', '$title',' $price')";
        $response=mysqli_query($date, $query);
        if($response){
            echo "ok";
        } else {
            echo "error";
        }
     } 
 } elseif ( !empty( $_POST['update'] ) ) {
        $id    = $_POST['id'];
        $image = $_POST['image'];
        $title = $_POST['title'];
        $price = $_POST['price'];

    $date = mysqli_connect( 'localhost', 'root', '', 'webphp' );
        if ( $date ) {
            $query    = "UPDATE `products` SET `title` = '$title', `image`='$image', `price`=$price WHERE `id`=$id";
            $response = mysqli_query( $date, $query );
            if ( $response == true ) {
                echo 'Product successfully updated';
            } else {
                echo 'Something is wrong please try again';
            }
        } else {
            echo 'DB ERROR';
        }
    }
if ( isset( $_GET['delete'] ) && isset($_GET['id']) ) {
    
    $date = mysqli_connect( 'localhost', 'root', '', 'webphp' );
    if ( $date ) {
        $query  = "DELETE FROM `products` WHERE `id`= ".$_GET['id'];
        $response = mysqli_query( $date, $query );
        if ( $response == true ) {
            echo 'Product successfully deleted';
        } else {
            echo 'Something is wrong please try again';
        }
    } else {
        echo 'DB ERROR';
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Time</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="header1">
              <div class="header_img">
                <a href="/web2/index.php">
                    <img src="../Images/logo.png" alt="Logo" width="150">
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
				<?php include("../menu.php") ?>			</div>
        </div>
    </header>

    <main>
        <div class="content">
            <div class="form">
             <h1>Add Product</h1>
                <form action="/web2/admin/index.php" method="post">
                    <input type="text" name="image" placeholder="Image"> <br>
                    <input type="text" name="title" placeholder="Title"> <br>
                    <input type="number" name="price" placeholder="Price"> <br>
        
                    <input type="submit" name="add">
                </form>

                <?php 
                if ( ! empty( $_GET['update'] ) && ! empty( $_GET['id'] ) ) {
                $date = mysqli_connect( 'localhost', 'root', '', 'webphp' );
                if ( $date ) {
                    $query    = "SELECT * FROM `products` WHERE `id`=" . $_GET['id'];
                    $response = mysqli_query( $date, $query );
                    if ($response != false){
                        $product = mysqli_fetch_assoc( $response );
                    } else {
                        $no_products = true;
                    }
                } else {
                    echo 'DB ERROR';
                } 
                ?>

                <h2>Update product</h2>
                <form action="/web2/admin/index.php" method="post">
                    <input type="hidden" name="id" placeholder="ID" value="<?php echo $product['id']; ?>"><br>
                    <input type="text" name="image" placeholder="Image" value="<?php echo $product['image']; ?>"><br>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $product['title']; ?>"><br>
                    <input type="number" name="price" placeholder="Price" value="<?php echo $product['price']; ?>"><br>
                    
                    <input type="submit" name="update">
                </form>
            <?php } ?>
        </div>
        <div>
                <?php
                $date = mysqli_connect('localhost','root','','webphp');
                if ($date){
                    $query = "SELECT * FROM `products`";
                    $response = mysqli_query( $date, $query );
                    $no_products = false;
                    if ($response == false){
                        echo 'Query Error';
                    } else {
                        $products = mysqli_fetch_all($response, MYSQLI_ASSOC);
                        if (count($products) == 0){
                            $no_products = true;
                        }
                    }
                } else {
                    echo 'DB ERROR';
                }
                if ( $no_products == true ){
                    echo 'There are no products in shop!';
                } else { ?>
                <table border="1" bgcolor="white">
                <?php foreach ( $products as $key => $product ){ ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['title']; ?></td>
                        <td><a class="productLink" href="/web2/admin/index.php?update=true&id=<?php echo $product['id']; ?>">Update</a></td>
                        <td><a class="productLink" href="/web2/admin/index.php?delete=true&id=<?php echo $product['id']; ?>">Delete</a></td>
                    </tr>
                    <?php }
                }   ?>
                </table>
            </div>
         </div>   
    </main>

    <footer>
      <div class="footer">
        <div class="sites">
            <a href="https://www.facebook.com/" target="_blank"><img src="../Images/facebook.png" alt="facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="../Images/instagram.png" alt="Instagram"></a>
            <a href="https://www.vk.com/" target="_blank"><img src="../Images/vk.png" alt="Vk"></a>
            <a href="https://www.telegram.org/" target="_blank"><img src="../Images/telegram.png" alt="telegram"></a>
        </div>
        <div class="textby">
            <p>&#169;&nbsp;Design and Developed by Sveta</p>
        </div>
      </div>
    </footer>
    
</body>
</html>