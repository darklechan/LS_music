@extends('layout')

@section('title', 'Update')

@section('content')

    <h1>Modifica o borra una canción</h1>
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
                <th>Borrar</th>
                <th>Modificar</th>
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
                    echo '<td><form method="get"><input type="submit" name="submit" value="Delete"></form>' . '</td>';
                    echo '<td>'. '</td>';
               
                }
            ?>

                

        </table>
</div>

@endsection