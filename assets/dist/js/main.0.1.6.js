console.log("ey");

/**CREATE ANIMATION TRIGGERS */
const featuredImgs = document.querySelectorAll(`.excerpt-photo:not(.featured-hero-photo)`);
const excerptContainers = document.querySelectorAll(`.excerpt-container:not(.featured-hero-container)`);
const blog = document.querySelector(`body.blog, body.archive`);

if (document.body === blog) {
    console.log(`it works`);
    featuredImgs.forEach(featuredImg => {

        featuredImg.addEventListener(`mouseenter`, () =>{
                featuredImg.classList.add(`pop-it`);
            });
            excerptContainers.forEach(excerptContainer => {
                excerptContainer.addEventListener(`mouseleave`, () =>{
                    featuredImg.classList.remove(`pop-it`);
                });
            });
    
    });
}


