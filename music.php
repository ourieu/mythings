<!DOCTYPE html>
<html lang="en">

<?php
include "layout/head.php"
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <?php
        include "layout/navbar.php"
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include "layout/sidebar.php"
        ?>

        <!-- Content Wrapper. Contains page content -->
        <main>
            <div class="content-wrapper">
                <h1>🎶 Music Genre Filter</h1>

                <div class="buttons">
                    <button onclick="filterGenre('Pop')">Pop</button>
                    <button onclick="filterGenre('Rock')">Rock</button>
                    <button onclick="filterGenre('Lo-fi')">Lo-fi</button>
                    <button onclick="filterGenre('All')">Show All</button>
                </div>

                <div class="music-container" id="musicContainer"></div>
            </div>

            <script>
                const musics = [{
                        title: 'As It Was',
                        artist: 'Harry Styles',
                        genre: 'Pop',
                        reason: 'Lagu pop ringan dengan lirik melankolis tapi catchy.'
                    },
                    {
                        title: 'Blinding Lights',
                        artist: 'The Weeknd',
                        genre: 'Pop',
                        reason: 'Beat synthwave-nya bikin suasana retro dan enerjik.'
                    },
                    {
                        title: 'Bohemian Rhapsody',
                        artist: 'Queen',
                        genre: 'Rock',
                        reason: 'Karya legendaris dengan struktur musik yang unik dan megah.'
                    },
                    {
                        title: 'Smells Like Teen Spirit',
                        artist: 'Nirvana',
                        genre: 'Rock',
                        reason: 'Energi grunge-nya meledak dan penuh emosi.'
                    },
                    {
                        title: 'Cold / Mess',
                        artist: 'Prateek Kuhad',
                        genre: 'Lo-fi',
                        reason: 'Suara lembut dan melodi santai yang cocok buat malam tenang.'
                    },
                    {
                        title: 'Falling Asleep at the Wheel',
                        artist: 'Holly Humberstone',
                        genre: 'Lo-fi',
                        reason: 'Nada-nada dreamy dan nuansa introspektif yang menenangkan.'
                    },
                    {
                        title: 'Someone Like You',
                        artist: 'Adele',
                        genre: 'Pop',
                        reason: 'Vokal emosional dan lirik tentang kehilangan cinta yang kuat.'
                    },
                    {
                        title: 'Hotel California',
                        artist: 'Eagles',
                        genre: 'Rock',
                        reason: 'Gitar klasik dan lirik misterius yang ikonik sepanjang masa.'
                    }
                ];

                const container = document.getElementById('musicContainer');

                function displayMusic(list) {
                    container.innerHTML = '';
                    list.forEach(music => {
                        const card = document.createElement('div');
                        card.classList.add('music-card');
                        card.innerHTML = `
          <div class="title">${music.title}</div>
          <div class="artist">${music.artist}</div>
          <div class="genre">🎧 ${music.genre}</div>
          <div class="reason">${music.reason}</div>
        `;
                        container.appendChild(card);
                    });
                }

                function filterGenre(genre) {
                    if (genre === 'All') {
                        displayMusic(musics);
                    } else {
                        const filtered = musics.filter(music => music.genre === genre);
                        displayMusic(filtered);
                    }
                }

                // tampilkan semua saat awal
                displayMusic(musics);
            </script>

</body>

</html>

</div>
</main>
<!-- /.content-wrapper -->
<?php
include "layout/footer.php"
?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
include "layout/script.php"
?>
</body>

</html>