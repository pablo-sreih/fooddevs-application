axios({
    method: 'GET',
    url: 'http://localhost/dbex/get_reviews.php',
}).then(function (json) {
    for (let i=0;i<json.data.length;i++){
        var myDiv=document.getElementById("review-container");
        var divClone = myDiv.cloneNode(true);
        divClone.id="foo";
        divClone.querySelector("#username").innerHTML= json.data[i]["full_name"];
        divClone.querySelector("#review").innerHTML= json.data[i]["comment"];
        document.body.appendChild(divClone);
    }
    document.getElementById("review-container").remove()
    }
)


