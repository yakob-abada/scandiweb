<?php

namespace Tests\Service;

use Entity\Product;
use PHPUnit\Framework\TestCase;
use Service\ProductValidator;

class ProductValidatorTest extends TestCase
{
    public function testPropertiesAreBlank()
    {
        $this->assertTrue(true);
        $product = new Product();

        $excpectedErrors = [
            'Sku shouldn\'t be blank',
            'Name shouldn\'t be blank',
            'Price shouldn\'t be blank',
            'ProductType shouldn\'t be blank',
        ];

        $sut = new ProductValidator();
        $isValid = $sut->validate($product);
        $errors = $sut->getErrorMessages();

        $this->assertFalse($isValid);
        $this->assertEquals($excpectedErrors, $errors);
    }

    public function testWrongProductType()
    {
        $this->assertTrue(true);
        $product = new Product();
        $product
            ->setSku('Sku100')
            ->setName('name')
            ->setPrice(100)
            ->setProductType('test');

        $excpectedErrors = [
            'ProductType got wrong value',
        ];

        $sut = new ProductValidator();
        $isValid = $sut->validate($product);
        $errors = $sut->getErrorMessages();

        $this->assertFalse($isValid);
        $this->assertEquals($excpectedErrors, $errors);
    }
}