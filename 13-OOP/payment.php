<?php 
    abstract class Payment {
        abstract public function pay(float $amount);

        public function receipt(){
            return "Payment Received";
        }
    }

    class PaystackPayment extends Payment{
        public function pay(float $amount){
            return "Paid N{$amount} via Paystack";
        }
    }

    $payment = new PaystackPayment();
    echo $payment->pay(1000000);


?>