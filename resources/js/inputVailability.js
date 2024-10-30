let divInput = document.getElementById('inputOpenDataIn');
let inputIn = document.getElementById('datestart');
let inputOut = document.getElementById('dateend');
let inputDataIn = document.getElementById('inputDataIn');
let inputDataOut = document.getElementById('inputDataOut');
//No funciona - (duda) 
divInput.addEventListener('click',() => {
    inputIn.click();
});

inputIn.addEventListener('change', () => {
    inputDataIn.value = inputIn.value;
});
inputOut.addEventListener('change', () => {
    inputDataOut.value = inputOut.value;
});