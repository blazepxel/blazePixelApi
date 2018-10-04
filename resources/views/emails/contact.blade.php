<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" />
  </head>
  <body>

    <div class="section">
      <div class="columns">
        <div class="column">
          Nombre: {{ $name }}
        </div>
        <div class="column">
          Teléfono: {{ $tel }}
        </div>
        <div class="column">
          Asunto: {{ $subject }}
        </div>
        <div class="column">
          Mensaje: {{ $body }}
        </div>
        <div class="column">
          Contacto: {{ $email }}
        </div>
      </div>
    </div>
  </body>
</html>
