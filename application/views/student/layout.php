<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo media_url('argon/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" href="<?php echo media_url('argon/img/favicon.ico'); ?>">
  <title>
    <?php echo $this->config->item('app_name') ?> <?php echo isset($title) ? ' | ' . $title : null; ?>
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
  <style type="text/css">
  	.navbar-vertical.navbar-expand-xs .navbar-collapse{
  		height: auto;
  	}
  	.nav-item:hover
	{
	    cursor: pointer;
	}
	.nav-item.nav-with-child > .nav-item-child
	{
	    list-style: none;
	    height: 0;
	    min-height: 0px;
	    overflow: hidden !important;
	    padding: 0px 1.5rem;
	    transition: all 0.5s ease-in-out;
	    margin-left: 25px;
	}
	.nav-item.nav-with-child.nav-item-expanded > .nav-item-child
	 {
	    /*padding: 0.5rem 1.5rem;*/
	    position: relative;
	    height: auto;
	    min-height: 50px;
	    display: block;
	    transition: all 0.5s ease-in-out;
	}
	.nav-item i.ni {
	    position: relative;
	    top: 2px;
	}
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
	<?php $this->load->view('student/sidebar'); ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo (@$title=='')?'Dashboard':@$title; ?></li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0"><?php echo (@$title=='')?'Dashboard':@$title; ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo ucfirst($this->session->userdata('ufullname_student')); ?></span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo site_url('student/profile') ?>">
                  	Profile
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo site_url('student/auth/logout?location=' . htmlspecialchars($_SERVER['REQUEST_URI'])) ?>">
                  	Sign Out
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <!-- Content Wrapper. Contains page content -->
    <?php isset($main) ? $this->load->view($main) : null; ?>
    <!-- Content Wrapper. Contains page content -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                <?php echo $this->config->item('created') ?>
              </div>
            </div>
            <div class="col-lg-6">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" style="text-align:right;" target="_blank"><?php echo $this->config->item('app_name').' '.$this->config->item('version') ?></a>
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
  <script async defer src="https://buttons.github.io/buttons.js');?>"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo media_url('argon/js/argon-dashboard.min.js?v=2.0.4');?>"></script>
	<script src="<?php echo media_url('argon/js/plugins/jquery-2.2.3.min.js');?>"></script>
  <script type="text/javascript">
  var NavWithChild = (function() {

			// Variables

			var $nav = $('.nav-item.nav-with-child');
			setTimeout(function(){
				$nav.each(function(index, each) {

						$(each).on('click',function(event) {
							if($(each).is('.nav-item-expanded')) {
								$(each).removeClass('nav-item-expanded')

							} else {
									$(each).addClass('nav-item-expanded')
							}
						})
					});
			},300)

})();
  </script>
</body>

</html>