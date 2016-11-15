function validate()
{

   if( document.getElementById('firstName').value == "" )
	   {
	     alert( "Please provide your first name!" );
	     document.getElementById('firstName').focus() ;
	     return false;
	   }
	   if( document.getElementById('lastName').value == "" )
	   {
	     alert( "Please provide your last name!" );
	     document.getElementById('lastName').focus() ;
	     return false;
	   }
	   if( document.getElementById('college').value == "" )
	   {
	     alert( "Please provide your college name!" );
	     document.getElementById('college').focus() ;
	     return false;
	   }
	    if( document.getElementById('university').value == "" )
	   {
	     alert( "Please provide your university name!" );
	     document.getElementById('university').focus() ;
	     return false;
	   }
	   
	    if( document.getElementById('crUserName').value == "" )
	   {
	     alert( "Please provide your user name!" );
	     document.getElementById('crUserName').focus() ;
	     return false;
	   }
	    if( document.getElementById('pass').value == "" )
	   {
	     alert( "Please provide a password !" );
	     document.getElementById('pass').focus() ;
	     return false;
	   }
    	if( document.getElementById('rePass').value == "" )
   	{	
    	 alert( "Please re enter the password!" );
  	   document.getElementById('rePass').focus() ;
     	return false;
   	}
   	if( document.getElementById('email').value == "" )
  	 {
    	 alert( "Please provide your Email!" );
 	    document.getElementById('email').focus() ;
 	    return false;
 	  }
 	   if( document.getElementById('mobile').value == "" )
	   {
    	 alert( "Please provide a mobile no.!" );
   	  document.getElementById('mobile').focus() ;
    	 return false;
   	}
  	 if( document.getElementById('city').value == "" )
 	  {
     	alert( "Please provide your city!" );
    	 document.getElementById('city').focus() ;
    	 return false;
	   }
	   
	   
	    if( !document.getElementById('terms').checked )
 	  {
     	alert( "You must agree to the terms and conditions!" );
    	
    	 return false;
	   }
	   
	   if(!matchPassword())
	   {
			return false;
	   }
	   if(!validateEmail){
			return false;
	   }
	   if(!phonenumber(document.getElementById("mobile"))){
			return false;
	   }
 	  return( true );	
}

function validateEmail()
{
	 
	   var emailID = document.getElementById("email");
	   atpos = emailID.indexOf("@");
	   dotpos = emailID.lastIndexOf(".");
	   if (atpos < 1 || ( dotpos - atpos < 2 )) 
	   {
	       alert("Please enter correct email ID")
	       document.getElementById("email").focus() ;
	       return false;
	   }
	   return( true );
}

function phonenumber(mobile)  
{  
 	 var phoneno = /^\d{10}$/;  
	  if((mobile.value.match(phoneno)))  
	     {  
	      return true;  
	        }  
	      else  
	        {  
	        alert("Enter a valid phone number");  
			document.getElementById("mobile").focus() ;
	        return false;  
	        }  
}  

function matchPassword()
{
	if(document.getElementById('pass').value != document.getElementById('rePass').value)
	{
	       alert("Password is not matching!")
	       document.getElementById("pass").focus();
	       return false;
	}
	else
	return true;
	
}