$(document).on("click", "#loginbutton", function() {
    let email = $("#email").val();
    let parola = $("#parola").val();
    if (email=="") {
        alert("Please enter email")
    }else if (parola=="") {
        alert("Please enter parola")
    }
    else{
        let obj = {
            email: email,
            parola: parola,
        };
        $.post(BASE_URL + "login/login", obj, function(resp) {
            let fb = JSON.parse(resp);
            if(fb.status=="true"){
                
                window.location.href = BASE_URL + "home";
            }else{
                alert("username and parola not match");
            }


        })
    }
})