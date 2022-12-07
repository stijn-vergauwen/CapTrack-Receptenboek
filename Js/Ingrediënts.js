let personAmountText = document.getElementById('personAmount')
let personCounter = document.querySelector('.total-person-container')

let ingredientAmount = document.querySelectorAll('.ingredient-amount')

let personAmount = +personAmountText.innerText;

let previousPersonAmount = 1

ingredientAmount.forEach(changeAmount);

function ifAmountISNULL(item) {
    return +item.innerText == 0
}   


// console.log(personCounter)

function addPersonAmount() {


    previousPersonAmount = personAmount

    personAmount++;
    personAmountText.innerText = personAmount

    ingredientAmount.forEach(changeAmount);

}

function changeAmount (item) {
    if(ifAmountISNULL(item)) return

    let singleAmount = +item.innerText / previousPersonAmount

    if(personAmount <= 1) {
        personAmount = 1
    }

    if(singleAmount == 0) {
        singleAmount = ''
    }

    let newAmount = singleAmount * personAmount
    item.innerText = Math.round(newAmount*100)/100
    
}

function reducePersonAmount() {

    previousPersonAmount = personAmount

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