export const item = (product) => {
  let index = product.id.replace(/[^0-9]/g,'');

  if(index < 10) {
    index = `0${index}`;
  }

  return `
  <div class="spinner__face js-active js_product" data-bg="${index % 2 ? '#192f4a' : '#2b2533'}" id="${product.id}">
  <div class="content">
      <div class="content__left">
         <img src="${product.image}" alt="product image">
      </div>
      <div class="content__right">
          <div class="content__main">
              <p class="product__name js_product-name">${product.name}</p>
              <span class="product__price">$${(product.price).toFixed(2)}</span>
              <a href="product-page.html?id=${product.id}" class="btn btn--first">details</a>
              <button class="btn js_add-to-cart">buy</button>
          </div>
         
          <h3 class="content__index">$${(product.price).toFixed(2)}</h3>
      </div>
  </div>
  </div>
  `
}





