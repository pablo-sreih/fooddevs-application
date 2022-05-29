let resto_name=document.getElementById("resto-name");
let category=document.getElementById("category");
let loc=document.getElementById("location");
let pic=document.getElementsByName("pic")[0]
document.getElementById("submit").addEventListener("click",echo);
function echo(){
    // let data = new FormData();
    //         data.append('resto_name', resto_name.value);
    //         data.append('category', category.value);
    //         data.append('loc', loc.value);
        
    //         axios({
    //             method: 'POST',
    //             url: 'http://localhost/dbex/upload.php',
    //             data: data,
    //         })
    //         .then(function (response) {
    //             console.log(response);
    //             // location.reload();
    //             }
    //         )
    console.log(pic.getAttribute("src"))
}