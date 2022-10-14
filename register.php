<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up </title>
</head>
<body>
    <div class="content pt-12 w-auto h-screen bg-co bg-cover bg-[url('assets/bg2.jpg')]" >
        <!-- <img src="assets/logo-minecraft.svg" class="h-9 mx-auto mb-6" alt=""> -->

        <div class="p-6 w-fit h-fit mx-auto rounded-md bg-white">

            <img src="assets/micro.svg" class="h-7 mb-4" alt="">
            <h1 class="font-bold text-2xl mb-6 ">Create Account</h1>


            <table cellspacing = "0" cellpadding="10">
                <tr>
                    <p>Username</p>
                    <label><input type="text" name="username" class="border w-auto border-gray-300  p-2 rounded-md my-3 mb-7 focus-visible:outline-green-400 focus-visible:shadow shadow-green-300" size="53%" placeholder="User" required></label>
                </tr>
                <tr>
                    <p>Email</p>
                    <label><input type="Email" name="email" class="border w-auto border-gray-300  p-2 rounded-md my-3 mb-7 focus-visible:outline-green-400 focus-visible:shadow shadow-green-300" size="53%" placeholder="user@gmail.com" required></label>
                </tr>
                <tr>
                    <p>Password</p>
                    <label><input type="password" class="border w-auto border-gray-300  p-2 rounded-md my-3 mb-7 focus-visible:outline-green-400 focus-visible:shadow shadow-green-300" size="53%" name="pass" placeholder="***" required></label>
                </tr>
                <tr>
                    <p><button class="border border-gray-300  p-2 text-base font-bold text-white bg-gray-500 w-full rounded-md mb-5 hover:bg-green-700 transition-all duration-200  hover:shadow-green-300 hover:shadow-md" id="login" onclick="daftar()">Sign Up</button></p>

                    <hr class="mb-3 mt-2">

                    <p>Alredy have account? <a href="index.php" class="text-green-500 underline ">Log in</a> here</p>
                </tr>
            </table>
        </div>
    </div>
</body>


<script>
    function daftar(){
        let username = $("[name = 'username']").val();
        let email = $("[name = 'email']").val();
        let pass = $("[name = 'pass']").val();

        if(username== ""){
            swal({
                title : "Kosong",
                text : "Username Tidak Boleh Kosong!",
                icon : "error"
            })
        }else if(email == ""){
            swal({
                title : "Kosong",
                text : "Email Tidak Boleh Kosong!",
                icon : "error"
            })   
        
        }else if(pass == ""){
            swal({
                title : "Kosong",
                text : "Password Tidak Boleh Kosong!",
                icon : "error"
            })   
        }else if(username == "" && pass == "" && email == ""){
            swal({
                title : "Kosong",
                text : "Username, Password dan Email Tidak Boleh Kosong!",
                icon : "error"
            })   
        }else{
            $.ajax({
                method : "POST",
                data : "username="+username+"&email="+email+"&pass="+pass,
                url : "daftar.php",
                success : function (ress) {
                    if(ress == "data berhasil"){
                        swal({
                        title : "Berhasil",
                        text : "Akun Anda Berhasil Dibuat",
                        icon : "success"
                    })   

                    setTimeout(()=>{location.href="tes.php"},1500)

                    }else{

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