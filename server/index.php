<?php


    $result = $_SERVER['REQUEST_URT'];
    $method = $_c['REQUEST_METHOD'];

    echo '<pre>';
        var_dump($_SERVER);
    echo '</pre>';
     die;
{



     if($mrthod === 'GET'){
         include './views/header.php';

     }
   include './views/header.php';

   if($route === '/'){
    include'/views/home.php';
}

    if($route === '/'){
     include'/views/home.php';
}



    if($route === '/login'&& $method === 'GET'){
        include'/views/login.php';
    } 

    
    include './views/footer.php';
}

footer


if ($method === 'POST') {

    if ($route === '/login') {
        $request = json_decode(file_get_contents('php://input'), true);

        valid($request);

        echo 'hello';
    }
}
    
    function valid($data) 
    {
        $errors = [];

        if(!preg_match(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,}$/i, $data['name'])) {
            $errors['name'] ='name is not valid';
        }
        if(!preg_match(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,}$/i)) {
            $errors['email'] = 'email is not  valid';
        }
        if(!preg_match(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,}$/i)) {
            $errors['phone'] = 'phone is not valid' ;
        }if(!preg_match(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,}$/i)) {
            $errors['password'] = 'password is not valid' ;
        }
       
    }
    
//var_dump($data);

if (gettype($data['subscribe']) ==== 'boolean') {
    echo '---------subscribe valid';
}

 
