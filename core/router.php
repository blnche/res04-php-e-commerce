<?php 

if($route === "user-register")
{
    $userController->register();
}
else if($route === "user-login" )
{
     $userController->login();
}
else if($route === "user-logout" )
{
    $userController->logout();
}
else if($route === "" )
{
    
}
else if($route === "")
{
    
}
else if($route === "")
{
    
}
else if($route === "")
{
    
}
else
{
    echo "404 : Page Not Found";
}