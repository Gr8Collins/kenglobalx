<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="admin">
<div class="admin_dashboard1"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
<path
d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
</svg> <a href="#"> Admin Login Page</a>
<p>
<form action="admin_login_action.php" id="adminform" method="POST" name="frm">
<label for=""><svg xmlns="http://www.w3.org/2000/svg" height="1em"
viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
<path
d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
</svg> Email</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter email" name="Email"></input>
<p>
<label for=""> <svg xmlns="http://www.w3.org/2000/svg" height="1em"
viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
<path
d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
</svg> PASSWORD</label> &nbsp;


    <input type="password" placeholder="Enter Password" id="password" name="Password"><p>
    <input type="checkbox"  onclick="ShowHidePassword()">
    <div id="text">Show Password</div>

<button id="btn" name="submit" type="submit">Login

</form>
</div>




</div>
<style>
   #text{
    color:#000;
    margin-top: -5vh;
    margin-right: -20vh;
    font-weight: 600;
   }
/* Admin css */
.admin {
display: flex;
justify-content: flex-start;
background: #d7d5df;
box-shadow: 0 0 10px 0 rgba(0, 0, 0, 1);
width: 100%;
top: 0;
bottom: 0;
left: 0;
right: 0;
position: absolute;
}

.admin_dashboard1 {
background: #10c7e7;
box-shadow: 0 0 10px 0 rgb(66, 65, 65);
width: 100vh;
height: 50vh;
margin: 150px auto;
cursor: pointer;
padding: 50px;
text-align: center;

}

a {
text-decoration: none;
color: black;
}

a:hover {
background: #478;
color: #FFF;
padding: 10px;
border-radius: 10px;
margin: 10px;

}

#adminform {
text-align: center;
margin-top: 70px;
}

input {
border-radius: 10px;
padding: 10px;
width: 40vh;
outline: none;
border: none;
}

#btn {
background-color: rgb(66, 65, 65);
width: 20vh;
border-radius: 10px;
color: #fff;
padding: 10px;
text-align: center;
outline: none;
border: none;
cursor: pointer;
margin-left: 8vh;
margin-bottom: 8vh;
margin-top: 20px
}
#btn:hover {
background-color:orange;
width: 20vh;
border-radius: 10px;
color: #fff;
padding: 10px;
text-align: center;
outline: none;
border: none;
cursor: pointer;
margin-left: 8vh;
margin-bottom: 8vh;
}
</style>

<script>

	//javscript statement to show/hide password
    function ShowHidePassword(){
        const password = document.getElementById("password");
        const text = document.getElementById("text");

            if (password.type==='password'){
                password.type="text";
                text.innerHTML="Hide password";
    
            }
            else{
                password.type="Password";
                text.innerHTML="Show password";
            }
        } 
	
</script>

</body>

</html>