<?php

class Cart {
    private ?array $products;
    private float $totalPrice = 0.0;

    public function addProduct(Product $product, int $count)
    {
        $this->products[$product->getTitle()] = $count;
        $this->totalPrice += $product->getPrice()*$count;
    }
    public function removeProduct(Product $product, int $count)
    {
        unset($this->products[$product->getTitle()]);
        $this->totalPrice += $product->getPrice()*$count;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

}