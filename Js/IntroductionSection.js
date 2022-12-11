let body = document.querySelector("body")

body.addEventListener('click',e => (
    findIntroBlock (e.target)
))

function findIntroBlock (target) {
    let introBlock = target.closest(".introduction-block") 

    if (target.matches('button')) {
        if (introBlock != null) {

            let switchableBlock = introBlock.querySelectorAll('.switchable-block')
            switchableBlock.forEach(element => {
                switchIntroductionWidth(element)
                changeMargin(element)
                descriptionInvis (element)
                changeBtnLoc (element)
                toggleControls(element)
            });
        }
    }
}


function switchIntroductionWidth (target) {
    let btn = target.querySelector('button')
    
    if (target.matches(".width-70")) {
        target.classList.remove("width-70");
        target.classList.add("width-30");

    } else {
        target.classList.remove("width-30");
        target.classList.add("width-70");

    }

    if (btn != null) {
        btn.innerText = changeArrowDirection(btn)
    }
}

function changeMargin(target) {
    
    if (target.matches(".bigpadding")) {
        target.classList.remove("bigpadding");
        target.classList.add("smallpadding");
        
    } else if (target.matches(".smallpadding")) {
        target.classList.remove("smallpadding");
        target.classList.add("bigpadding");
    }
}

function descriptionInvis (target) {
    let pTag = target.querySelector('p')
    let h3Tag = target.querySelector('h3')

    if (pTag != null) {

        if(pTag.matches(".displayAll")) {
            h3Tag.classList.toggle("set-center")
            pTag.classList.remove("displayAll");
            pTag.classList.add("displayNone");
            
        } else {
            h3Tag.classList.toggle("set-center")
            pTag.classList.add("displayAll");
            pTag.classList.remove("displayNone");
    
        }
    } 
}

function changeBtnLoc (target) {
    let btn = target.querySelector('button')

    if(btn != null) {

        if (btn.matches(".posright1")) {
            btn.classList.add("posright2");
            btn.classList.remove("posright1");
    
        } else if (btn.matches(".posright2")){
            btn.classList.add("posright1");
            btn.classList.remove("posright2");
    
        }
    
        if (btn.matches(".posleft1")) {
            btn.classList.add("posleft2");
            btn.classList.remove("posleft1");
    
        } else if (btn.matches(".posleft2")){
            btn.classList.add("posleft1");
            btn.classList.remove("posleft2");
    
        }
    }
}

function toggleControls(target) {
    let video = target.querySelector('video')
    
    if(video != null) {
        if (video.hasAttribute("controls")) {
           video.removeAttribute("controls")   
        } else {
           video.setAttribute("controls","controls")   
        }
        
    }
}

function changeArrowDirection(btn) {

    if (btn.innerText == "←") {
        return "→"
    } else {
        return "←"
    }
}
