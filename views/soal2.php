<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 2</title>
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
                        <h5 class="card-title fw-semibold mb-2">Gambar Belah Ketupat</h5>
                        <form id="belah-ketupat-form">
                            <div class="form-group mb-2">
                                <label class="form-label" for="input-number">Masukkan angka:</label>
                                <input type="number" class="form-control" id="input-number" name="input-number" min="3" value="3" required>
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label" for="direction-type">Direction Type </label>
                                <select class="form-control" id="direction-type" required>
                                    <option value="-" selected hidden>Select Direction Type</option>
                                    <option value="up-down">Up Down</option>
                                    <option value="down-up">Down Up</option>
                                    <option value="left-right">Left Right</option>
                                    <option value="right-left">Right Left</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label" for="value-type">Value</label>
                                <select class="form-control" id="value-type" required>
                                    <option value="-" selected hidden>Select Value</option>
                                    <option value="alphabet">Alphabet</option>
                                    <option value="angka-genap">Angka Genap</option>
                                    <option value="angka-ganjil">Angka Ganjil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <small id="errorInput" class="form-text text-danger d-none">Please fill in all fields.</small>
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Generate</button>
                        </form>
                    </div>
                </div>
                <div id="result" class="result"></div>
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
            document.getElementById("belah-ketupat-form").addEventListener("submit", function (event) {
                event.preventDefault();
                const inputNumber = document.getElementById("input-number").value;
                const directionType = document.getElementById("direction-type").value;
                const valueType = document.getElementById("value-type").value;
                var errorSubmitElement = document.getElementById("errorInput");

                errorSubmitElement.classList.add("d-none");
                if (isNaN(inputNumber) || directionType == '-' || valueType == '-') {
                    errorSubmitElement.classList.remove("d-none");
                    return;
                }
                generateBelahKetupat(inputNumber, valueType, directionType);
            });

            function generateBelahKetupat(n, type, flow) {
                let l = 1;
                n = n - 1;
                let result = "";

                for (let i = 0; i < n; i++) {
                    if (i === 0) {
                        result += " ".repeat(n - i) + getNumbering(i, type, flow, n) + "\n";
                        l += 2;
                        continue;
                    }
                    result += " ".repeat(n - i) + getNumbering(i, type, flow, n) + " ".repeat(l - 2) + getNumbering(i, type, flow, n, 2) + "\n";
                    l += 2;

                }

                for (let i = n; i >= 0; i--) {
                    if (i === 0) {
                        result += " ".repeat(n - i) + getNumbering((2*n-i), type, flow, n) + "\n";
                        l -= 2;
                        continue;
                    }
                    result += " ".repeat(n - i) + getNumbering((2*n-i), type, flow, n) + " ".repeat(l - 2) + getNumbering((2*n-i), type, flow, n, 2) + "\n";
                    l -= 2;
                }

                // RESULT OPEN IN NEW PAGE
                openInNewWindow(result);

                // RESULT CAN BE DOWNLOAD
                // download("belah_ketupat.txt", result);
            }

            function getNumbering(i, type, flow, dimension, set) {
                if (flow === 'up-down'){
                    return mappingChar(i, type);
                }
                if (flow === 'down-up'){
                    return mappingChar(dimension - i + dimension, type);
                }
                if (flow === 'left-right'){
                    if(set === 2){
                            if (i > dimension) {
                                return mappingChar(3 * dimension - i , type);
                            }
                            return mappingChar(dimension + i, type);
                        }
                        if (i > dimension) {
                            return mappingChar(i - dimension, type);
                        }
                        return mappingChar(dimension - i, type);
                }
                if (flow === 'right-left'){
                    if(set === 2){
                            if (i > dimension) {
                                return mappingChar(i - dimension, type);
                            }
                            return mappingChar(dimension - i, type);
                        }
                        if (i > dimension) {
                            return mappingChar(3 * dimension - i, type)
                        }
                        return mappingChar(2 * dimension + (i- dimension), type)
                }
            }

            function mappingChar(n, type){
                if (type === 'alphabet'){
                    return String.fromCharCode('A'.charCodeAt(0) + (n % 26))
                }
                if (type === 'angka-genap'){
                    n = (n +1) * 2;
                    if (n % 8 == 0){
                        return 8;
                    }
                    return n % 8;
                }
                if (type === 'angka-ganjil'){
                    return (n * 2 + 1) % 10
                }
            }

            function openInNewWindow(content) {
                var newWindow = window.open();
                newWindow.document.write("<pre>" + content + "</pre>");
            }

            function download(filename, text) {
                var element = document.createElement('a');
                element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
                element.setAttribute('download', filename);

                element.style.display = 'none';
                document.body.appendChild(element);

                element.click();

                document.body.removeChild(element);
            }
        </script>
    </div>
</body>

</html>
