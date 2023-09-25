
document.querySelectorAll('.product_item').forEach(item => {
    item.addEventListener('click', (e) => {
        console.log(e.target.dataset.columns);
})})



document.querySelector('.toBusket').addEventListener('click', () => {

})

