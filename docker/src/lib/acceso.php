<?php
require_once __DIR__ . '/sesion.php';

function requireLogin(): void
{
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header('Location: login.php');
        exit;
    }
}

function usuarioActual(): ?string
{
    return $_SESSION['usuario'] ?? null;
}
