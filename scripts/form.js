// const ingredientList = document.querySelector("#ingredients > ul");
// const toolsList = document.querySelector("#tools > ul");
// const preparationList = document.querySelector("#preparation > ol");
const buttonContainers = document.querySelectorAll("#.button-container");


function checkButton(e) {
    if (e.target.classlist.contains("plus")){

    } else if (e.target.classlist.contains("minus")){
        
    }
}
// ingredientList.addEventListener();
// toolsList.addEventListener();
// preparationList.addEventListener();
window.addEventListener('load', () => {
    for (const buttonContainer in buttonContainers) {
        buttonContainer.addEventListener('click', (event) => {
            checkButton(event);
        });
    }
})