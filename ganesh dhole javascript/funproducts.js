var Product = function (name,place){
    this.name = name;
    this.place = place;
    this.greet = function(){
        console.log('welcome',this.name,'from',this.place);

    }
}
var product = new Product('apple','usa');
product.greet();
var product1 = new Product('apple','usa');
product1.greet();

Product.prototype.discountedPrice = 1000;
Product.prototype.showDiscount = function(){
    console.log('Discount is ',this.discountedPrice);

}
console.log(product.discountedPrice)
product.showDiscount();
