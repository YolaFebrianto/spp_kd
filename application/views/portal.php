<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo media_url('argon/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" href="<?php echo media_url('argon/img/favicon.png');?>">
  <title>
    ADMINISTRASI SEKOLAH | Portal
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo media_url('argon/css/nucleo-icons.css');?>" rel="stylesheet" />
  <link href="<?php echo media_url('argon/css/nucleo-svg.css');?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo media_url('argon/css/nucleo-svg.css');?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo media_url('argon/css/argon-dashboard.css?v=2.0.4');?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
	<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
		<span class="mask bg-primary opacity-6"></span>
	</div>
  <main class="main-content position-relative border-radius-lg ">
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-sm-12" style="text-align:center;">
            <div class="h-100">
              <h2><i class="fa fa-graduation-cap"></i> Selamat Datang</h2>
              <p class="lead colr">Sistem Pembayaran Pendidikan Sekolah</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-4 col-md-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header mx-4 p-3 text-center">
              <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                <i class="fas fa-desktop opacity-10"></i>
              </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
              <h6 class="text-center mb-0"></h6>
              <span class="text-xs"></span>
              <hr class="horizontal dark my-3">
              <h5 class="mb-0"><a href="<?php echo site_url('manage') ?>">Login Admin</a></h5>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header mx-4 p-3 text-center">
              <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                <i class="fas fa-credit-card opacity-10"></i>
              </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
              <h6 class="text-center mb-0"></h6>
              <span class="text-xs"></span>
              <hr class="horizontal dark my-3">
              <h5 class="mb-0"><a href="<?php echo site_url('home') ?>">Cek Pembayaran Siswa</a></h5>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header mx-4 p-3 text-center">
              <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                <i class="fas fa-users opacity-10"></i>
              </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
              <h6 class="text-center mb-0"></h6>
              <span class="text-xs"></span>
              <hr class="horizontal dark my-3">
              <h5 class="mb-0"><a href="<?php echo site_url('student') ?>">Login Siswa</a></h5>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo media_url('argon/js/core/popper.min.js');?>"></script>
  <script src="<?php echo media_url('argon/js/core/bootstrap.min.js');?>"></script>
  <script src="<?php echo media_url('argon/js/plugins/perfect-scrollbar.min.js');?>"></script>
  <script src="<?php echo media_url('argon/js/plugins/smooth-scrollbar.min.js');?>"></script>
  <script src="<?php echo media_url('argon/js/plugins/chartjs.min.js');?>"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo media_url('argon/js/argon-dashboard.min.js?v=2.0.4');?>"></script>
</body>

</html>