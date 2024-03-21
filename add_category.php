<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory System</title>
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Icon -->
        <link rel="icon" href="image/logo-nike.jpg" type="image/x-icon">
        <!-- Favicons -->
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/4a85ec1aea.js" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </html>

    <body>

        <div class="wrapper">

            <aside id="sidebar">

                <div class="d-flex">

                    <button id="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button> 

                    
                    <div class="sidebar-logo">
                        <img src="image/logo-nike.jpg" alt="">
                        <a href="index.html">NIKE</a>
                    </div>

                </div>

                <div class="inner-sidebar">

                    
                </div>

                <ul class="sidebar-nav">

                    <p class="general">General</p>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link">

                            <i class="lni lni-home"></i>
                            <span>Home</span>

                        </a>

                    </li>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#catalog" aria-expanded="false" aria-controls="catalog">
                            <i class="lni lni-grid-alt"></i>
                            <span>Catalog</span>
                        </a>

                        <ul id="catalog" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                            <li class="sidebar-item">

                                <a href="#" class="sidebar-link">Product</a>
                                
                            </li>   
                            
                            <li class="sidebar-item">

                                <a href="#" class="sidebar-link">Collection</a>
                                
                            </li>

                            <li class="sidebar-item">
                                
                                <a href="index.php" class="sidebar-link">Inventory</a>
                                
                            </li>

                            <li class="sidebar-item">

                                <a href="#" class="sidebar-link">Orders</a>
                                
                            </li>

                        </ul>

                    </li>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link" >

                            <i class="lni lni-coin"></i>
                            <span>Finances</span>

                        </a>

                    </li>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link" >

                            <i class="lni lni-user"></i>
                            <span>Customers</span>

                        </a>

                    </li>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link" >

                            <i class="lni lni-bolt-alt"></i>
                            <span>Marketing</span>

                        </a>

                    </li>

                    <p class="general">Sales Channel</p>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link" >
                            <i class="fa-solid fa-store"></i>
                            <span>Online Store</span>
                        </a>

                    </li>

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link" >
                            <i class="lni lni-link"></i>
                            <span>Sell Via Link</span>
                        </a>

                    </li>

                    <div class="sidebar-footer">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-exit"></i>
                            <span>Logout</span>
                        </a>
                    </div>

                </ul>


            </aside>

        </div>

        <section class="add" id="add">

            <div class="add-wrapper">

                <div class="text-top">
                    
                    <h1>Add Category</h1>
                    <p>Add new Category of product</p>
                    
                </div>

                <div class="wrapper-bottom">

                    <form action="process/category_add.php" method="post">

                        <div class="grid-container">

                            <div class="container">
                                <label for="prod-name" class="prod-name">Category Name</label>
                                <input type="text" class="prod-name" id="prod-name" name="category" required>
                            </div>

                        <div class="buttons">
                           <button class="submit" name="submit-button">Submit</button>
                            <button class="cancel" name="cancel-button">Cancel</button>
                        </div>

                    </form>


                </div>

            </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js/js.js"></script>
      
        
    </body>

</html>