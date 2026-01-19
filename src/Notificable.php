<?php

interface Notificable
{
    public function enviarNotificacion(string $mensaje): void;
}