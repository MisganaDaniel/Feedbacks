function feedback(){
    //alert("Clicked");
    //var requestBody = "{\"first_name\":\"Misgana\",\"last_name\":\"Daniel\",\"email\":\"gjgjhgj\",\"date\":\"\",\"feedback\":\"Awesome\"}"; 

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("LasName").value;
    var email = document.getElementById("Email").value;
    var date = document.getElementById("Date").value;
    var feedback = document.getElementById("Feedback").value;

    var requestBody = "{\"first_name\":\""+ firstName +"\",\"last_name\":\""+ lastName +"\",\"email\":\"" + email +"\",\"date\":\""+ date +"\",\"feedback\":\""+ feedback +"\"}";
    var client=new XMLHttpRequest();
    client.open("post","https://dev105946.service-now.com/api/now/table/x_677549_dengene_0_feedback");

    client.setRequestHeader('Accept','application/json');
    client.setRequestHeader('Content-Type','application/json');

    //Eg. UserName="admin", Password="admin" for this code sample.
    client.setRequestHeader('Authorization', 'Basic '+btoa('admin'+':'+'Al4i2lCSAziO'));

    client.onreadystatechange = function() { 
        if(this.readyState == this.DONE) {
            //document.getElementById("response").innerHTML=this.status + this.response; 
            location.href = 'thankyou.php';
        }
    }; 
    client.send(requestBody);
}