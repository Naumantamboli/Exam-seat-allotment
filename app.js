let btn = document.querySelector("")
// bottom boxes box subbox h1

// let h1 = document.querySelector(".bottom#boxes.box.subbox.h1")
let h1 = document.querySelector(".bottom#boxes.box.subbox.h1");

let ran = Math.floor(Math.random()*1000)+1;

h1.innerContent = ran;

// // Select all <h1> elements inside elements with class "subbox"
// let h1Elements = document.querySelectorAll(".bottom #boxes .subbox h1");

// // Array to store used numbers
// let usedNumbers = [];

// // Function to generate a unique random number
// function generateUniqueRandomNumber() {
//     let randomNumber;
//     do {
//         // Generate a random number between 1 and 100 (inclusive)
//         randomNumber = Math.floor(Math.random() * 100) + 1;
//     } while (usedNumbers.includes(randomNumber)); // Check if the number is already used
//     usedNumbers.push(randomNumber); // Add the number to the used numbers array
//     return randomNumber;
// }

// // Loop through each <h1> element
// h1Elements.forEach(h1Element => {
//     // Set the text content of the <h1> element to the unique random number
//     h1Element.textContent = generateUniqueRandomNumber();
// });
