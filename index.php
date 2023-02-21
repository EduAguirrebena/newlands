<!DOCTYPE html>
<html lang="en">
  
<?php 
require_once('./includes/head.php');
$active = 'dashboard';
?>

  <body>
    <script src="./assets/js/initTheme.js"></script>
    <div id="app">

        <?php require_once('./includes/sidebar.php') ?>

        <div id="main" class="layout-navbar navbar-fixed">
          <header class="mb-0">
            <nav class="navbar navbar-expand navbar-light navbar-top">
              <div class="container-fluid">
                <a href="#" class="burger-btn d-block">
                  <i class="bi bi-justify fs-3"></i>
                </a>

                <!-- boton para desaparecer menu lateral -->
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-lg-0">
                    <!-- numero de landcoins -->
                    <li class="nav-item dropdown me-3">
                      <a
                        class="nav-link "
                        href="#"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      > 
                        Tienes actualmente <i class="fs-4">5 </i> LandCoins
                      </a>
                    </li>
                    <!-- fin landcoin -->
                  </ul>

                  <!-- perfil usuario y desplegable -->
                  <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="user-menu d-flex">
                        <div class="user-name text-end me-2">
                          <h6 class="mb-0 text-gray-600">Eduardo Aguirrebeña</h6>
                          <p class="mb-0 text-sm text-gray-600"></p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                          <div class="avatar avatar-md">
                            <img src="assets/images/faces/2.jpg" />
                          </div>
                        </div>
                      </div>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="dropdownMenuButton"
                      style="min-width: 11rem"
                    >
                      <li>
                        <h6 class="dropdown-header">Bienvenido, Eduardo</h6>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="icon-mid bi bi-person me-2"></i> Mi Perfil
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="icon-mid bi bi-gear me-2"></i> Configuración
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="icon-mid bi bi-wallet me-2"></i> Billetera
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider" />
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                          Cerrar Sesión
                        </a>
                      </li>
                    </ul>
                  </div><!-- fin usuario -->
                  
                </div>
              </div>
            </nav>
          </header>

          <div id="main-content">
            <div class="page-heading">
              <div class="page-title">
                <div class="row mb-2">
                    <div class="col-12 col-md-6 order-md-2 order-last">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                      <nav
                      aria-label="breadcrumb"
                      class="breadcrumb-header float-start float-lg-end"
                      >
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">
                                Layout Vertical Navbar
                            </li> -->
                        </ol>
                      </nav>
                    </div>
                </div>
              </div>
              
              <section class="row">
                <div class="col-12 col-lg-8">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card" style="height: 400px; overflow-y: auto">
                        <div class="card-header">
                          <h5 class="card-title">Proyectos Invertidos</h5>
                        </div>
                        <div class="card-body">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a
                                class="nav-link active"
                                id="home-tab"
                                data-bs-toggle="tab"
                                href="#home"
                                role="tab"
                                aria-controls="home"
                                aria-selected="true"
                              >
                                Proyecto 1
                              </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a
                                class="nav-link"
                                id="profile-tab"
                                data-bs-toggle="tab"
                                href="#profile"
                                role="tab"
                                aria-controls="profile"
                                aria-selected="false"
                              >
                                Proyecto 2
                              </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a
                                class="nav-link"
                                id="contact-tab"
                                data-bs-toggle="tab"
                                href="#contact"
                                role="tab"
                                aria-controls="contact"
                                aria-selected="false"
                              >
                                Proyecto 3
                              </a>
                            </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                            <div
                              class="tab-pane fade show active"
                              id="home"
                              role="tabpanel"
                              aria-labelledby="home-tab"
                            >
                              <table class="table table-hover mb-1">
                                <tr>
                                  <td colspan="3" style="text-align:center">
                                    <a href="#"><i class="fa-solid fa-map-marker-alt padding-right-5 padding-left-5"></i></a>
                                    <a href="#"><i class="fa-solid fa-video"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:10%;">Sendero</td>
                                  <td style="width:70%;">
                                    <div class="progress progress-primary m-4">
                                      <div
                                        class="progress-bar progress-label"
                                        role="progressbar"
                                        style="width: 35%"
                                        aria-valuenow="35"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                  </td>
                                  <td>

                                    <div class="modal-success me-1 mb-1 d-inline-block">
                                      <!-- Button trigger for Success theme modal -->
                                      <button
                                        type="button"
                                        class="btn btn-outline-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#success"
                                      >
                                        Aportar
                                      </button>

                                      <!--Success theme Modal -->
                                      <div
                                        class="modal fade text-left"
                                        id="success"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="myModalLabel110"
                                        aria-hidden="true"
                                      >
                                        <div
                                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                          role="document"
                                        >
                                          <div class="modal-content">
                                            <div class="modal-header bg-success">
                                              <h5
                                                class="modal-title white"
                                                id="myModalLabel110"
                                              >
                                                Aportar en este SubProyecto
                                              </h5>
                                              <button
                                                type="button"
                                                class="close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                              >
                                                <i data-feather="x"></i>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              formulario
                                            </div>
                                            <div class="modal-footer">
                                              <button
                                                type="button"
                                                class="btn btn-light-secondary"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                              </button>

                                              <button
                                                type="button"
                                                class="btn btn-success ml-1"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td>SubProyecto2</td>
                                  <td>
                                    <div class="progress progress-secondary m-4">
                                      <div
                                        class="progress-bar progress-label"
                                        role="progressbar"
                                        style="width: 45%"
                                        aria-valuenow="45"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                  </td>
                                  <td>

                                    <div class="modal-success me-1 mb-1 d-inline-block">
                                      <!-- Button trigger for Success theme modal -->
                                      <button
                                        type="button"
                                        class="btn btn-outline-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#success"
                                      >
                                        Aportar
                                      </button>

                                      <!--Success theme Modal -->
                                      <div
                                        class="modal fade text-left"
                                        id="success"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="myModalLabel110"
                                        aria-hidden="true"
                                      >
                                        <div
                                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                          role="document"
                                        >
                                          <div class="modal-content">
                                            <div class="modal-header bg-success">
                                              <h5
                                                class="modal-title white"
                                                id="myModalLabel110"
                                              >
                                                Aportar en este SubProyecto
                                              </h5>
                                              <button
                                                type="button"
                                                class="close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                              >
                                                <i data-feather="x"></i>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              formulario
                                            </div>
                                            <div class="modal-footer">
                                              <button
                                                type="button"
                                                class="btn btn-light-secondary"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                              </button>

                                              <button
                                                type="button"
                                                class="btn btn-success ml-1"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td>SubProyecto3</td>
                                  <td>
                                    <div class="progress progress-warning m-4">
                                      <div
                                        class="progress-bar progress-label"
                                        role="progressbar"
                                        style="width: 88%"
                                        aria-valuenow="88"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                  </td>
                                  <td>

                                    <div class="modal-success me-1 mb-1 d-inline-block">
                                      <!-- Button trigger for Success theme modal -->
                                      <button
                                        type="button"
                                        class="btn btn-outline-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#success"
                                      >
                                        Aportar
                                      </button>

                                      <!--Success theme Modal -->
                                      <div
                                        class="modal fade text-left"
                                        id="success"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="myModalLabel110"
                                        aria-hidden="true"
                                      >
                                        <div
                                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                          role="document"
                                        >
                                          <div class="modal-content">
                                            <div class="modal-header bg-success">
                                              <h5
                                                class="modal-title white"
                                                id="myModalLabel110"
                                              >
                                                Aportar en este SubProyecto
                                              </h5>
                                              <button
                                                type="button"
                                                class="close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                              >
                                                <i data-feather="x"></i>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              formulario
                                            </div>
                                            <div class="modal-footer">
                                              <button
                                                type="button"
                                                class="btn btn-light-secondary"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                              </button>

                                              <button
                                                type="button"
                                                class="btn btn-success ml-1"
                                                data-bs-dismiss="modal"
                                              >
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

                              </table>
                            </div>

                            <div
                              class="tab-pane fade"
                              id="profile"
                              role="tabpanel"
                              aria-labelledby="profile-tab"
                            >
                            </div>

                            <div
                              class="tab-pane fade"
                              id="contact"
                              role="tabpanel"
                              aria-labelledby="contact-tab"
                            >
                              <p class="mt-2">
                              </p>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5">
                      <div class="card" style="height: 300px; overflow-y: auto">
                        <div class="card-header">
                          <h5 class="card-title">Calculadora</h5>
                        </div>
                        <div class="card-body">
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card" style="height: 300px; overflow-y: auto">
                        <div class="card-header">
                          <h5 class="card-title">Consumos</h5>
                        </div>
                        <div class="card-body">
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card" style="height: 400px; overflow-y: auto">
                        <div class="card-header">
                          <h5 class="card-title">Proyectos Actuales</h5>
                        </div>
                        <div class="card-body">
                          <table class="table table-striped mb-0">
                            <tr>
                              <td style="text-align:center"><a href="#">Proyecto</a</td>
                            </tr>
                            <tr>
                              <td style="text-align:center"><a href="#">Proyecto2</a</td>
                            </tr>
                            <tr>
                              <td style="text-align:center"><a href="#">Proyecto3</a</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card" style="height: 300px; overflow-y: auto">
                        <div class="card-header">
                          <h5 class="card-title">Comunidad</h5>
                        </div>
                        <div class="card-body">
                          <p>Body</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              
              <section class="row">

              </section>
            </div> <!-- end page heading -->
          

          </div> <!-- end main content -->
        
        <?php require_once('./includes/footer.php') ?>
      </div> <!-- end main -->
    </div> <!-- end app -->

    <?php require_once('./includes/footerScriptsJs.php') ?>
    
  </body>
</html>
