let personAmountText = document.getElementById('personAmount')
let personCounter = document.querySelector('.total-person-container')

let ingredientAmount = document.querySelectorAll('.ingredient-amount')

let personAmount = +personAmountText.innerText;

let previousPresonAmount = 1

ingredientAmount.forEach(changeAmount);

// console.log(personCounter)

function addPersonAmount() {

    console.log(personAmount)
    previousPresonAmount = personAmount

    personAmount++;
    personAmountText.innerText = personAmount

    ingredientAmount.forEach(changeAmount);

}

function changeAmount (item) {

    console.log(+item.innerText)

    let singleAmount = +item.innerText / previousPresonAmount

    if(personAmount <= 1) {
        personAmount = 1
    }

    let newAmount = singleAmount * personAmount
    item.innerText = Math.round(newAmount*100)/100

}

function reducePersonAmount() {

    console.log(personAmount)
    previousPresonAmount = personAmount

    personAmount--;
    personAmountText.innerText = personAmount

    ingredientAmount.forEach(changeAmount);

    for (let i = 0; i < ingredientAmount; i++) {
        changeAmount()
    }

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