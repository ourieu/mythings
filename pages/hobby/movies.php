<!DOCTYPE html>
<html lang="en">

<?php
include __DIR__ . "/../../layout/head.php"
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
        width="60">
    </div>

    <!-- Navbar -->
    <?php
    include __DIR__ . "/../../layout/navbar.php"
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include __DIR__ . "/../../layout/sidebar.php"
    ?>

    <!-- Content Wrapper. Contains page content -->
    <main>
      <div class="content-wrapper">
        <h1>🎥 Movie Genre Filter</h1>

        <div class="buttons">
          <button onclick="filterGenre('Action')">Action</button>
          <button onclick="filterGenre('Sad')">Sad</button>
          <button onclick="filterGenre('Thriller')">Thriller</button>
          <button onclick="filterGenre('All')">Show All</button>
        </div>

        <div class="movie-container" id="movieContainer"></div>
      </div>

      <script>
        const movies = [{
            title: 'Everything Everywhere All at Once',
            genre: 'Action',
            rating: 9.0,
            reason: 'Multiverse dan aksi kreatif dengan pesan keluarga.'
          },
          {
            title: 'Inception',
            genre: 'Thriller',
            rating: 9.0,
            reason: 'Alur mimpi dalam mimpi yang penuh ketegangan.'
          },
          {
            title: 'Interstellar',
            genre: 'Thriller',
            rating: 9.3,
            reason: 'Eksplorasi luar angkasa dengan pesan emosional.'
          },
          {
            title: 'Even If This Love Disappears Tonight',
            genre: 'Sad',
            rating: 8.5,
            reason: 'Romansa lembut dengan konsep kehilangan ingatan.'
          },
          {
            title: 'A Silent Voice',
            genre: 'Sad',
            rating: 9.1,
            reason: 'Kisah penebusan dan empati yang sangat menyentuh.'
          },
          {
            title: 'Drawing Closer',
            genre: 'Sad',
            rating: 8.7,
            reason: 'Menghadapi kematian dengan cinta dan harapan.'
          },
          {
            title: 'Your Name',
            genre: 'Sad',
            rating: 9.2,
            reason: 'Cinta lintas waktu yang emosional dan penuh makna.'
          },
          {
            title: 'La La Land',
            genre: 'Sad',
            rating: 8.8,
            reason: 'Cinta dan impian yang tidak selalu berjalan seiring.'
          }
        ];

        const movieContainer = document.getElementById('movieContainer');

        function displayMovies(list) {
          movieContainer.innerHTML = '';
          list.forEach(movie => {
            const div = document.createElement('div');
            div.classList.add('movie');
            div.innerHTML = `
          <div class="title">${movie.title}</div>
          <div class="genre">${movie.genre}</div>
          <div class="rating">⭐ ${movie.rating}</div>
          <div class="reason">${movie.reason}</div>
        `;
            movieContainer.appendChild(div);
          });
        }

        function filterGenre(genre) {
          if (genre === 'All') {
            displayMovies(movies);
          } else {
            const filtered = movies.filter(m => m.genre === genre);
            displayMovies(filtered);
          }
        }

        // tampilkan semua film di awal
        displayMovies(movies);
      </script>

    </main>
    <!-- /.content-wrapper -->
    <?php
    include __DIR__ . "/../../layout/footer.php"
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
  include __DIR__ . "/../../layout/script.php"
  ?>
</body>

</html>