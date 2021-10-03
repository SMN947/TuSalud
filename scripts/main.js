var currentIndex = $('div.active').index() + 1;
var prevIndex = 0;
$("#carouselExampleIndicators").on('slid.bs.carousel', function () {
    currentIndex = $('div.active').index() + 1;
    console.log(currentIndex);
    if(currentIndex == 1 && prevIndex == 3) {
        location.replace(BASEURL+"/login.php");
    }
    if(currentIndex == 3) {
        $("#slideNext").html(comencemos);
    }else {
        $("#slideNext").html(siguiente);
    }
    if(currentIndex != 1) {
        $("#sliderPrev").show();
    }else {
        $("#sliderPrev").hide();
    }
    prevIndex = currentIndex;
});

function signUp() {    
    var name = $("#Regfullname").val();
    var mail = $("#Regemail").val();
    var pass = $("#Regpassword").val();
    if(name != "" && mail != "" && pass != "") {
        localStorage.setItem("name", name)
        localStorage.setItem("mail", mail)
        localStorage.setItem("pass", pass)
        localStorage.setItem("RegMsg", "Account created")
        console.log(BASEURL+"/login.php")
        location.replace(BASEURL+"/login.php")
    }else{
        alert("Llene todo")
    }
}

function login() {
    var mail = $("#Loginemail").val();
    var pass = $("#Loginpassword").val();

    var ls = localStorage.getItem("mail");
    if (ls == null || ls != mail) {
        $("#errorLogin").addClass("errMsg");
        $("#errorLogin").removeClass("okMsg");
        $("#errorLogin").show().val(WrongMail)
    }else{
        var LSpass = localStorage.getItem("pass");
        console.log(mail, ls, pass, LSpass)
        if(LSpass == pass) {
            if(localStorage.getItem("firstForm") != null) {
                location.replace(BASEURL+"/main.php");
            }else{
                location.replace(BASEURL+"/firstForm.php");
            }
            
        }else{
            $("#errorLogin").addClass("errMsg");
            $("#errorLogin").removeClass("okMsg");
            $("#errorLogin").show().val(WrongMail)
        }
    }
}