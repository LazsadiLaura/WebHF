<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct(int $id, string $title, float $price, int $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        if ($price > 0)
            $this->price = $price;
        else echo "Az ar nem lehet negativ!";
    }

    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }

    public function setAvailableQuantity(int $availableQuantity): void
    {
        if ($availableQuantity >= 0) {
            $this->availableQuantity = $availableQuantity;
        } else {
            echo "Nem lehet kisebb mint nulla!";
        }
    }


    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        if(in_array(Product::$product, Cart::$items)){
            Product::$product.increaseQuantity();
        }
        else{
            Cart::$items.add(Product::$product);
        }
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        if(in_array(Product::$product, Cart::$items)){
            Cart::$items.remove(Product::$product);
        }
    }
}