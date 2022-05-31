let email = document.getElementById("email");
let password = document.getElementById("password");
var id = 0;

document.getElementById("btn").addEventListener('click', echo);
function echo(){
    let data = new FormData();
    data.append('id', id);
    data.append('email', email.value);
    data.append('password', password.value);

    axios({
        method: 'POST',
        url: 'http://localhost/dbex/sign_in.php',
        data: data,
    })
    .then(function (response) {
        if(response.data["response"]){
            document.location = "./html/landing_page.html";
        } else {
            alert("User Not Found");
            location.reload();
        }
    })
}