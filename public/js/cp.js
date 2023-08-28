let changeBtn = document.getElementById("submit");
let verifyUrl = changeBtn.dataset.verifyUrl;

changeBtn.addEventListener("click", function() {
    window.location.href = verifyUrl;    
});