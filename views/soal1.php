<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Soal 1</title>
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
            <h5 class="card-title fw-semibold mb-4">RAID Calculator</h5>

            <form id="raidForm">
              <div class="form-group mb-2">
                <label class="form-label" for="numberOfDisk">Input Number of Disk</label>
                <input required type="number" class="form-control" id="numberOfDisk" min="1" max="8">
                <small id="numberOfDiskError" class="form-text text-danger">Please enter a number between 1 and 8.</small>
              </div>
              <div class="form-group mb-2">
                <label class="form-label" for="sizePerDisk">Input Size per Disk</label>
                <select class="form-control" id="sizePerDisk">
                <option selected hidden>Select Super Disk</option>
                  <option value="300">300GB</option>
                  <option value="500">500GB</option>
                  <option value="1000">1TB</option>
                  <option value="2000">2TB</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label class="form-label" for="raidType">Input RAID Type</label>
                <p id="pleasefillError" class="form-text text-center w-full">-- &nbsp Please fill Number of Disk &nbsp --</p>
                <select class="form-control d-none" id="raidType">
                <option selected hidden>Select Raid Type</option>
                  <!-- Placeholder option -->
                </select>
              </div>
              <div class="form-group">
                <small id="errorCalculate" class="form-text text-danger d-none">Please fill in all fields.</small>
              </div>
              <button type="button" class="btn btn-primary mt-2" onclick="calculateRAID()">Calculate</button>
            </form>

            <div id="result" class="d-none mt-3">
              <p id="outputCapacity"></p>
              <p id="outputFaultTolerance"></p>
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
    document.getElementById("numberOfDisk").addEventListener("input", function() {
      var numberOfDisk = parseInt(this.value);
      var errorElement = document.getElementById("numberOfDiskError");
      var raidTypeSelect = document.getElementById("raidType");
      var numberOfDiskErrorElement = document.getElementById("pleasefillError");

      if (isNaN(numberOfDisk) || numberOfDisk < 1 || numberOfDisk > 8) {
        errorElement.classList.remove("d-none");
        numberOfDiskErrorElement.classList.remove("d-none");
        raidTypeSelect.classList.add("d-none");
        raidTypeSelect.innerHTML = "";
        return;
      } else {
        errorElement.classList.add("d-none");
        numberOfDiskErrorElement.classList.add("d-none");
        raidTypeSelect.classList.remove("d-none");
      }

      raidTypeSelect.innerHTML = "";
      if (numberOfDisk >= 2) {
        addOption(raidTypeSelect, "RAID-1", "RAID-1");
      }
      if (numberOfDisk >= 3) {
        addOption(raidTypeSelect, "RAID-5", "RAID-5");
      }
      if (numberOfDisk > 2 && numberOfDisk % 2 === 0) {
        addOption(raidTypeSelect, "RAID-10", "RAID-10");
      }
    });

    function addOption(selectElement, text, value) {
      var option = document.createElement("option");
      option.text = text;
      option.value = value;
      selectElement.add(option);
    }

    function calculateRAID() {
      var numberOfDisk = parseInt(document.getElementById("numberOfDisk").value);
      var sizePerDisk = parseInt(document.getElementById("sizePerDisk").value);
      var raidType = document.getElementById("raidType").value;
      var errorSubmitElement = document.getElementById("errorCalculate");
      var resultElement = document.getElementById("result");

      errorSubmitElement.classList.add("d-none");
      resultElement.classList.add("d-none");
      if (isNaN(numberOfDisk) || sizePerDisk.value === '' || raidType.value === '') {
        errorSubmitElement.classList.remove("d-none");
        return;
      }

      var capacity = 0;
      var faultTolerance = 0;

      if (raidType === "RAID-0") {
        capacity = numberOfDisk * sizePerDisk;
        faultTolerance = 0;
      } else if (raidType === "RAID-1") {
        if (numberOfDisk >= 2) {
          capacity = sizePerDisk;
          faultTolerance = numberOfDisk - 1;
        } else {
          alert("RAID-1 can be selected when Number of Disk >= 2.");
          return;
        }
      } else if (raidType === "RAID-5") {
        if (numberOfDisk >= 3) {
          capacity = (numberOfDisk - 1) * sizePerDisk;
          faultTolerance = 1;
        } else {
          alert("RAID-5 can be selected when Number of Disk >= 3.");
          return;
        }
      } else if (raidType === "RAID-10") {
        if (numberOfDisk > 2 && numberOfDisk % 2 === 0) {
          capacity = (numberOfDisk / 2) * sizePerDisk;
          faultTolerance = 1;
        } else {
          alert("RAID-10 can be selected when Number of Disk > 2 and number is even.");
          return;
        }
      }

      resultElement.classList.remove("d-none");
      document.getElementById("outputCapacity").innerText = "Output Capacity: " + capacity + " GB";
      document.getElementById("outputFaultTolerance").innerText = "Output Fault Tolerance: " + faultTolerance;
    }
  </script>
</body>

</html>
