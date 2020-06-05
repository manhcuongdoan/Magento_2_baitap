<?php

namespace Magenest\SearchApi\Model;

use Magenest\SearchApi\Api\ConfigurableProductRepositoryInterface;
use Magenest\SearchApi\Api\ProductRepositoryInterface;
use Magenest\SearchApi\Api\Data\ProductInterfaceFactory;
use Magenest\SearchApi\Helper\ProductHelper;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 *
 */
class ProductRepository implements ProductRepositoryInterface
{

    private $productInterfaceFactory;

    private $productHelper;


    private $productRepository;



    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, ProductInterfaceFactory $productInterfaceFactory,
        ProductHelper $productHelper
    )
    {
        $this->productInterfaceFactory = $productInterfaceFactory;
        $this->productHelper = $productHelper;
        $this->productRepository = $productRepository;
    }


    public function getProductById($id)
    {

        $productInterface = $this->productInterfaceFactory->create();
        try {

            $product = $this->productRepository->getById($id);
            $productInterface->setId($product->getId());
            $productInterface->setSku($product->getSku());
            $productInterface->setName($product->getName());
            $productInterface->setDescription($product->getDescription() ? $product->getDescription() : "");
            $productInterface->setPrice($this->productHelper->formatPrice($product->getPrice()));
            $productInterface->setImages($this->productHelper->getProductImagesArray($product));
            return $productInterface;
        } catch (NoSuchEntityException $e) {
            throw NoSuchEntityException::singleField('id', $id);


        }
    }
}

