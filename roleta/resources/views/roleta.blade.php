<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Roleta Gold</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="/css/roleta.css">
  <link rel="stylesheet" href="css/body.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>

</head>

<body>
  <div class="faixa-body fixed"></div>
  <div class="logo-gold fixed">
    <img src="/img/logo-gold.png" alt="logo-gold">
  </div>
  <div class="roulette">
    <div class="spinner"></div>
    <div class="shadow"></div>
    <div class="markers">
      <div class="triangle">

      </div>
    </div>
    <div class="button">
      <span>GIRAR</span>
    </div>
  </div>
  <script src="/js/roleta.js"></script>
  <script src="/js/form.js"></script>
</body>

</html>