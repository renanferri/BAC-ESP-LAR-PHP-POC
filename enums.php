<?php

// Enums

enum Status: int
{
    case PAID = 1;
    case PENDING = 2;
    case CANCELED = 3;

    public function color(): string
    {
        return match($this) {
            self::PAID => 'green',
            self::PENDING => 'yellow',
            self::CANCELED => 'red'
        };
    }
}

class CheckoutService
{
    public function handle(Status $gatewayStatus)
    {
        //return $gatewayStatus->value;
        return $gatewayStatus->color();
    }   
}

$service = new CheckoutService();
echo $service->handle(Status::PAID);