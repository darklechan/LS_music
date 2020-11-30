@extends('layout')

@section('title', 'Home')

@section('content')

    <h1>Welcome</h1><br>
    <p>Nuestros temas favoritos están en la siguiente tabla</p>
    <br><br>

@endsection

@section('table')
    <div class="table">
        <br>
            <table>
                <tr>
                    <th>SongID</th>
                    <th>Titulo</th>
                    <th>Grupo</th>
                    <th>Album</th>
                    <th>Estilo</th>
                    <th>Puntuacion</th>
                </tr>
                <?php

                    foreach($songs as $song) {
                        echo '<tr>';
                        echo '<td>' .$song->SongID.'</td>';
                        echo '<td>' .$song->Titulo.'</td>';
                        echo '<td>' .$song->Grupo.'</td>';
                        echo '<td>' .$song->Album.'</td>';
                        echo '<td>' .$song->Estilo.'</td>';
                        echo '<td>' .$song->Puntuacion.'</td>';
                    }
                    
                ?>
            </table>
    </div>

@endsection