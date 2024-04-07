<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karyawan Management</title>
    <link rel="shortcut icon" type="image/png" href="./public/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="./public/assets/css/styles.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css"/>
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
            <div class="container-fluid mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">Tambah Karyawan</h5>
                    <form id="formTambahKaryawan" class="row">
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="nama">Nama:</label>
                            <input class="form-control" type="text" id="nama" name="nama" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="no-ktp">No KTP:</label>
                            <input class="form-control" type="text" id="no-ktp" name="no-ktp" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="telp">No Telepon:</label>
                            <input class="form-control" type="text" id="telp" name="telp" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="kota-tinggal">Kota Tinggal:</label>
                            <input class="form-control" type="text" id="kota-tinggal" name="kota-tinggal" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="tgl-lahir">Tanggal Lahir:</label>
                            <input class="form-control" type="date" id="tgl-lahir" name="tgl-lahir" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="tgl-masuk">Tanggal Masuk:</label>
                            <input class="form-control" type="date" id="tgl-masuk" name="tgl-masuk" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="dept">Departement:</label>
                            <select class="form-control departementDropdown-1" id="departementDropdown-1" name="department" required>
                                <option selected hidden>Select Departement</option>
                            </select>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                            <label class="form-label" for="kota-penempatan">Kota Penempatan:</label>
                            <input class="form-control" type="text" id="kota-penempatan" name="kota-penempatan" required>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
                <div class="card w-100 mt-4">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Data Karyawan</h5>
                <div class="table-responsive">
                  <table id="example" class="table nowrap text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Karyawan</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Kota Tinggal</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Kota Penempatan</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Masa Kerja</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$url = "http://localhost/ipg-traine/get-all-karyawan";
$response = file_get_contents($url);
$karyawans = json_decode($response, true);
$nomor = 1;

foreach ($karyawans as $karyawan) {
    echo "
                                <tr>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$nomor}</span></td>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$karyawan['Nama']}</span></td>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$karyawan['Kota_Tinggal']}</span></td>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$karyawan['Kota_Penempatan']}</span></td>
                                    <td class='border-bottom-0'><span class='fw-normal'>{$karyawan['Masa_Kerja']}</span></td>
                                    <td class='text-center border-bottom-0'>
                                        <a
                                          data-bs-toggle='modal' data-bs-target='#exampleModal-{$karyawan['IDKaryawan']}'
                                        class='p-2 sidebar-link text-dark ' href='./index.html'>
                                            <span>
                                                <i class='ti ti-edit'></i>
                                            </span>
                                        </a>
                                        <a class='p-2 sidebar-link text-dark' href='javascript:void(0)' onclick='deleteAndReload(\"{$karyawan['IDKaryawan']}\")'>

                                            <span>
                                                <i class='ti ti-trash'></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            ";
    $nomor++;
    echo "
                                <div class='modal fade' id='exampleModal-{$karyawan['IDKaryawan']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                        <form id='formEditKaryawan' method='POST'>
                                            <div class='modal-header'>
                                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Edit Data Karyawan title</h1>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                <div class='row'>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='nama'>Nama:</label>
                                                        <input class='form-control d-none' type='text' id='edit-id-karyawan' name='id-karyawan' value='{$karyawan['IDKaryawan']}' required>
                                                        <input class='form-control' type='text' id='edit-nama' name='nama' value='{$karyawan['Nama']}' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='no-ktp'>No KTP:</label>
                                                        <input class='form-control' type='text' id='edit-no-ktp' name='no-ktp' value='{$karyawan['NoKTP']}' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='telp'>No Telepon:</label>
                                                        <input  value='{$karyawan['Telp']}' class='form-control' type='text' id='edit-telp' name='telp' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='kota-tinggal'>Kota Tinggal:</label>
                                                        <input  value='{$karyawan['Kota_Tinggal']}' class='form-control' type='text' id='edit-kota-tinggal' name='kota-tinggal' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='tgl-lahir'>Tanggal Lahir:</label>
                                                        <input  value='{$karyawan['Tanggal_lahir']}' class='form-control' type='date' id='edit-tgl-lahir' name='tgl-lahir' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='tgl-masuk'>Tanggal Masuk:</label>
                                                        <input  value='{$karyawan['Tanggal_Masuk']}' class='form-control' type='date' id='edit-tgl-masuk' name='tgl-masuk' required>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='dept'>Departement:</label>
                                                        <select class='form-control departementDropdown' id='edit-departementDropdown' name='department' required>
                                                            <option value='{$karyawan['Department']}' selected hidden>{$karyawan['Nama_Dept']}</option>
                                                        </select>
                                                    </div>
                                                    <div class='mb-2 col-md-6 col-12'>
                                                        <label class='form-label' for='kota-penempatan'>Kota Penempatan:</label>
                                                        <input value='{$karyawan['Kota_Penempatan']}' class='form-control' type='text' id='edit-kota-penempatan' name='kota-penempatan' required>
                                                    </div>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready( function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [ {
                extend: 'excelHtml5',
                customize: function( xlsx ) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];

                    $('row c[r^="C"]', sheet).attr( 's', '2' );
                }
            } ]
        } );
    } );
    </script>

    <script>
            fetch('http://localhost/ipg-traine/get-all-departement')
                .then(response => response.json())
                .then(data => {
                    const selectElements = document.querySelectorAll('.departementDropdown');
                    data.forEach(department => {
                        selectElements.forEach(selectElement => {
                            const optionElement = document.createElement('option');
                            optionElement.value = department.IDDept;
                            optionElement.text = department.Nama_Dept;
                            selectElement.appendChild(optionElement);
                        });
                    });
                    const selectElements1 = document.querySelectorAll('.departementDropdown-1');
                    data.forEach(department => {
                        selectElements1.forEach(selectElement => {
                            const optionElement = document.createElement('option');
                            optionElement.value = department.IDDept;
                            optionElement.text = department.Nama_Dept;
                            selectElement.appendChild(optionElement);
                        });
                    });
                })
                .catch(error => console.error('Error:', error));
        </script>
        <script>
                document.getElementById('formTambahKaryawan').addEventListener('submit', function(event) {
                event.preventDefault();

                const form = event.target;
                const formData = new FormData(form);
                const payload = {};
                for (const [key, value] of formData.entries()) {
                    payload[key] = value;
                }

                fetch('http://localhost/ipg-traine/add-karyawan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Karyawan berhasil ditambahkan');
                        form.reset();
                        window.location.reload();
                    } else {
                        alert('Gagal menambahkan karyawan: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim permintaan ke server');
                });
            });

            // Populate departements dropdown when the page loads
            document.addEventListener('DOMContentLoaded', function() {
                populateDepartements();
            });
        </script>
        <script>
            function deleteAndReload(idKaryawan) {
                fetch('http://localhost/ipg-traine/hapus-karyawan/' + idKaryawan)
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
        document.getElementById('formEditKaryawan').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const payload = {};

            for (const [key, value] of formData.entries()) {
                const fieldName = key.startsWith('edit-') ? key.replace('edit-', '') : key;
                payload[fieldName] = value;
            }
            fetch(`http://localhost/ipg-traine/ubah-karyawan/${payload['id-karyawan']}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Data karyawan berhasil diubah');
                    window.location.reload();
                } else {
                    alert('Gagal mengubah data karyawan: ' + data.message);
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
