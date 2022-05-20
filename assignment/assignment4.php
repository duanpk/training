<?php

namespace Assignment\Assignment4;

require_once 'utils.php';

interface ICard
{
    public function getCardInfo();
    public function setCardInfo($cardNumber, $cardHolder, $expiryDate, $cvv);
    public function putMoney($amount);
    public function payment($amountToPay, $expiryDate, $cvv);
    public function viewCardInfo();
}

abstract class Card implements ICard
{
    private $cardNumber;
    private $cardHolder;
    private $expiryDate;
    private $cvv;
    private $creditLimit;
    private $currency;

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function __construct()
    {
        $this->setCreditLimit('0');
        $this->setCurrency('USD');
    }

    public function getCardInfo()
    {
        return
            "Card Number: " . $this->getCardNumber() . "\n" .
            "Card Holder: " . $this->getCardHolder() . "\n" .
            "CVV: " . $this->getCvv() . "\n";
    }

    public function setCardInfo($cardNumber, $cardHolder, $expiryDate, $cvv)
    {
        $this->setCardNumber($cardNumber);
        $this->setCardHolder($cardHolder);
        $this->setExpiryDate($expiryDate);
        $this->setCvv($cvv);
    }

    public function putMoney($amount)
    {
        $this->setCreditLimit(
            $this->getCreditLimit() + $amount
        );

        echo "Your card has received a payment: $amount\n" .
            "Current balance: " . $this->getCreditLimit() . " " . $this->getCurrency() . "\n";
    }

    public function payment($amountToPay, $expiryDate, $cvv)
    {
        if ($this->getCreditLimit() < $amountToPay) {
            echo "Transaction declined: $amountToPay.\n" .
                "Reason: Over limit.\n";
            return;
        }

        if (
            strtotime($this->getExpiryDate()) < strtotime($expiryDate) ||
            $this->getCvv() != $cvv
        ) {
            echo "The information you entered is not valid.\n";
            return;
        }

        $this->setCreditLimit(
            $this->getCreditLimit() - $amountToPay
        );

        echo "Your card has been charged: $amountToPay\n" .
            "Current balance: " . $this->getCreditLimit() . " " . $this->getCurrency() . "\n";
    }

    public function viewCardInfo()
    {
        echo "Card Holder: " . $this->getCardHolder() . "\n" .
            "Card Number: " . $this->getCardNumber() . "\n" .
            "Credit Card Limit: " . $this->getCreditLimit() . "\n";
    }
}

class Visa extends Card
{
    use Utils;  // use Utils trait

    public function Usd2Euro($amount)
    {
        echo "Card holder: " . $this->getCardHolder() . "\n" .
            "Card number: " . $this->getCardNumber() . "\n" .
            "Credit Card Limit: " . $this->convert($amount) . " EURO \n";
    }
}

class MasterCard extends Card
{
}

$customerA = new Visa();
$customerA->setCardInfo(
    '1234567890123456',
    'John Doe',
    '01/20',
    '123'
);
// $customerA->viewCardInfo();
$customerA->putMoney(100);
// $customerA->putMoney(100);
// $customerA->putMoney(100);
// $customerA->Usd2Euro(100);