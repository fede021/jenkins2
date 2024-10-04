<?php

$curl = curl_init();

// Configuración de cURL
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://jenkins.legion.com.ar/job/Actualizar%20Grabr/build?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9',
    CURLOPT_RETURNTRANSFER => true, // Captura la respuesta
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST', // Método POST
    CURLOPT_HTTPHEADER => array(
        'Authorization: Basic YWRtaW46MTExNzA0ZDUxYTU1MzkyZDg5ZGE3NjgyYmMxNTVjYmYwMQ=='
    ),
));

// Ejecutar la solicitud
$response = curl_exec($curl);

// Manejo de errores
if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    // Mostrar respuesta
    echo "Tarea ejecutada correctamente: " . $response;
}

// Cerrar la conexión cURL
curl_close($curl);
?>
