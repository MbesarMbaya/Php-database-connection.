<?php
$_SERVER = "localhost";
$username ="root";
$password ="";
$database ="";
$conn = mysqli_connect($_SERVER,$username,$password,$database);
if(isset($_POST{'subscribebutton'}))
{
    //1.fetch from data
    $email= $_POST['email'];  
    //2.submit form data
    $insertdata = mysqli_query($conn,"INSERT INTO
    subscribers email(email) VALUES($email)");
    if($insertdata)
    {
        echo "Data submitted succesfuly";
    }
    else{
        echo "Error occured";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <main class="p-5 mb-4 bg-light">
          <h1 style="padding-top:30px ;">About us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, architecto ab rerum animi aperiam repudiandae nihil, assumenda excepturi officiis magnam dolore quas? Officiis totam voluptas deserunt perspiciatis, et vero ipsum.</p>
            </div>
                    </main>

                        <div class="container">
                        <div class="row">
                        <div class ="col-lg-6">
                            <h1>Our Programs</h1>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Quibusdam sit aut ab quis et tempora labore dolore dignissimos ullam,
                                 consectetur quod dolorem dolores eveniet voluptas debitis provident
                                  sequi repellendus iusto pariatur, odio quia quam hic consequatur.
                                   Earum, reiciendis soluta? Lboriosam?  
                             </p>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="./bootstrap-5.2.0-beta1-dist/image/Right.jpg" alt="good image" style="border: radius 20px; height:45vh; width:550px;">
                        </div>

                        <h1>The Programs</h1>
                        <div  class="row">
                            <div class="col-lg-4 bg-light shadow">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Skill Discovery</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odit aliquam quidem magni exercitationem cupiditate, quo porro quod tempora quas deserunt debitis, quia numquam? Quasi possimus cumque minima asperiores repellat.</p>
                                    </div>
                                    <button class="btn btn-primary">View Details</button>
                                </div>   
                    
                                </div>
                                <div class="col-lg-4 bg-light shadow">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Upskilling Programs</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odit aliquam quidem magni exercitationem cupiditate, quo porro quod tempora quas deserunt debitis, quia numquam? Quasi possimus cumque minima asperiores repellat.</p>
                                        </div>
                                        <button class="btn btn-primary">View Details</button>
                                    </div> 
                        
                                    </div>
                                    <div class="col-lg-4 bg-light shadow">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Path Finding Programs</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odit aliquam quidem magni exercitationem cupiditate, quo porro quod tempora quas deserunt debitis, quia numquam? Quasi possimus cumque minima asperiores repellat.</p>
                                            </div>
                                            <button class="btn btn-primary">View Details</button>
                                            
                            
                                        </div>
                                    </div>
                                    <p style="text-align: center; padding-top: 50px; color: gray;">Subscribe to get information,latest news about <br>Zalego Academy</p>
                                    <form action="aboutus.php" method="POST">                                                          
                                        <div class="row pt-5">
                                            <div class="col-lg-12" style="text-align: center;">
                                                <input name="email" type="Email" placeholder="Enter e-mail address">
                                                <button name="submitButton" type=" submit" class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
                                        <div class="container-fluid">
                                            <a href="#" class="navbar-brand">Zalego academy</a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbardisplaynavigations">
                                                <div class="navbar-nav">
                                                <a href="index.html" class="nav-link active">Home</a>
                                                <a href="#" class="nav-link active">About us</a>
                                                <a href="#" class="nav-link active">Contact us</a>
                                            </div>
                                        </div>
                                      </div> 
                                 </nav> -->
                    
                            
                    
                                </div >        
                        </div>
                        <hr>
                        <footer>
                            &copy;Company 2022
                        </footer>
                       <!-- bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js  -->
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                                <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>


<!-- <div class="Image">
    <img src="./bootstrap-5.2.0-beta1-dist/image/Right.jpg"  class="float-end" alt="Right" width="300" height="300">
   </div>
</div> -->