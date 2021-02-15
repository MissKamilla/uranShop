require('./bootstrap');


let product = document.getElementsByClassName('product');
let showProduct = document.getElementById('showProduct');


showElem(product,showProduct);

function showElem(elem,btn) {
    for (let i = 0; i < elem.length; i++) {
        if (i>2){
            elem[i].classList.add('hidden');
            btn.classList.remove('hidden');
        }
        btn.addEventListener('click', function() {
            elem[i].classList.remove('hidden');
            btn.remove();
        });
    }
}
console.log(product);
