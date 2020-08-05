<?php
include_once("includes/header.php")
?>



</head>
<body>
    <div class="table">
    <div class="row">
    
    <div class="form-group  col-md-6">
            
            <form  action="" method="">
            
            <div class="Customer-signup-form">
            <h3 class="centre">Fill the form to create a Foodie Account </h3>
            <br>
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
                        <button  class="click-chef-signup btn" type="submit">Become a Foodie on FoodApp.ng </button>
                        <div class="notice">
                            <?php
                                    include_once("includes/signup_notice.php")

                            ?>
                        </div>
                </div>


            </form>
        
    </div>
    <div class="col-md-6">
    <p class="section">
    <div class="centre">
       
        <img class="small-img " src="img/yeagit.jpg">
       </div>
    i am a foodie and i go as far as learn to cook just to get the best experience of what i eat, the feeling of having a nicely made delicacy burst in my mouth knowing fully well it is healthy for me and exactly the way i want it can not be described but experienced, to get that taste experience i birthed FoodApp.ng to taste and enjoy food from the best chefs around. join the experience with me today 
    </p>
    </div>
    <div class="container centre">
        <h2> Meet out co-founder </h2>
            <img class="md-img" src="img/easy.jpg">
            <h3> A typical foodie </h3>
    </div>
</div>
</div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>