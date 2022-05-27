const { default: Axios } = require("axios");

require("./bootstrap");
const deleteBtn = document.querySelectorAll(".bomba");
console.log("ok js:)");

deleteBtn.forEach((element) => {
    element.addEventListener("click", ($event) => {
        const answer = confirm("Are you sure?");
        if (!answer) {
            $event.preventDefault();
        }
        // Questo sotto è un'altro metodo utilizzabile
        // const id = $event.target.id;
        // console.log("delete", id);
        // Al posto di inserire axios.get come sono abituata c'è anche questa funzionalità 'delete' dovrei però andare nel file index e prendermi l'id
        // Axios.delete("/comic/" + id);
    });
});

const jumbotron = document.querySelector(".jumbotron");
const img_Jumbotron = document.querySelector("#provaImg");

const arrayCarousel = [
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_AAPI_NewSuper-Man_62881dd01788a0.73066572.jpg",
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_TTGDCSHG_Mayhem_62881e0115fcb7.71538310.jpg",
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_JurassicLeague_62881e6a5754b4.98346794.jpg",
    "/img/jumbotron.jpg",
];

counter = 0;
const setImage = () => {
    document.getElementById("provaImg").src = arrayCarousel[counter];
    counter = (counter + 1) % arrayCarousel.length;
};

setInterval(setImage, 3000);
