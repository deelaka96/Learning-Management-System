
function validatelogin(){
    var x = document.forms["login"]["email"].value;
    var y = document.forms["login"]["pwd"].value;
    if (x == null || x == "") {
//     document.getElementById('error').innerHTML="Username cannot be empty";
        if(y == null || y == ""){
            document.getElementById('error').innerHTML="Username and Password cannot be empty";
         return false; 
        }
        else{
             document.getElementById('error').innerHTML="Username cannot be empty";
          return false; 
   
        }
    
    }
    
     else if(y == null || y == ""){
    
         document.getElementById('error').innerHTML="Password cannot be empty";
         
         return false;
     }
        

   
}


   function validatesign(){
       var pwd=document.forms["sign"]["pwd"].value;
       var cpwd=document.forms["sign"]["pwdc"].value;
                if(pwd!==cpwd){
           window.alert("password does not match");
            return false;
            
        }
               

        
       
       
   }


