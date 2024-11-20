alert("Welcome To The Official Release of VerseVibe!");

// Integer
let numberofParticipants = 50;

// String
let workshopTitle = "Coding Best Practices";

// Float
let averageAgeOfParticipants = 25.4;

// Boolean
let isWorkshopOnline = true;

// Function to display output on the browser screen
function displayOutput(message) {
    let outputDiv = document.getElementById('output');
    if (!outputDiv) {
        outputDiv = document.createElement('div');
        outputDiv.id = 'output';
        document.body.appendChild(outputDiv);
    }
    const p = document.createElement('p');
    p.textContent = message;
    outputDiv.appendChild(p);
}

// Displaying output in console and browser screen
console.log(numberofParticipants);
displayOutput(`Number of Participants: ${numberofParticipants}`);

let numberTshirts = 45;
let numberPants = 35;
let totalClothes = numberTshirts + numberPants;
console.log(totalClothes);
displayOutput(`Total Clothes: ${totalClothes}`);

if (numberTshirts >= 40) {
    console.log("We don't need anymore Tshirts");
} else {
    console.log("We do need more Tshirts");
}

let numberSweatshirts = 30;
let numberShorts = 50;

if (numberSweatshirts <= 40 && numberShorts >= 35) {
    console.log("We have enough clothes");
    // displayOutput("We have enough clothes");
}

// Print other variables to the console and browser screen
console.log(workshopTitle);
// displayOutput(`Workshop Title: ${workshopTitle}`);

console.log(averageAgeOfParticipants);
// displayOutput(`Average Age of Participants: ${averageAgeOfParticipants}`);

console.log(isWorkshopOnline);
// displayOutput(`Is Workshop Online: ${isWorkshopOnline}`);