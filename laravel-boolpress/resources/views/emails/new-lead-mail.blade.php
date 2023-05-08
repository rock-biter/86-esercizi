<h1>
  Ciao Admin!
</h1>

<p>
  Hai ricevuto una nuova richiesta di contatto:<br>
  Nome: {{ $lead->name }} <br>
  Email: {{ $lead->email }} <br>
  message: <br>
  {{ $lead->message }}
</p>

<footer>
  il team di {{ env('APP_NAME') }}.
</footer>