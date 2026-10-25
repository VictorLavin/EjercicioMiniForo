<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?php ContarPalabra($_REQUEST['comentario'])?></td></tr>
<tr><td>Letra + repetida:  </td><td><?php PalabraMasRepetida($_REQUEST['comentario'])?></td></tr>
<tr><td>Palabra + repetida:</td><td>Hola</td></tr>
</table>
</div>

<?php
function ContarPalabra(string $texto, bool $incluirEspacios = true): int
{
    if (!$incluirEspacios) {
        // Quitar espacios, tabuladores y saltos de línea
        $texto = preg_replace('/\s+/u', '', $texto);
    }

    return mb_strlen($texto, 'UTF-8');
}


function PalabraMasRepetida(string $texto, bool $ignorarEspacios = true)
{
    $texto = ($texto);

    if ($ignorarEspacios) {
        $texto = preg_replace('/\s+/u', '', $texto);
    }

    if ($texto === '') {
        return null;
    }

    // Cuenta cuántas veces aparece cada carácter y ordena de mayor a menor
    $conteo = array_count_values(mb_str_split($texto));
    arsort($conteo);

    $caracter = (string) array_key_first($conteo);

    return ['caracter' => $caracter, 'veces' => $conteo[$caracter]];
}

function NuevaOpinion(): string
{
    return '';
}
?>
