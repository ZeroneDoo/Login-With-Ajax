<?php 
include "koneksi.php";

if(isset($_SESSION['user'])){
    header("Location: tes.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- navigation -->
    <nav class="w-auto h-20 bg-black flex box-border p-5 justify-center align-middle" >
        <img class="h-10" src="assets/logo-minecraft.svg" alt="">
    </nav>

    <!-- container -->
    <div class="content pt-20 w-auto h-screen bg-co bg-cover bg-[url('assets/bg_minecraft.jpg')]" >
        <!-- <img class="" src="assets/bg_minecraft.jpg" alt=""> -->

            <div class=" p-6 w-fit h-fit mx-auto bg-white rounded-md">

                <h1 class="font-bold text-center text-2xl mb-6 ">LOG IN</h1>
                <img src="assets/logo-minecraft.svg" class="h-7 mx-auto mb-4" alt="">
                
                <p class="text-center text-gray-500 mb-8">Still have an account? <span class="text-green-600">Log in here</span> :</p>
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <p>Username or Email</p>
                        <label><input size="53%" class="border w-auto border-gray-300  p-2 rounded-md my-3 mb-7 focus-visible:outline-green-400 focus-visible:shadow shadow-green-300" type="text" class="text-black" name="username" placeholder="user@gmail.com"></label>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <p>Password</p>
                        <label><input size="53%" class="border w-auto border-gray-300  p-2 rounded-md my-3 mb-7 focus-visible:outline-green-400 focus-visible:shadow shadow-green-300" type="password" name="pass" placeholder="***"></label>
                    </tr>
                    <tr>
                        <p><button class="border border-gray-300  p-2 text-base font-bold text-white bg-gray-500 w-full rounded-md mb-5 hover:bg-green-700 transition-all duration-200  hover:shadow-green-300 hover:shadow-md" id="login" onclick="login()">Log in</button></p>

                        <hr class="mb-3 mt-2">

                        <p>No account? <a href="register.php" class="text-green-500 underline ">Sign Up for free</a></p>
                    </tr>
                
                </table>
            </div>
    

    </div>

        
    
</body>
<script>

function login(){
    let username = $("[name = 'username']").val();
    let pass = $("[name = 'pass']").val();

    if(username== ""){
        swal({
            title : "Kosong",
            text : "Username Tidak Boleh Kosong!",
            icon : "error"
        })
    }else if(pass == ""){
        swal({
            title : "Kosong",
            text : "Password Tidak Boleh Kosong!",
            icon : "error"
        })   
    }else if(username == "" && pass == ""){
        swal({
            title : "Kosong",
            text : "Username dan Password Tidak Boleh Kosong!",
            icon : "error"
        })   
    }else{

        $.ajax({
            method : "POST",
            data : "username="+username+"&pass="+pass,
            url : "login.php",
            success : function (ress) {
                if(ress == "data berhasil"){
                    swal({
                        title : "Berhasil",
                        text : "Anda Sudah Berhasil Login",
                        icon : "success"
                    })   

                    setTimeout(()=>{location.href="tes.php"},1500)

                }else{
                    swal({
                        title : "Gagal",
                        text : "Anda Tidak Berhasil Login",
                        icon : "error"
                    })   
                    
                }
                
                
            }
        })
    }
    
}

</script>
<!-- jquery -->
<script src="jquery/jquery.js"></script>
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>