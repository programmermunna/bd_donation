<?php include('class/function.php'); 
    $obj = new adminBlog();

    if(isset($_POST['admin_login'])){
        $obj->admin_login($_POST);
     }
  
    //  session_start();
      
    // if(isset($_SESSION['adminId'])){
    //   $id = $_SESSION['adminId'];
    //   if(($id)){
    //       header('location:dashboard.php'); 
    //    }
    // }
    session_start();
    if(isset($_SESSION['adminID'])){
        $id = $_SESSION['adminID'];
    }
    
    if(isset($id)){
        header('location:dashboard.php');
    }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="dist/css/styles.css" />
  </head>
  <body class="bg-gray-100">
    <div class="w-11/12 mx-auto sm:w-96 flex_center min-h-screen py-10">
      <div
        class="text-left w-fit h-fit bg-white shadow-lg rounded overflow-hidden"
      >
        <div
          style="
            background-image: url('https://i.postimg.cc/XJ7NvTb6/istockphoto-1221025677-170667a.jpg');
          "
          class="flex_center p-8 bg-gradient-to-r from-yellow-600 to-red-600 text-white"
        >
          <h2>Inventory</h2>
        </div>
        <form action="" class="p-6" method="POST">
          <div class="space-y-5">
            <div>
              <label for="email" class="block" for="email">Email</label>
              <input
                type="email"
                name="email"
                placeholder="Email"
                id="email"
                class="w-full px-4 py-2 mt-2 border rounded focus:outline-none focus:ring-1 focus:ring-blue-600"
              />
              <span class="text-xs tracking-wide text-red-600"
                >Email field is required
              </span>
            </div>

            <div>
              <label for="password" class="block">Password</label>
              <input
                type="password"
                name="pass"
                placeholder="Password"
                id="password"
                class="w-full px-4 py-2 mt-2 border rounded focus:outline-none focus:ring-1 focus:ring-blue-600"
              />
            </div>
            <div class="flex items-baseline justify-between">
              <input type="submit" name="admin_login" class="btn bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white px-5 py-2 focus:ring rounded" value="Login">
              <a href="#"class="text-sm text-blue-600 hover:underline">Forgot password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
