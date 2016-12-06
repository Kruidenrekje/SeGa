<h1> Alles is nu verwijderd </h1>
Klik om de knop, vervolgens refresh je de pagina

{{ csrf_field() }}
<input type=button onclick="parent.location= "mechanics" value='terug'>


<?php

DB::table('mechanics')-> delete();


return ('/mechanics');
