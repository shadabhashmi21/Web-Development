<!DOCTYPE html>
<html>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><meta name="viewport" content="width=device-width; height=device-height; initial-scale=1; user-scalable=no;">


<script src="js/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="css/font-awesome2.css"/>
<link href='css/googlefont.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" href="css/manualCss/commoncss.css"/>

<script src="js/yltpLanguage.js"></script>
<script src="js/commonNav.js"></script>
<script src="js/configvar.js"></script>

<script src="js/jquery-ui.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="cordova.js"></script>



</head>

<style>


body {
  background: #EEEEEE;
  padding: 0px;
  margin: 0px;
  font-family: 'Varela Round';
}



.form-invalid {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 5;
  display: block;
  margin-top: -25px;
  padding: 7px 9px;
  background: #777777;
  color: #ffffff;
  border-radius: 5px;
  font-weight: bold;
  font-size: 11px;
}
label.form-invalid:after {
  top: 100%;
  right: 10px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: transparent;
  border-top-color: #777777;
  border-width: 6px;
}

.login-form-1 .form-group {
  margin-bottom: 0;
  border-bottom: 2px solid #efefef;
  padding-right: 20px;
  position: relative;
}
.login-form-1 .form-group:last-child {
  border-bottom: 0;
}

.login-group {
  background: #ffffff;
  color: #191818;
  border-radius: 8px;
  padding: 10px 20px;
}
.login-group-checkbox {
  padding: 5px 0;
}

.main-login-form {
  position: relative;
}
.login-form-1 {
  max-width: 300px;
  border-radius: 5px;
  display: inline-block;
}

.login-form-1 .form-control::-webkit-input-placeholder {
  color: #999999;
}

.login-form-1 .form-control:-moz-placeholder,
.login-form-1 .form-control::-moz-placeholder,
.login-form-1 .form-control:-ms-input-placeholder {
  color: #999999;
}
.login-form-1 .form-group {
  margin-bottom: 0;
  border-bottom: 2px solid #efefef;
  padding-right: 20px;
  position: relative;
}
.login-form-1 .form-group:last-child {
  border-bottom: 0;
}
.login-form-1 .form-control {
  border: 0;
  box-shadow: 0 0 0;
  border-radius: 0;
  background: transparent;
  color: #555555;
  padding: 7px 0;
  font-weight: bold;
  height:auto;
}

.login-form-1 .login-button {
  position: absolute;
  right: -25px;
  top: 50%;
  /*background: #ffffff;*/
  color: #999999;
  /*background: rgb(240, 186, 89); */
  background:#4b0082;
  padding: 11px 0;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  border: 5px solid #efefef;
  border-radius: 50%;
  transition: all ease-in-out 500ms;
  content:"\f0c9";
}
.login-form-1 .login-button:hover {
  color: #555555;
  transform: rotate(450deg);
}
.login-form-1 .login-button.clicked {
  color: #555555;
}
.login-form-1 .login-button.clicked:hover {
  transform: none;
}
.login-form-1 .login-button.clicked.success {
  color: #2ecc71;
}
.login-form-1 .login-button.clicked.error {
  color: #e74c3c;
}

.login-form-main-message {
  background: #ffffff;
  color: #999999;
  border-left: 3px solid transparent;
  border-radius: 3px;
  margin-bottom: 8px;
  font-weight: bold;
  height: 0;
  padding: 0 20px 0 17px;
  opacity: 0;
  transition: all ease-in-out 200ms;
}
.login-form-main-message.show {
  height: auto;
  opacity: 1;
  padding: 10px 20px 10px 17px;
}
.login-form-main-message.success {
  border-left-color: #2ecc71;
}
.login-form-main-message.error {
  border-left-color: #e74c3c;
}


.logo {
  padding: 15px 0;
  font-size: 25px;
  color: #211f1f;
  font-weight: bold;
}



#loading{
position: fixed;
height: 100%;
width: 100%;
top: 0;
left: 0;
background: rgba(0, 0, 0, 0.6);
z-index: 9999;
font-size: 20px;
text-align: center;
padding-top: 300px;
color: #fff;
}


    .mainFooter1{
      right: 0;
      height: 60px;
      width: 100%;
      float: left;
      margin-left: auto;
      margin-right: auto;
      background: #FFB530;
      margin: 0px;
      bottom: 0px;
      position: fixed;
      z-index: 5;
    }




  .u4Div1{
      
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;

      -webkit-box-align: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

      -webkit-box-pack: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;

    }


    .imgDiv{
      width: 40px;
      margin-left: auto;
      margin-right: auto;
      height: 30px;
      margin-top: 3px;      
      border-radius: 34px;
    }

    .mainFooter1 p{
          color: white;
    }

					
</style>


<body>


<div id="loadingDiv" style="display:none;">
  <div id="maskLoader"></div>
  <div id="loading"><img src="img/loader.gif" style="width:20px;height:20px;">Loading...</div>
</div> 


<!--header -->
 <div id="headerId" style="text-align: center;background-color:#4b0082" class="mainHeader" style="width: 100%;margin-left:0px;padding:1%">
        <div class="headerName">
          
          <div  id="o-wrapper" class="o-wrapper navClass" style="position: absolute;">
            <div class="c-buttons">
              <img class="c-button" id="back" src="img/nav_back.png" style="width: 16px;height: 16px;">
            </div>
          </div> 
          <div id="changepassword_language">Change Password</div>
        </div>      
      </div>
<!--end-->   

<div class="text-center" style="padding:50px 0;padding:20px;margin-top:70px;">
	
	<div class="login-form-1">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="old_password" class="sr-only" id="oldpassword_language">Old Password</label>
						<input type="password" class="form-control passplace" id="old_password" name="old_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="new_password" class="sr-only" id="newpassword_language">New Password</label>
						<input type="password" class="form-control passplace" id="new_password" name="new_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="new_password_confirm" class="sr-only" id="confirmpassword_language">Confirm Password </label>
						<input type="password" class="form-control passplace" id="new_password_confirm" name="new_password_confirm" placeholder="password">
					</div>			
				<button type="button" class="login-button" onclick="ChngPwd();"><i class="fa fa-chevron-right"></i></button>


			</div>
	</div>
</div>
</div> 



 <div class="mainFooter1">

            <div style="width:100%">
               <div id="home" style="width:25%;float:left;height: 60px;background-color:#4b0082">
                 <div  class="u4Div1 imgDiv">
                   <img style="width: 25px;height: 25px;border-radius: 34px;" src="img/home.png">                 
                 </div> 
                  <p style="text-align: center;margin: 0;" id="Home_Screen_Language">Home</p>
              </div>


               <div id="profile" style="width:25%;float:left;height: 60px;background-color:#4b0082"> 
                  <div  class="u4Div1 imgDiv">
                    <img style="width: 25px;height: 25px;border-radius: 34px;" src="img/profile.png">                 
                 </div> 
                 <p style="text-align: center;margin: 0;" id="Profile_Language">Profile</p>
              </div>

               <div id="noti" onclick="notification()" style="width:25%;float:left;height: 60px;background-color:#4b0082"> 
                    <div  class="u4Div1 imgDiv">
                     <img style="width: 25px;height: 25px;border-radius: 34px;" src="img/notify.png">                 
                 </div> 
                    <p style="text-align: center;margin: 0;" id="Notifications_Language">Notifications</p>
              </div>

               <div id="c-button--slide-left1" onclick="logout();" style="width:25%;float:left;height: 60px;background-color:#4b0082"> 
                  <div  class="u4Div1 imgDiv">
                     <img class="c-button"  style="width: 25px;height: 25px;" src="img/logout.png">                 
                 </div>              
                 <p style="text-align: center;margin: 0;" id="Logout_Language">Logout</p>
              </div>

            </div>
          </div>

          
</body>


<script type="text/javascript">




var pass_dont_match = "Passwords do not match";

var all_fields_mandatory = "All fields are mandatory";

//Document on Ready		
  	$(document).ready(function(){

  


    



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(language_data){
              

              for (var key in language_data) 
              {
                if (language_data.hasOwnProperty(key)) 
                {
                  var item = language_data[key];

                  
                   if(item.key=="Change Password"){$("#changepassword_language").text(item.value);console.log(item.value)}

                   if(item.key=="Old Password"){$("#oldpassword_language").text(item.value);console.log(item.value)}
                   if(item.key=="New Password"){$("#newpassword_language").text(item.value);console.log(item.value)}
                   if(item.key=="Confirm Password"){$("#confirmpassword_language").text(item.value);console.log(item.value)}  
                   if(item.key=="Password"){$(".passplace").attr("placeholder", item.value);console.log(item.value)}

                   if(item.key=="Passwords do not match"){pass_dont_match = item.value;console.log(item.value)}
                   if(item.key=="All fields are mandatory"){all_fields_mandatory = item.value;console.log(item.value)}

                  if(item.key=="Home")
                  {
                    $("#Home_Screen_Language").text(item.value);
                    console.log(item.value)
                  }
                  if(item.key=="My Profile")
                  {
                    $("#Profile_Language").text(item.value);
                    console.log(item.value)
                  }
                  
                  if(item.key=="Notifications")
                    {
                      $("#Notifications_Language").text(item.value);
                      console.log(item.value)
                    } 

                  if(item.key=="Log Out")
                    {
                      $("#Logout_Language").text(item.value);
                      console.log(item.value)
                    }


                }
    }

} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    }); 





    document.addEventListener("deviceready", onDeviceReady, false);


function onDeviceReady(){

  BindNetCheck(); 

}



//Branching
$("#back").click(function(){location.href="dashboard.html";});

//g



//Api 4 change pasword
function ChngPwd(){


  if(internetFlag)
  {

var old_pwd = $('#old_password').val();
var new_pwd = $('#new_password').val();
var confirm_pwd = $('#new_password_confirm').val();



 if(new_pwd!="" && confirm_pwd!="" &&old_pwd!=""){
                  if (new_pwd != confirm_pwd){

                                                customToast(pass_dont_match);

                                             }
                  else{
                        //alert("Passwords match")
                       //Ajax start
                       $.ajax({
                                 type:'GET',
                                 url: server_url+'civicrm/extern/rest.php?json=1&q=civicrm/changepassword',
                                  data:{            
                                        'entity_id':entity_id,
                                        'oldPassword':old_pwd,
                                        'newPassword':new_pwd,
                                        'confirmPassword':confirm_pwd,
                                        'key':key      
                                        },
                                  dataType: "json",
                                  beforeSend:function(){
                                          $("#loadingDiv").show();
                                        },
                                  complete:function(){
                                          $("#loadingDiv").hide();
                                        },
                 
                                  success:function(data) {
                                                         

                                                          customToast(data.msg);

                                                     if(data.success==true){
                                                           //localStorage.clear();
                                                           location.href='dashboard.html';
                                                          } 

                                                        },
                                  error:function() {

                                                      customToast(ajaxerror_msg);

                                                  },


                              });

                  //Ajax end


                      }//else end
                }//if end
    else{

                customToast(all_fields_mandatory);



        }



}
else
{
  customToast(offline_msg);
}



}//function end





function notification(){
            location.href='pushNotification.html';
            
        }


$("#profile").click(function(){location.href="myProfile.html";});

$("#home").click(function(){location.href="dashboard.html";});




/////////////////////////////////////////keyboard///////////////////////////

window.addEventListener('native.keyboardshow', keyboardShowHandler);

function keyboardShowHandler(e){
    console.log("keyboardShowHandler")
   $(".default-fixed-bottom").hide();
   $(".default-btns").hide();
   $(".mainFooter1").hide();
  
}

window.addEventListener('native.keyboardhide', keyboardHideHandler);

function keyboardHideHandler(e){
    console.log("keyboardHideHandler")
    $(".default-fixed-bottom").show();
    $(".default-btns").show();
    $(".mainFooter1").show();
}

//////////////////////////////////////////////////////////////////////////////////////






</script>

</html>
