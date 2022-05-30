let name1=document.getElementById("restaurant-title");
let review=document.getElementById("text-review");
document.querySelector(".add-review-btn").addEventListener("click",echo);
function echo(){
            url= 'http://localhost/dbex/set_reviews.php'
            url+="?title="+name1.innerText
            url+="&review="+review.value
            axios({
                method: 'POST',
                url:url,

            })
            .then(function (response) {
                console.log(response);
                // location.reload();
                }
            )
    console.log(name1.innerText)
    console.log(review.value)
}

