const form = document.querySelector('.form form'),
    submitbtn = form.querySelector('.submit-button'),
    errortext = form.querySelector('.error-text');

form.onsubmit = (e) => {
    e.preventDefault();
};

submitbtn.onclick = () => {
    // start ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "https://hollysaga.shop/php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.responseText;
                if (data.includes("Registration successful")) {
                    location.href = "verify.php";
                } else {
                    errortext.textContent = data;
                    errortext.style.display = "block";
                }
            }
        }
    };
    // send data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData);
};
