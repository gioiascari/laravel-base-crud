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
