<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departement Management</title>
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
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-2">Tambah Departemen</h5>
                        <form id="formTambahDepartement">
                            <div>
                                <label class="form-label" for="nama">Nama:</label>
                                <input class="form-control" type="text" id="nama" name="nama" required>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="card w-100 mt-4">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Departemen</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once '../config/load-env.php';
                        $url = getenv('URL_HOST') . "/get-all-departement";
                        $response = file_get_contents($url);
                        $departments = json_decode($response, true);

                        foreach ($departments as $department) {
                            echo "
                                <tr>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$department['IDDept']}</span></td>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$department['Nama_Dept']}</span></td>
                                    <td class='text-center '>
                                        <a
                                          data-bs-toggle='modal' data-bs-target='#exampleModal-{$department['IDDept']}'
                                        class='p-2 sidebar-link text-dark ' href='./index.html'>
                                            <span>
                                                <i class='ti ti-edit'></i>
                                            </span>
                                        </a>
                                        <a class='p-2 sidebar-link text-dark ' href='javascript:void(0)' onclick='deleteAndReload({$department['IDDept']})'>
                                            <span>
                                                <i class='ti ti-trash'></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            ";
                        echo "
                                <div class='modal fade' id='exampleModal-{$department['IDDept']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                        <form id='formEditDepartement' method='POST'>
                                            <div class='modal-header'>
                                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Edit Data Departement title</h1>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                <div>
                                                    <label class='form-label' for='nama'>Nama:</label>
                                                    <input class='form-control d-none' type='text' id='id-edit' name='nama' value='{$department['IDDept']}' required>
                                                    <input class='form-control' type='text' id='nama-edit' name='nama' value='{$department['Nama_Dept']}' required>
                                                </div>
                                            </div>
                                            <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save changes</button>
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            ";
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
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
  <script>
        document.getElementById('formTambahDepartement').addEventListener('submit', function(event) {
            event.preventDefault();


            const nama = document.getElementById('nama').value;
            const data = {
                nama: nama
            };

            fetch('http://localhost/ipg-traine/add-departement', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Departement berhasil ditambahkan');
                    window.location.reload();
                } else {
                    alert('Gagal menambahkan departement: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim permintaan ke server');
            });
        });
    </script>
    <script>
        function deleteAndReload(idDept) {
            fetch('http://localhost/ipg-traine/delete-departement/' + idDept)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal menghapus departemen');
                    }
                    return response.text();
                })
                .then(data => {
                    alert("berhasil menghapus data")
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    <script>
        document.getElementById('formEditDepartement').addEventListener('submit', function(event) {
            event.preventDefault();

            const nama = document.getElementById('nama-edit').value;
            const idDept = document.getElementById('id-edit').value;

            const data = {
                nama: nama
            };

            fetch(`http://localhost/ipg-traine/edit-departement/${idDept}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Departemen berhasil diubah');
                    window.location.reload();
                } else {
                    alert('Gagal mengubah departemen: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim permintaan ke server');
            });
        });
    </script>

</body>

</html>
