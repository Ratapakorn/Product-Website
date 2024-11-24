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

const itemList = document.getElementById('itemList');

