<?php
    // Obtener las primeras tres letras del nombre.
    function obtener_iniciales($c) {
        $c = strtoupper($c); 
        return substr($c, 0, 3); 
    }
    // Extraer los últimos dos dígitos del año.
    function obtener_año($f) {
        return substr($f, 2, 2);
    }
    // Obtener el mes y día de nacimiento.
    function obtener_mesdia($f) {
        $f = str_replace('-', '', $f);
        return substr($f, 4, 4);
    }
    // Construir la clave utilizando las funciones anteriores.
    function generar_clave($c, $f) {
        return obtener_iniciales($c). obtener_año($f). obtener_mesdia($f);
    }
    // Eliminar espacios innecesarios y preparar el nombre.
    // tambien agregue que elimine los acentos gg
    function limpiar_nombre($n) {
        $n=str_replace(' ', '', $n);
        $as = [ 'á','é','í','ó','ú'];
        $sin_as = ['a','e','i','o','u'];
        $n=str_replace($as, $sin_as, $n);
        return $n; 
    }
    // Convertir el texto a minúsculas.
    function convertir_minusculas($n) {
        return strtolower($n); 
    }
    // Obtener las primeras dos letras de la institución.
    function obtener_institucion($i) {
        $i=strtolower($i);
        return substr($i, 0, 2);
    }
    // Construir el nombre de usuario.
    function generar_usuario($n, $i, $f) {
        return convertir_minusculas(limpiar_nombre($n)). obtener_institucion($i). obtener_año($f);  
    }
?>