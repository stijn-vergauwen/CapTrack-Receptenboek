body.addEventListener('mouseover',e => (
    hoverOverEffect(e.target)
    ))
    
    function hoverOverEffect (target) {
        let productContainer = target.closest(".product-container")
        let ul;

        
        if (productContainer != null ) {
            ul = productContainer.querySelector("ul")

            checkIfAlreadyHoverState ();

            productContainer.addEventListener('mouseleave',e => (
                hoverOffEffect(e.target)
                ))
                
            if (!target.matches(".product-container-popular")) {
                productContainer.classList.add("product-container-popular");
                
                if (ul != null) {
                    ul.classList.add("li-invert");
                }
            }
        }        
    }

    function hoverOffEffect (target) {
        let ul;
        
        if (target != null ) {
            
            if (target.matches(".product-container-popular")) {
                ul = target.querySelector("ul")
                target.classList.remove("product-container-popular");
                
                if (ul != null) {
                    ul.classList.remove("li-invert");
                } 
            }
        } 
    }

    function checkIfAlreadyHoverState () {
        productContainerArray = document.querySelectorAll(".product-container")

        productContainerArray.forEach(productContainer => {
            if(productContainer.matches(".product-container-popular")) {
                ul = productContainer.querySelector("ul")
                productContainer.classList.remove("product-container-popular");
                
                if (ul != null) {
                    ul.classList.remove("li-invert");
                } 
            }
        });
    }