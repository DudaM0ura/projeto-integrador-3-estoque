<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('../assets/img/favicon.png')}}">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('../assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('../assets/css/nucleo-svg.css')}}"  rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('../assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('../assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
  <!-- CSS DataTables -->
  <link rel="stylesheet" href="{{asset('//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css')}}">
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="">
        <img src="{{asset('https://w7.pngwing.com/pngs/664/769/png-transparent-colored-pencil-cup-pencil-color-pen.png')}}" class="navbar-brand-img h-120" alt="main_logo">
        <span class="ms-1 font-weight-bold">ESTOQUE PAPELARIA</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fornecedor.index') }}">
            <i class="fa-solid fa-handshake"></i>
            <span class="nav-link-text ms-1">FORNECEDORES</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('produtos.index') }}">
            <i class="fa-solid fa-inbox"></i>
            <span class="nav-link-text ms-1">PRODUTOS</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('movimentacao.index')}}">
            <i class="fa-solid fa-right-left"></i>  
            <span class="nav-link-text ms-1">MOVIMENTAÇÕES</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('estoque.index')}}">
              <i class="fa-solid fa-layer-group"></i>
            <span class="nav-link-text ms-1">ESTOQUE</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('funcionario.index')}}">
            <i class="fa-solid fa-users"></i>
            <span class="nav-link-text ms-1">FUNCIONÁRIOS</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    @yield('content')
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('../assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('../assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/chartjs.min.js') }}"></script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js')}}"></script>
  <script>
    let table = new DataTable('#table');
  </script>
  <!-- Github buttons -->
  <script async defer src="{{asset('https://buttons.github.io/buttons.js')}}"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('../assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
  
</body>

</html>