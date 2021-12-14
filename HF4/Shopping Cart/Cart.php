<?php

namespace CartNamespace{
    include "betoltes.php";
}

use CartItemNamespace\CartItem;
use ProductNamespace\Product;

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }


    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {
        if(in_array(Product::$product, $this->items)){
            Product::$product.increaseQuantity();

        }
        else{
            $this->items.add(Product::$product);
        }
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        if(in_array(Product::$product,$this->items)){
            $this->items.remove(Product::$product);
        }
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $quantity=0;
        for($i=0; $i<=$this->items.count();$i++){
          $x=$this->items[$i].CartItem::$quantity;
          $quantity=$quantity+$x;
        }
        return $quantity;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        $sum=0;
        for($i=0; $i<=$this->items.count();$i++){
            $x = $this->items[$i].Product::$price* $this->items[$i].CartItem::$quantity;
            $sum=$sum+$x;
        }
        return $sum;
        
    }
}