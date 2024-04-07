<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 4</title>
    <link rel="shortcut icon" type="image/png" href="./public/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="./public/assets/css/styles.min.css" />

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <!-- <img src="./public/assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">My Profile</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./" aria-expanded="false">
                <span>
                  <i class="ti ti-user-exclamation"></i>
                </span>
                <span class="hide-menu">About Danial</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Penugasan</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./soal-1" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Soal 1</span>
              </a>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./soal-2" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Soal 2</span>
              </a>
              </li>
            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Soal 3</span>
              </div>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./departement" aria-expanded="false">
                <span>
                  <i class="ti ti-art"></i>
                </span>
                <span class="hide-menu">Departement Management</span>
              </a>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./karyawan" aria-expanded="false">
                <span>
                  <i class="ti ti-art"></i>
                </span>
                <span class="hide-menu">Karyawan Management</span>
              </a>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./soal-4" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Soal 4</span>
              </a>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./soal-5" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Soal 5</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./public/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="https://www.linkedin.com/in/danialfarrosmaulana" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-user fs-6"></i>
                            <p class="mb-0 fs-3">My Profile</p>
                            </a>

                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </nav>
            </header>
            <!--  Header End -->

            <!-- CONTENT START HERE -->
            <div class="container-fluid">
                <div id="calendar"></div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Employee Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class='mb-2 col-md-6 col-12'>
                            <label class='form-label' for='nama'>Nama:</label>
                            <input class='form-control' type='text' id='information-nama' name="nama" readonly>
                        </div>
                        <div class='mb-2 col-md-6 col-12'>
                            <label class='form-label' for='nama'>Departemen:</label>
                            <input class='form-control' type='text' id='information-departemen' name="departemen" readonly>
                        </div>
                        <div class='mb-2 col-md-6 col-12'>
                            <label class='form-label' for='nama'>Nomor Telf:</label>
                            <input class='form-control' type='text' id='information-no-telf' readonly>
                        </div>
                        <div class='mb-2 col-md-6 col-12'>
                            <label class='form-label' for='nama'>Tanggal Lahir:</label>
                            <input class='form-control' type='text' id='information-tgl-lahir' readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/assets/js/sidebarmenu.js"></script>
    <script src="./public/assets/js/app.min.js"></script>
    <script src="./public/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./public/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="./public/assets/js/dashboard.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script>
            function getMonthName(month) {
                const months = [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                ];
                return months[month - 1];
            }

            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://localhost/ipg-traine/get-karyawan-birth-day')
                    .then(response => response.json())
                    .then(data => {
                        const events = data.map(item => {
                            const birthday = new Date(item.Tanggal_lahir);
                            const monthName = getMonthName(birthday.getMonth() + 1);

                            return {
                                title: `${item.Nama}'s Birthday`,
                                start: birthday,
                                allDay: true,
                                nama: item.Nama,
                                departement: item.Nama_Dept,
                                telf:item.Telp,
                                tgl_lahir:`${birthday.getDate()} ${monthName} ${birthday.getFullYear()}`
                            };
                        });

                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            events: events,
                            views: {
                                dayGridWeek: {
                                    type: 'dayGridWeek',
                                    buttonText: 'Week'
                                }
                            },
                            eventClick: function(info) {
                                $('#exampleModal').modal('show');
                                document.getElementById('information-nama').value = info.event.extendedProps.nama;
                                document.getElementById('information-no-telf').value = info.event.extendedProps.telf;
                                document.getElementById('information-departemen').value = info.event.extendedProps.departement;
                                document.getElementById('information-tgl-lahir').value = info.event.extendedProps.tgl_lahir;
                            }
                        });
                        calendar.render();
                    })
                    .catch(error => console.error('Error:', error));
            });
        </script>
</body>

</html>
