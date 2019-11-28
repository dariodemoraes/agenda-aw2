<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>semiSUAP - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset('stylesheets/sb-admin-2.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('stylesheets/css.css') }}">
  <link href="{{ URL::asset('stylesheets/core/main.min.css') }}" rel='stylesheet' />
  <link href="{{ URL::asset('stylesheets/daygrid/main.min.css') }}" rel='stylesheet' />
</head>

@yield('conteudo')

<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ URL::asset('javascripts/sb-admin-2.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('javascripts/javascript.js') }}"></script>

        <script src="{{ URL::asset('javascripts/core/main.min.js') }}"></script>
        <script src="{{ URL::asset('javascripts/interaction/main.min.js') }}"></script>
        <script src="{{ URL::asset('javascripts/daygrid/main.min.js') }}"></script>
        <script src="{{ URL::asset('javascripts/core/locales/pt-br.js') }}"></script>
        <script>

          document.addEventListener('DOMContentLoaded', function () {
              var calendarEl = document.getElementById('calendar');

              var calendar = new FullCalendar.Calendar(calendarEl, {
                  locale: 'pt-br',
                  plugins: ['interaction', 'dayGrid'],
                  //defaultDate: '2019-04-12',
                  editable: true,
                  eventLimit: true,
                  events: '/list_eventos.php',
                  extraParams: function () {
                      return {
                          cachebuster: new Date().valueOf()
                      };
                  }
              });

              calendar.render();
          });
        </script>
</body>

</html>