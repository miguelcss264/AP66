<?php
require_once __DIR__ . '/MetodoPago.php';
require_once __DIR__ . '/Notificable.php';

class BizumSeguro implements MetodoPago, Notificable
{
    public function procesarPago(float $cantidad): void
    {
        echo "Bizum seguro: pago de {$cantidad} € aceptado.";
    }

    public function enviarNotificacion(string $mensaje): void
    {
        echo "Notificación: {$mensaje}";
    }
}