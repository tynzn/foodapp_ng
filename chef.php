<?php
include_once("includes/header.php")
?>


</head>
<body>
        <div class="table">
            <div class="row row-section"> 
                
                
                <div class="section col-md-6 centre ">
                    <p> showcase your best food concept with a wide range of foodies around the country prove your expertise by  preparing their meal exactly the way they ask and have us move it to them in the shortest time yet</p> 
                    <p>
                        <a class="btn btn-primary" href="food_gallery.php">Food gallery</a>
                    </p>
            </div>
        
        <div class="form-group  col-md-6">
           
            <form  action="" method="">
            
                    <div class="signup-form">
                        <label>User Name
                            <input class="form-control" type="text" name="user_name"></input>
                        </label>
                        <br>
                        <label>Password
                    
                            <input class="form-control" type="password" name="password"></input>
                    
                        </label>
                        <br>
                        <label>Phone Number
                            <input class="form-control" type="number" name="phone_number"></input>
                        </label>
                        <br>
                        <label>Email
                            <input class="form-control" type="Email" name="phone_number"></input>
                            </label>
                            <br>
                        <button  class="click-chef-signup btn" type="submit">Become a chef on FoodApp.ng </button>
                        <div class="notice">
                            <?php
                                    include_once("includes/signup_notice.php")

                            ?>
                        </div>
                </div>
            


            </form>
        </div>
     </div>
        

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>