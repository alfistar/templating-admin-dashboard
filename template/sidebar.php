<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="dashboard.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Sistem Pendataan</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item <?= ($current_page == 'dashboard.php') ? 'menu-open' : '' ?>">
                <a href="dashboard.php" class="nav-link <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item <?= in_array($current_page, ['input_dosen.php','input_mahasiswa.php']) ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Form Input
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="input_dosen.php" class="nav-link <?= ($current_page == 'input_dosen.php') ? 'active' : '' ?>">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Input Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="input_mahasiswa.php" class="nav-link <?= ($current_page == 'input_mahasiswa.php') ? 'active' : '' ?>">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Input Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item <?= in_array($current_page, ['data_dosen.php','data_mahasiswa.php']) ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>
                    Data
                    <span class="nav-badge badge text-bg-secondary me-3">2</span>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_dosen.php" class="nav-link <?= ($current_page == 'data_dosen.php') ? 'active' : '' ?>">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link <?= ($current_page == 'data_mahasiswa.php') ? 'active' : '' ?>">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
              <a
                href="dist/docs/introduction.html"
                class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
              >
                <i class="bi bi-book" aria-hidden="true"></i>
                View documentation
              </a>
            </div>
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>