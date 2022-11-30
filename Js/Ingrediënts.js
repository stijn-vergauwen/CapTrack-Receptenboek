let personAmountText = document.getElementById('personAmount')
let personCounter = document.querySelector('.total-person-container')

let ingredientAmount = document.querySelectorAll('.ingredient-amount')

let personAmount = 1;

// console.log(personCounter)

function addPersonAmount() {

    console.log(personAmount)
    personAmount++;
    personAmountText.innerText = personAmount

}

function reducePersonAmount() {

    console.log(personAmount)
    personAmount--;
    personAmountText.innerText = personAmount 

    if(personAmount <= 1) {
        personAmount = 1
        personAmountText.innerText = personAmount 
    }

}


personCounter.addEventListener('click', e => {
    let target = e.target
    // console.log(e.target)

    if(target.closest('#addPersonAmount')) {
        addPersonAmount()
    }

    if(target.closest('#reducePersonAmount')) {
        reducePersonAmount()
    }


})