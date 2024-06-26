
<?php
require "config/connection.php";
 // Query to select all data on the table that have admin role
 $search = $connection->query("SELECT product.*, category.category_name 
 FROM product 
 JOIN category ON product.category_id = category.id");
 
 
     $search->execute();
     $productlist = $search->fetchAll(PDO::FETCH_OBJ); // fetching all of the data as an object


?>
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


    </head>

    <body>

        <div class="wrapper">

            <aside id="sidebar">

                <div class="d-flex">

                    <button id="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button> 

                    
                    <div class="sidebar-logo">
                        <img src="image/logo-nike.jpg" alt="">
                        <a href="#">NIKE</a>
                    </div>

                </div>

                <div class="inner-sidebar">

                    
                </div>

                <ul class="sidebar-nav">

                    <p class="general">General</p>

                    <li class="sidebar-item">

                        <a href="https://about.nike.com/en/company" class="sidebar-link" target="_blank">

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

                                <a href="https://www.nike.com/ph/cart" class="sidebar-link" target="_blank">Orders</a>
                                
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

                        <a href="https://www.nike.com/ph" class="sidebar-link" target="_blank">
                            <i class="fa-solid fa-store"></i>
                            <span>Online Store</span>
                        </a>

                    </li>

                    <li class="sidebar-item">

                        <a href="https://www.nike.com/ph/membership" class="sidebar-link" target="_blank">
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

        <section id="main" class="main">

            <div class="main-wrapper"></div>

            <div class="top">
            
                <div class="inventory">

                    <h1>Inventory</h1>

                </div>

                <div class="products">

                    
                    <div class="searching">
                        <i class="lni lni-search-alt"></i>
                        <input type="search" placeholder="Search Products">
                    </div>

                    <div class="button">
                        <button><i class="fa-solid fa-filter"></i> <span>Filter</span></button>
                    </div>

                    <div class="adding">
                        <a href="add.php"><button>Add Product</button></a>
                    </div>
                    <div class="adding">
                        <a href="add_category.php"><button>Add Category</button></a>
                    </div>


                </div>

            </div>
            
            <div class="filters">
                
                <div class="dropdown">

                    <div class="select">

                        <span class="selected">Choose Product</span>
                        <div class="caret"></i></div>

                    </div>

                    <ul class="menu">
                        <li class="active">Choose Product</li>
                        <li>Coca-cola</li>
                        <li>Sprite</li>
                        <li>Kopi Luwak</li>
                        <li>Coffee</li>
                        <li>Iced Coffee</li>
                    </ul>

                </div>

                <div class="dropdown">
                    
                    <div class="select">

                        <span class="selected">Choose Product</span>
                        <div class="caret"></i></div>

                    </div>

                    <ul class="menu">

                        <li>Softdrinks</li>
                        <li>Frappes</li>
                        <li>Fruit Teas</li>
                        <li>Milk Teas</li>
                        <li>Coffee</li>

                    </ul>

                </div>

                <div class="dropdown">
    
                    <div class="select">
                        <span class="selected">Price</span>
                        <div class="caret"></div>
                        
                    </div>
                    <ul class="menu">
                        <li>₱1049.00</li>
                        <li>₱998.00</li>
                        <li>₱898.00</li>
                        <li>₱798.00</li>
                        <li>₱698.00</li>
                    </ul>
                </div>

            </div>

            <div class="table">

                <div class="table-wrapper">

                <form action="process/edit_product.php" method="post">

                    <table class="styled-table">

                        <tr>
                            <th>No</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Inventory</th>
                            <th>Edit</th>
                        </tr>

                        <?php foreach($productlist as $data):?>
                        <tr>
                            <td class="number"><?php echo $data->id;?></td>

                            <td class="prod">
                                <div class="image">
                                    <img src="image/<?php echo$data->img?>" alt="image">
                                </div>
                                <div class="text">
                                <p><?php echo $data->name;?></p>
                                <p class="type"><?php echo $data->category_name;?></p>
                                </div>
                            </td>

                            <td class="price"><span>$</span><?php echo $data->price;?></td>

                            <td class="inventory">
                                <div class="flex">
                                    <p><?php echo $data->quantity?> <span class="number">Stock</p>
                                </div>                                 
                            </td>

                            <td class="edit">
                                <div class="set">
                                    <input type="number" name="price[<?php echo $data->id;?>]" class="no-spinner" placeholder="<?php echo $data->price?>">
                                    <span>Price</span>
                                </div>
                                <div class="total">
                                    <input type="number" name="quantity[<?php echo $data->id;?>]" class="no-spinner" placeholder="<?php echo $data->quantity?>">
                                    <span>Quantity</span>
                                </div>
                                <!--pass product id for edit-->
                                <input type="hidden" name="product_id[]" value="<?php echo $data->id;?>">

                                <button class="add" type="submit" name="edit_product" value="<?php echo $data->id;?>">Submit</button>
                                
                                <!--form for deleting product -->
                                <form action="process/delete_product.php" method="post">
                                    <input type="hidden" name="delete_product" value="<?php echo $data->id;?>">
                                    <button class="delete" type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        <?php endforeach;?>
                    </table>

                </form>



                </div>

            </div>

        </section>
        
        
        
        
        












        
        <!-- test commit -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

    </body>

</html>