<?php
require_once __DIR__ . '/src/Bizum.php';
require_once __DIR__ . '/src/Tarjeta.php';
require_once __DIR__ . '/src/BizumSeguro.php';

function finalizarCompra(MetodoPago $sistema, float $total): void
{
    $sistema->procesarPago($total);
}

function finalizarCompraConAviso(MetodoPago $pago, float $total): void
{
    $pago->procesarPago($total);
    if ($pago instanceof Notificable) {
        echo " ";
        $pago->enviarNotificacion("Pago recibido por {$total} €.");
    }
}

// Ejemplos:
echo "== Pago con Bizum ==\n";
finalizarCompra(new Bizum(), 50.0);

echo "\n\n== Pago con Tarjeta ==\n";
finalizarCompra(new Tarjeta(), 120.0);

echo "\n\n== Pago con BizumSeguro (pago + notificación) ==\n";
finalizarCompraConAviso(new BizumSeguro(), 75.0);