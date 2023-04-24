<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Recipe S_product</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php
        //require MySQL Connection
        require ('database/DBcontroller.php')
    ?>
</head>
<body>

    <section id="recipeDetails" class="section-p1">
        <div class="SingleRecipeImage">
            <img src="images/image.jpg" alt="recipeImage" width="100%" id="MainImg">

            <div class="smallImageSet">
                <div class="image-column">
                    <img src="images/image.jpg" width="100%" class="S_Img" alt="images" id="MainImg">
                </div>
                <div class="image-column">
                    <img src="images/image 2.jpg" width="100%" class="S_Img" alt="images" id="Image2">
                </div>
                <div class="image-column">
                    <img src="images/image.jpg" width="100%" class="S_Img" alt="images" id="Image3">
                </div>
                <div class="image-column">
                    <img src="images/image.jpg" width="100%" class="S_Img" alt="images" id="Image4">
                </div>
            </div>
        </div>

        <div class="SingleRecipeDetails">
            <h4>Recipe Name here</h4>
            <h5>Chinese</h5>
            <h2></h2>
            <button class="btn-cal">Calculate Ingredients</button>

            <form action="#" class="form">
                <!-- Progress bar -->
                <div class="progressbar">
                  <div class="progress" id="progress"></div>
                  
                  <div
                    class="progress-step progress-step-active"
                    data-title="Step 1"
                  ></div>
                  <div class="progress-step" data-title="Step 2"></div>
                  <div class="progress-step" data-title="Step 3"></div>
                  <div class="progress-step" data-title="Step 4"></div>
                </div>
          
                <!-- Steps -->
                <div class="form-step form-step-active">
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <div class="">
                    <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                  </div>
                </div>
                <div class="form-step">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                  
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>
                <div class="form-step">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                  
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>
                <div class="form-step">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                  
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                       <!-- <input type="submit" value="Submit" class="btn" /> -->
                  </div>
                </div>
              </form>
        </div>
    </section>


    <script src="script.js"></script>
</body>
</html>