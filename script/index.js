$(document).ready(function (){
    $('#emailotpdiv').hide();
    $('#formdiv').hide();
});



$('#submitemail').on('click', () => {

    if ($('#email').val() == "") {
    $('.errors').text(" * Enter Email");
    
    } else {
    
    let cedemail = $('#email').val();
    
    $.ajax({
    url: 'helper.php',
    type: 'POST',
    data: {
    
    'cedemail': cedemail,
    'action': 'emailcheck'
    },
    success: (response) => {
    if (response == 1) {
    $('#emailverifydiv').hide();
    $('#emailotpdiv').show();
   
    } else {
    alert("Email Already Exists!!")
    }
    },
    error: (response) => {
    alert(response);
    }
    });
    
    }
    });
    
    //JS for Email OTP
    $('#emailotpsubmit').on('click', () => {
    
    if ($('#emailotp').val() == "") {
    $('.errors').text(" * Enter OTP");
    
    } else {
    
    let cedemailotp = $('#emailotp').val();
    
    $.ajax({
    url: 'helper.php',
    type: 'POST',
    data: {
    
    'cedemailotp': cedemailotp,
    'action': 'emailcheckotp'
    },
    success: (response) => {
    if (response == 1) {
    $('#emailotpdiv').hide();
    $('#formdiv').show();
  
    } else {
    alert("Wrong OTP!!")
    }
    },
    error: (response) => {
    alert(response);
    }
    });
    
    }
    });

$('#submit').on('click', () => {

     
     if ($('#uName').val() == "") {
        $('.errors').text(" * Enter Username");
        
        } else
        
        if ($('#password').val() == "") {
        
        $('.errors').text(" * Enter Password");
        
        }  else
        if ($('#mobilenumber').val() == "") {
        
        $('.errors').text(" * Enter Mobile Number");
        
        } else {
    let cedname = $('#uName').val();
    let cedpassword = $('#password').val();
    let cedmobile = $('#mobilenumber').val();
   
    
    
    
    $.ajax({
    url: 'helper.php',
    type: 'POST',
    data: {
    'cedname': cedname,
    'cedpassword': cedpassword,
    'cedmobile': cedmobile,
    'action': 'insert'
    },
    success: (response) => {
    alert(response);
    },
    error: (response) => {
    console.log(response);
    }
    });
}
    });
    
    
    
    $('#reset').on('click', () => {
    $('#uName').val('');
    $('#password').val('');
    $('#email').val('');
    $('#mobilenumber').val('');
    });

 ////gytytyt
 
 
$('#loginsubmit').on('click', () => {

    if ($('#loginsubmit').val() == "") {
    $('.errors').text(" * ");
    
    } else {
    
    let cedemail = $('#email').val();
    
    $.ajax({
    url: 'helper.php',
    type: 'POST',
    data: {
    
    'cedemail': cedemail,
    'action': 'emailcheck'
    },
    success: (response) => {
    if (response == 1) {
   
    $('#loginsubmit').show();
   
    } else {
    alert("login successfull!!")
    }
    },
    error: (response) => {
    alert(response);
    }
    });
    
    }
    });
    