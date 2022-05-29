let Full_name=document.getElementById("full_name");
let E_mail=document.getElementById("email");
let Password=document.getElementById("password");
var id=0
document.getElementById("btn").addEventListener("click",echo);
function echo(){
    let data = new FormData();
            data.append('id', id);
            data.append('full_name', Full_name.value);
            data.append('email', email.value);
            data.append('password', Password.value);
            axios({
                method: 'POST',
                url: 'http://localhost/dbex/add_user.php',
                data: data,
            })
            .then(function (response) {
                console.log(response);
                location.reload();
                }
            )}

