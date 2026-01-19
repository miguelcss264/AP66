<?php

interface MetodoPago
{
    public function procesarPago(float $cantidad): void;
}