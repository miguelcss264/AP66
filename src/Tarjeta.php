<?php
require_once __DIR__ . '/MetodoPago.php';

class Tarjeta implements MetodoPago
{
    public function procesarPago(float $cantidad): void
    {
        echo "Conectando con el banco... Cobrando {$cantidad} € de la tarjeta.";
    }
}