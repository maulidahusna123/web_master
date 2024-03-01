<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation Menus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <!-- script menu -->

            <li><a href="index.php?modul=home">Home</a></li>
            <li><a href="index.php?modul=product">Product</a></li>
            <li><a href="index.php?modul=blog">Blog</a></li>
            <li><a href="index.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>

    <!-- content -->
    <div class="main-content">
        <?php
            if(isset($_GET['modul'])){
                $pages = $_GET['modul'];
            }else{
                $pages = "home";
            }

            if(!isset($_GET['modul']) || $pages == "home"){
        ?>
        <div id="content-home">
            <h1>TITLE HOME</h1><br>
                <p>
                </p>
        </div>

        <?php
            }
            if($pages == "product"){
        ?>
        <div id="content-product">
             <h1>PRODUCT</h1><br>
             <p>bi bawah ini adalah beberapa produk kami
             </p>
            <ul>
             <li><a href="index.php?modul=product1">produk 1</a></li>
             <li><a href="index.php?modul=product2">produk 2</a></li>
             <li><a href="index.php?modul=product3">produk 3</a></li>
            
            </ul>
        </div>

        <?php
            }
            if($pages == "product1"){
        ?>
    <div id="content-product1">
            <h1>PRODUK OLAHRAGA</h1><br>
            <ul><li>skipping</li>
            <li>matras</li>
            <li>tinju</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fas fa-arrow-left"></i>
        </div>

        <?php
            }
            if($pages == "product2"){
        ?>
    <div id="content-product2">
            <h1>PRODUK ELEKTRONIK</h1><br>
            <ul><li>pc</li>
            <li>keyboard</li>
            <li>mouse</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fas fa-arrow-left"></i>
        </div>

        <?php
            }
            if($pages == "product3"){
        ?>
    <div id="content-product3">
            <h1>PRODUK FURNITURE</h1><br>
            <ul><li>meja</li>
            <li>lemari</li>
            <li>kursi</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fas fa-arrow-left"></i>
            </p>
        </div>

        <?php
            }
            if($pages == "blog"){
        ?>
        <div id="content-blog">
         <h1>TITLE BLOG</h1><br>
            <p>
            </p>
        </div>

        <?php
            }
            if($pages == "contact"){
        ?>

        <div id="content-contact">

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body style="color: white; background-color: #1d1d1d">

    <div class="container nt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong>CRUD APPLICATION</strong></h1>
    </div>
    <div class="main row justify-content-center">
        <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
    
          <div class="col-10 col-md-8 mb-3"> 
          <label for="firstName">First Name</label>
          <input class="form-control" id="firstName" type="text" placeholder="Enter First Name"
          name="contact-firstName" onkeyup="validatefirstName()"> <span id="name-error"></span>
          </div>

          <div class="col-10 col-md-8 mb-3">
            <label for="lastName">Last Name</label>
            <input class="form-control" id="lastName" type="text" placeholder="Enter Last Name"
            name="contact-lastName" onkeyup="validatelastName()"> <span id="names-error"></span>
            </div>

            <div class="col-10 col-md-8 mb-3">
                <label for="rollNo">RollNo</label>
                <input class="form-control" id="rollNo" type="text" placeholder="Enter Roll No"
                name="contact-rollNo" onkeyup="validaterollNo()"> <span id="no-error"></span>
                </div>

            <div class="col-10 col-md-8">
                <input class="btn btn-success add-btn" type="submit" value="Submit" >
            </div>

        </form>
        <div class="col-12 col-md-10 mt-5">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Roll No</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="student-list">
                    <tr>
                        <td>Dear</td>
                        <td>Programmer</td>
                        <td>25</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>


        </div>
    </div>


    </div>
   <script src="script.js"></script>   
</body>
</html>


       
    </div>
    <script src="script.js"></script>
</body>   
</html>
        </div>


        <?php
            } 
            ?>

</body>
</html>