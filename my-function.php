<?php 

function formatPrice(int $priceInCents): string {
    $priceInEuros = $priceInCents / 100;
    return number_format($priceInEuros, 2, ',', ' ') . ' €';
}



function priceExcludingVAT(float $priceIncludingTax): string {
    $priceExcludingTax = $priceIncludingTax / 1.2;
    return (string) formatPrice($priceExcludingTax);
    
}



function discountedPrice(int $price, int $discount): string {
    $discountedPrice = $price * (1 - $discount / 100);
    return (string) formatPrice($discountedPrice);
}


?>