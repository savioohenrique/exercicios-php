<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        foreach ($this::products as $product) {
            $productArray = explode("-", $product);
            $category = $productArray[0];
            $size = $productArray[1];

            if (!isset($productsList[$category][$size])) 
                $productsList[$category][$size] = 0;

            $productsList[$category][$size] += 1;
        }

        return $productsList;
    }
}