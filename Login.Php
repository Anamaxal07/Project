<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Static login</title>
</head>
<body>

<div id="login">
  
<div class="container">
        <div class="card card-container">
        
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
            
                <select name="userSelect"  class="form-control" id="userSelect">
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System Users">System Users</option>
                </select>
                <br>

                <input type="text" name="userName" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
                <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>
             
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="Signin">Sign in</button>
            </form>

            <?php

                $users = array(
                        array(
                            'UserType' => 'Admin',
                            'Username' => 'admin',
                            'Password' => 'Pass1234'

                        ),

                        array(
                            'UserType' => 'Admin',
                            'Username' => 'renmark',
                            'Password' => 'Pogi1234'
                            
                        ),

                        array(
                            'UserType' =>'Content Manager',
                            'Username' => 'pepito',
                            'Password' => 'manaloto'
                            
                        ),

                        array(
                            'UserType' => 'Content Manager',
                            'Username' => 'juan',
                            'Password' => 'delacruz'
                            
                        ),

                        array(
                            'UserType' => 'System User',
                            'Username' => 'pedro',
                            'Password' => 'penduko'
                            
                        )

                      
                );
                if (isset($_POST['Signin'])) {
                    $user = $_POST['userSelect'];
                    $name = $_POST['userName'];
                    $password = $_POST['password'];

                    if ($user === $users[0]['UserType']) {
                        if ($name === $users[0]['Username']){
                            if($password === $users[0]['Password']){
                                echo '<div class="alert alert-success" role="alert">Successfully login</div>';
                            }
                        }
                   else{
                    echo '<div class="alert alert-danger" role="alert">Incorect</div>';
                   }
                }
            }  
            ?>

           
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>