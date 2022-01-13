//Select element function
const selectElement = function(element){
    return document.querySelector(element)
}
let menuToggler =selectElement('.menu-toggle');
let body =selectElement('body');

menuToggler.addEventListener('click',function(){
    body.classList.toggle('open');
});

// scroll reveal
window.sr =ScrollReveal();

sr.reveal('.animate-left', {
    origin:'left',
    duration:1000,
    distance:'25rem',
    delay:300
});

sr.reveal('.animate-right', {
    origin:'right',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-top', {
    origin:'top',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-bottom', {
    origin:'bottom',
    duration:1000,
    distance:'25rem',
    delay:600
});

//Mail Function
//For Refrence go to smtpjs.com

function sendmail(){
    
    var name = $('#Name').val();
    var email = $('#Sender').val();
    var subject = $('#Subject').val();
    var message = $('#Message').val();


    var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Message: '+message;
    //console.log(name, phone, email, message);

    Email.send({

        SecureToken:"fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
        To: 'sahuharikesh1@gmail.com',
        From: "E-Shop&Service@gmail.com",
        Subject: "New message on contact from "+name,
        Body: Body
    }).then(
        message =>{
            //console.log (message);
            if(message=='OK'){
            alert('Your mail has been send. Thank you for connecting.');
            }
            else{
                console.error (message);
                alert('There is error at sending message. ')
                
            }

        }
    );



}