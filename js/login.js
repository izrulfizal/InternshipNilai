document.addEventListener("DOMContentLoaded", function() {
    const card = document.querySelector(".animated-card");

    
    setTimeout(() => {
        card.style.animation = "slideIn 1s ease-out forwards";
    }, 200);  
});
