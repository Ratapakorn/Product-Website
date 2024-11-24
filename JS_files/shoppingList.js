shoppingList = [];

class Product {
    constructor(name, price, description) {
      this._name = name;
      this._price = price;
      this._description = description;
    }

    get name(){
        return this._name;
    }

    get price(){
        return this._price;
    }

    get description(){
        return this._description;
    }
  }

function addItem(productName, productPrice, productDescription){
    const addedProduct = new Product(productName, productPrice, productDescription);
    shoppingList.push(addedProduct)

    const listItem = document.createElement('li');
    listItem.textContent = "Product Name: " + addedProduct.name + " | Product Price: " + addedProduct.price + " | Product Description: " + addedProduct.description ;

    // Add the new item to the list
    itemList.appendChild(listItem);

    // Clear the input field
    inputItem.value = '';
}

function formatPriceToNumber(price) {
    const withoutCurrencyAndDots = price.replace(/[^0-9]/g, ''); //^ is not, and g makes sures its global

    const number = parseFloat(withoutCurrencyAndDots);

    return number;
}

function getTotal(){
    let sum = 0;
    for (const prod of shoppingList){
        sum += formatPriceToNumber(prod.price)
    }
    return sum;
}

function getPrice(){
    const priceDiv = document.getElementById('price');
    let exist = priceDiv.querySelector('p');
    if (exist) {
        // Replace the existing paragraph
        exist.textContent = "Total: " + getTotal() + " Euro, after 19% Tax is around: " + Math.round(getTotalPrice(getTotal()));
    }else{
        const price = document.createElement('p');
        price.textContent = "Total: " + getTotal() + " Euro, after 19% Tax is around: " + Math.round(getTotalPrice(getTotal()));
        priceDiv.appendChild(price);
    }
}

/* Task 4 */
function getTotalPrice(priceWOTax){
    return priceWOTax * 1.19;
}
