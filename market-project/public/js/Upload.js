function formatPhoneNumber() {
    const Num = document.querySelector(".contents-price");
    const NumValue = Num.value;
    const numbersOnly = NumValue.replace(/[^0-9]/g, "");
    if(numbersOnly == "") {
        Num.value = "";
    }
    else {
        Num.value = Number(numbersOnly).toLocaleString();
    }
}

function setThumbnail(event) {
    let place = document.querySelector(".Upload-img");
    let reader = new FileReader();

    reader.onload = function(event) {
        place.replaceChildren();
        place.style.backgroundColor = "white";
        let img = document.createElement("img");
        let li = document.createElement("li");
        img.setAttribute("src", event.target.result);
        li.appendChild(img);
        place.appendChild(li);
    };

    reader.readAsDataURL(event.target.files[0]);
}