const visible = document.getElementById('visible'),
      password = document.getElementById('password'),
      email = document.getElementById("username");
      

      visible.addEventListener("click", function(){
        if(password.type === "password") {
          password.type = "text";
        }else {
          password.type = "password";
        }
      });

      