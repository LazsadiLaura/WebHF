<?php

namespace CartItemNamespace{
    include"betoltes.php";
}

use ProductNamespace\Product;

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    
    public function getProduct(): Product
    {
        return $this->product;
    }

   
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

  
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    
    public function setQuantity(int $quantity): void
    {
        if($quantity >= 0){
            $this->quantity = $quantity;
        }
        else {
            echo "A mennyiseg nulla!";
        }
    }

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    public function increaseQuantity()
    {
        if($this->quantity < Product::$availableQuantity){
            $this->quantity = $this->quantity+1;
        }
        else{
            echo "Nem lehet a mennyiseget tovabb novelni!";
        }
    }

    public function decreaseQuantity()
    {
        if(($this->quantity  >= 1)
            $this->quantity--;
        else {
            echo "Nem lehet tovabb csokkenteni a mennyiseget!";
        }
    }
}