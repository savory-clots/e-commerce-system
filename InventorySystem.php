<?php

class InventorySystem {
    private $products;
    private $orders;

    public function __construct() {
        $this->products = [];
        $this->orders = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function createOrder($orderId, $customer, $productIds) {
        $order = new Order($orderId, $customer);
        foreach ($productIds as $productId) {
            $product = $this->findProductById($productId);
            if ($product !== null) {
                $order->addProduct($product);
            }
        }
        $this->orders[] = $order;
    }

    public function displayInventory() {
        echo "Current Inventory:\n";
        foreach ($this->products as $product) {
            $product->displayProductInfo();
        }
    }

    public function displayOrders() {
        echo "Order History:\n";
        foreach ($this->orders as $order) {
            $order->displayOrderInfo();
        }
    }

    private function findProductById($productId) {
        foreach ($this->products as $product) {
            if ($product->getProductId() === $productId) {
                return $product;
            }
        }
        return null;
    }
}
?>
