<?php

use Support\MessageInterface;
use Support\Payment;

/**
 * Interface Segregations
 * 
 * 
 * 
 */
class User
{
    private string $name;
    private Array $processed_payment;
    
    /**
     * This method formated the configured name 
     */
    public function formatName(): string
    {
        return ucfirst($this->name);
    }

    /**
     * This method send a notification to user
     */
    public function sendReport(MessageInterface $message): void
    {}

    /**
     * This method recive a payment of anothe user, and add to process payments
     */
    public function recivePaymentOfUser(Payment $user_payment): bool
    {
        if(!$user_payment->processPayment())
            return false;

        array_push($this->processed_payment,$user_payment);
        return true;
        
    }

}
