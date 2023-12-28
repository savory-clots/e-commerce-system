<?php

// Include class files
include 'Product.php';
include 'Customer.php';
include 'Order.php';
include 'InventorySystem.php';

// Create the inventory system
$inventorySystem = new InventorySystem();

// Add products to the inventory
$inventorySystem->addProduct(new Product(1, "Laptop", 999.99));
$inventorySystem->addProduct(new Product(2, "Smartphone", 499.99));

// Create customers
$customer1 = new Customer(101, "Alice", "alice@example.com");
$customer2 = new Customer(102, "Bob", "bob@example.com");

// Create orders
$inventorySystem->createOrder(201, $customer1, [1, 2]);
$inventorySystem->createOrder(202, $customer2, [2]);

// Display the updated inventory and order history
$inventorySystem->displayInventory();
$inventorySystem->displayOrders();
?>
