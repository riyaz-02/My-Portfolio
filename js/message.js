function sendEmail(){
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "riyaz.pandas@gmail.com",
        Password : "EA4AC11A84D218B239367D88A4B7B19FF6CA",
        To : 'official@skriyaz.co',
        From : 'riyaz.pandas@gmail.com',
        Subject : "New Entry to Your Portfolio",
        Body : "Name: " + document.getElementById("name").value
        + "<br>Email: " + document.getElementById("email").value
        + "<br>Message: " + document.getElementById("message").value
    }).then(
      message => alert(message)
    );
}