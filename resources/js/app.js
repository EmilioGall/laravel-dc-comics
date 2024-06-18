import './bootstrap';

// Import link for app.scss
import '~resources/scss/app.scss';

// Import link for Bootstrap(front-end framework)
import * as bootstrap from 'bootstrap';

// Import link for images insertion
import.meta.glob(["../img/**"]);



// Define *constant* for Modal Title Span DOM Element.
const titleSpanElem = document.querySelector(".my-selected-comic");

console.log(titleSpanElem);


// Define *constant* for Comic Array Length.
const comicArrayLength = document.querySelector(".my-counter").getAttribute('data-php-count-variable');

console.log(comicArrayLength);


for (let index = 0; index < comicArrayLength-1; index++) {

    // Define *constant* for Delete Button DOM Element.
    const deleteBtnElem = document.querySelector(`.my-delete-btn${index + 1}`);

    // console.log(deleteBtnElem);


    // Define *variable* for Clicked Comic Title.
    let comicClickedTitle = "";


    // Add Event on *Click* for Delete Button DOM Element.
    deleteBtnElem.addEventListener("click", () => {

        console.log('clicked');

        // Assign to variable (comicClickedTitle) the value of (data-php-title-variable) attribute.
        comicClickedTitle = deleteBtnElem.getAttribute('data-php-title-variable');

        console.log(comicClickedTitle);

        // Print on Delete Modal the value of (comicClickedTitle) variable.
        titleSpanElem.innerHTML = `${comicClickedTitle}`;

    });

};











