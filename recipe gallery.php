<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Recipe</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php
        //require functions.php file
        require ('functions.php');
    ?>
</head>
<body>
    <section id="product" class="section-p1">
        <h2>Explore Your Recipes</h2>
        <div class="container">
            <div class="items" onclick="window.location.href='sRecipe.php';">
                <div onclick="loadData('btn1')">
                    <img src="./images/2.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="items" onclick="loadData('btn2')">
                <img src="images/5.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn3')">
                <img src="images/9.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn4')">
                <img src="images/13.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn5')">
                <img src="images/17.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn6')">
                <img src="images/21.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn7')">
                <img src="images/25.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="items" onclick="loadData('btn8')">
                <img src="images/29.jpg" alt="recipe Image">
                <div class="name">
                    <span>Chinese</span>
                    <h5>Recipe Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a> 
    </section>



    <script src="script.js"></script>
</body>
</html>