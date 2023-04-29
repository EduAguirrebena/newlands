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
        <?php require_once('./includes/topbar.php') ?>

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
                          <h5 class="card-title">Mis Proyectos</h5>
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

                                <div class="row mt-3 mb-3"
                                style="
                                position: relative;
                                z-index: 2;
                                height: 100%;
                                color:black;
                                font-weight: bold;">

                                    <div class="row" 
                                    style="
                                    position: absolute;
                                    z-index: -1;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    background: url('./assets/images/img/sendero.jpg') center center;
                                    opacity: .5;
                                    border: 1px groove black;
                                    margin: auto;">
                                    </div>
                                    <div class="col-3 mt-4" 
                                    style="text-align: center;">
                                        <p class="m-1">Sendero</p>
                                    </div>
                                    <div class="col-4 mt-4" style="text-align: center;">
                                        <div class="progress progress-primary m-2">
                                            <div
                                                class="progress-bar progress-label"
                                                role="progressbar"
                                                style="width: 35%"
                                                aria-valuenow="35"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>5 LandCoin Invertidos</p>
                                    </div>
                                    <div class="col-1 mt-2  mb-2">
                                        <div class="row mb-1">
                                            <button type="button" class="btn btn-success">+1</button>
                                        </div>
                                        <div class="row">
                                            <button type="button" class="btn btn-danger">-1</button>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>Aporta <br>+ 2 Co2</p>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3"
                                style="
                                position: relative;
                                z-index: 2;
                                height: 100%;
                                color:black;
                                font-weight: bold;">

                                    <div class="row" 
                                    style="
                                    position: absolute;
                                    z-index: -1;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    background: url(https://www.dufferincounty.ca/sites/default/files/styles/banner_1600_x_500_/public/2019-01/forest.jpg?itok=ZwbHgPD7) center center;
                                    opacity: .5;
                                    border: 1px groove black;
                                    margin: auto;">
                                    </div>
                                    <div class="col-3 mt-4" 
                                    style="text-align: center;">
                                        <p class="m-1">SubProyecto 2</p>
                                    </div>
                                    <div class="col-4 mt-4">
                                        <div class="progress progress-secondary m-2">
                                            <div
                                                class="progress-bar progress-label"
                                                role="progressbar"
                                                style="width: 45%"
                                                aria-valuenow="45"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>4 LandCoin Invertidos</p>
                                    </div>
                                    <div class="col-1 mt-2  mb-2">
                                        <div class="row mb-1">
                                            <button type="button" class="btn btn-success">+1</button>
                                        </div>
                                        <div class="row">
                                            <button type="button" class="btn btn-danger">-1</button>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>Aporta <br>+ 1 Co2</p>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3"
                                style="
                                position: relative;
                                z-index: 2;
                                height: 100%;
                                color:black;
                                font-weight: bold;">

                                    <div class="row" 
                                    style="
                                    position: absolute;
                                    z-index: -1;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    background: url(https://media.springernature.com/m685/springer-static/image/art%3A10.1038%2Fs41477-019-0374-3/MediaObjects/41477_2019_374_Figa_HTML.jpg) center ;
                                    opacity: .5;
                                    border: 1px groove black;
                                    margin: auto;">
                                    </div>
                                    <div class="col-3 mt-4" 
                                    style="text-align: center;">
                                        <p class="m-1">SubProyecto 3</p>
                                    </div>
                                    <div class="col-4 mt-4">
                                        <div class="progress progress-warning m-2">
                                            <div
                                                class="progress-bar progress-label"
                                                role="progressbar"
                                                style="width: 88%"
                                                aria-valuenow="88"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>0 LandCoin Invertidos</p>
                                    </div>
                                    <div class="col-1 mt-2  mb-2">
                                        <div class="row mb-1">
                                            <button type="button" class="btn btn-success">+1</button>
                                        </div>
                                        <div class="row">
                                            <button type="button" class="btn btn-danger">-1</button>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4" style="text-align: center;">
                                        <p>Aporta <br>0 Co2</p>
                                    </div>
                                </div>

                                

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
                    <div class="col-md-12">
                      <div class="card" style="height: 300px; overflow-y: auto">
                        <div class="card-header m-1">
                          <h3 class="card-title">Mi Co2</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6" style="text-align: center;">
                                        <h5 class="card-title">Emisiones</h5>
                                        <img src="./assets/images/img/red-circle.png" width="200" height="200" alt="Pequeño coche rojo en un semáforo" loading="lazy">
                                    </div>
                                    <div class="col-6" style="text-align: center;">
                                        <h5 class="card-title">Compensaciones</h5>
                                        <img src="./assets/images/img/green-circle.png" width="200" height="200" alt="Pequeño coche rojo en un semáforo" loading="lazy">
                                </div>
                            </div>
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
                          <h5 class="card-title">Todos los proyectos</h5>
                        </div>
                        <div class="card-body">
                          <table class="table table-hover table-lg">
                            <tbody>

                              <tr>
                                <td class="col-3">
                                  <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                      <img src="assets/images/faces/5.jpg" />
                                    </div>
                                  </div>
                                </td>
                                <td class="col-auto">
                                  <h5 class="mb-0">
                                    Proyecto 1
                                  </h5>
                                  <p class="mb-0">
                                    123 participantes
                                  </p>
                                </td>
                              </tr>

                              <tr>
                                <td class="col-3">
                                  <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                      <img src="assets/images/faces/4.jpg" />
                                    </div>
                                  </div>
                                </td>
                                <td class="col-auto">
                                  <h5 class="mb-0">
                                    Proyecto 2
                                  </h5>
                                  <p class="mb-0">
                                    321 participantes
                                  </p>
                                </td>
                              </tr>

                              <tr>
                                <td class="col-3">
                                  <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                      <img src="assets/images/faces/1.jpg" />
                                    </div>
                                  </div>
                                </td>
                                <td class="col-auto">
                                  <h5 class="mb-0">
                                    Proyecto 3
                                  </h5>
                                  <p class="mb-0">
                                    21 participantes
                                  </p>
                                </td>
                              </tr>

                              <tr>
                                <td class="col-3">
                                  <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                      <img src="assets/images/faces/2.jpg" />
                                    </div>
                                  </div>
                                </td>
                                <td class="col-auto">
                                  <h5 class="mb-0">
                                    Proyecto 4
                                  </h5>
                                  <p class="mb-0">
                                    56 participantes
                                  </p>
                                </td>
                              </tr>

                            </tbody>
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
