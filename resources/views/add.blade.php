@extends('layout')

@section('title', 'Add')

@section('content')

    <h1>Añadir una canción</h1>
    <br>
        <div class="addsong">
            <br>
            <form method="GET">
                SongID <input type='textbox' name='SongID'> <br>
                Titulo <input type='textbox' name='Titulo'> <br>
                Grupo <input type='textbox' name='Grupo'> <br>
                Album <input type='textbox' name='Album'> <br>
                Estilo <input type='textbox' name='Estilo'> <br>
                Puntuacion <input type='textbox' name='Puntuacion'> <br>

                <input type='submit' name='submit' value='Añadir canción'> 
            </form>

            <?php
                use App\Models\Song;

                    if (isset($_GET['submit'])) {
                        $song = new Song;
                        $song->SongID = $_GET['SongID'];
                        $song->Titulo = $_GET['Titulo'];
                        $song->Grupo = $_GET['Grupo'];
                        $song->Album = $_GET['Album'];
                        $song->Estilo = $_GET['Estilo'];
                        $song->Puntuacion = $_GET['Puntuacion'];
                        if ($song->save()) {
                            echo 'Se ha insertado la nueva canción ' . $_GET['SongID'] . ' correctamente';
                        } else {
                            echo 'No se ha podido añadir la canción';
                        }
                    }
            ?>
        </div>


@endsection