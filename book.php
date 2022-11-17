<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
</head>
<body>
 <section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

 </section>   

<div class="heading" style ="background:url(./Photo_\ project/img3.jpg) no-repeat">
    <h1>book new</h1>
</div>


<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" methot="post" class="book-form">
        <div class="flex">
            <div class="inputeBox">
                <span>name</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>email</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>phone</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>address</span>
                <input type="text" placeholder="enter your adrdess" name="address">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>where to :</span>
                <input type="text" placeholder="place you wante to visite" name="location">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>ow many</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>arrivals</span>
                <input type="date" name="arrivals">
            </div>
        </div>
        <div class="flex">
            <div class="inputeBox">
                <span>leaving</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class ="btn" name="send">
        
    </form>

</section>


























 <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +221-659028386</a>
            <a href="#"><i class="fas fa-phone"></i> +221-620014780</a>
            <a href="#"><i class="fas fa-envelope"></i> essalhi.me01@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> casablanca, maroc</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="credit"> created by <span>ESSALHI Moussa</span> | all rights resrved! </div>
 </section>









<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>