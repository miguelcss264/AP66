<?php
require_once __DIR__ . '/MetodoPago.php';

class Bizum implements MetodoPago
{
    public function procesarPago(float $cantidad): void
    {
        echo "Enviando SMS de confirmación... Bizum de {$cantidad} € aceptado.";
    }
}