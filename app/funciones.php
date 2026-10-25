<?php
function UsuarioOK(string $usuario, string $password): bool
{
    // El usuario debe tener 8 caracteres o más
    if (mb_strlen($usuario) < 8) {
        return false;
    }

    // La contraseña debe ser el nombre de usuario al revés
    $passwordEsperada = strrev($usuario);

    return $password === $passwordEsperada;
}

function validarTema(string $texto): string
{
    // 3. Quitamos espacios al principio y al final
    $texto = trim($texto);

    // 4. Eliminamos etiquetas HTML/PHP
    $texto = strip_tags($texto);

    // 5. Convertimos caracteres especiales en entidades HTML (neutraliza < > " ' &)
    return htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function validarComentario(string $texto): string
{
    // 3. Quitamos espacios al principio y al final
    $texto = trim($texto);

    // 4. Eliminamos etiquetas HTML/PHP
    $texto = strip_tags($texto);

    // 5. Convertimos caracteres especiales en entidades HTML (neutraliza < > " ' &)
    return htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

