let products
let productsCheckboxes;
let cart;

function populateCart(productsInCart)
{
    cart.innerHTML = '';
    productsInCart.forEach(product =>
    {
        const li = document.createElement('li');
        li.innerText = product.name;
        cart.appendChild(li);
        const hiddenFormValue = document.createElement('input');
        // met chaque product_id dans le meme tableau itérable coté back dans $_POST['products_ids']
        hiddenFormValue.setAttribute('type', 'hidden');
        hiddenFormValue.setAttribute('name', 'products_ids[]');
        hiddenFormValue.setAttribute('value', product.id);
        cart.appendChild(hiddenFormValue);
    });
}



window.addEventListener('DOMContentLoaded', () =>
{
    products = document.getElementById('products');
    productsCheckboxes = products.querySelectorAll('input[type="checkbox"]');
    cart = document.getElementById('cart');
    let productsInCart = [];
    const createOrderForm = document.querySelector('form#order-create');

    productsCheckboxes.forEach(productCheck =>
    {
        productCheck.addEventListener('change', (e) =>
        {
            if (e.target.checked)
            {
                const product = {
                    name: e.target.getAttribute('name'),
                    id: e.target.getAttribute('id')
                };
                productsInCart.push(product);
                console.log(productsInCart)
                populateCart(productsInCart);
            }
            else
            {
                const product = {
                    name: e.target.getAttribute('name'),
                    id: e.target.getAttribute('id')
                };
                let index = productsInCart.map(x => x.id).indexOf(product.id);
                console.log(index)
                productsInCart.splice(index, 1);
                populateCart(productsInCart);
            }
        })
    })

})
