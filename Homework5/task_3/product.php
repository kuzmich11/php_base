<?php

class Product {
    private string $title;
    private ?float $price;
    private array $components = [];

    public function sumPrice($components)
    {
        $sum = 0;
        foreach ($components as $key => $value){
            $sum += (float)$value->price;
        }
        return $sum;
    }

    /**
     * @param string $title
     * @param null|float $price
     * @param array $products
     */
    public function __construct(string $title, ?float $price, ...$products)
    {
        $this->title = $title;

        $this->components = $products;
        $this->price = ($price == null ? $this->sumPrice($this->components) : $price);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float|int $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }

}