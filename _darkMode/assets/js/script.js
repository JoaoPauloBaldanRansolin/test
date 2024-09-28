// script.js

// Adicionando animação de boas-vindas
document.addEventListener("DOMContentLoaded", () => {
    const title = document.querySelector("h1");
    title.style.opacity = 0;
    title.style.transform = "translateY(-20px)";
    
    setTimeout(() => {
        title.style.transition = "opacity 1s, transform 1s";
        title.style.opacity = 1;
        title.style.transform = "translateY(0)";
    }, 100);
});
