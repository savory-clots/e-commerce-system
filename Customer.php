<?php

class Customer {
    private $customerId;
    private $customerName;
    private $email;

    public function __construct($customerId, $customerName, $email) {
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->email = $email;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function displayCustomerInfo() {
        echo "Customer ID: {$this->customerId}\n";
        echo "Customer Name: {$this->customerName}\n";
        echo "Email: {$this->email}\n";
    }
}
?>
