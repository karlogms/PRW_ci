<php
    include = 'header.php'
?>

<div class="container-xxl position-relative bg-white d-flex p-0">
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Carregando...</span>
      </div>
  </div>
  <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
          <a href="index.html" class="navbar-brand mx-4 mb-3">
              <h3 class="text-primary">Hello Stock</h3>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">
              <div class="position-relative">
                  <img class="rounded-circle" src="https://i.imgur.com/oygmsV2.jpeg" alt="" style="width: 40px; height: 40px;">
                  <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
              </div>
              <div class="ms-3">
                  <h6 class="mb-0">Bruno Mars</h6> <!-- Colocar o Nome em PHP puxando do BD -->
                  <span>Supervisor</span>
              </div>
          </div>
          <div class="navbar-nav w-100">
              <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Relatorios</a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="button.html" class="dropdown-item">Relatorio 1</a>
                      <a href="typography.html" class="dropdown-item">Relatorio 2</a>
                      <a href="element.html" class="dropdown-item">Relatorio 3</a>
                  </div>
              </div>
              <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Estoque</a>
              <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pedidos</a>
          </div>
      </nav>
  </div>
  <div class="content">
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
          <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
              <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
          </a>
          <a href="#" class="sidebar-toggler flex-shrink-0">
              <i class="fa fa-bars"></i>
          </a>
          <div class="navbar-nav align-items-center ms-auto">
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <img class="rounded-circle me-lg-2" src="https://i.imgur.com/oygmsV2.jpeg" alt="" style="width: 40px; height: 40px;">
                      <span class="d-none d-lg-inline-flex">Bruno</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                      <a href="#" class="dropdown-item">Perfil</a>
                      <a href="#" class="dropdown-item">Sair</a>
                  </div>
              </div>
          </div>
      </nav>
      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-line fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Total de Vendas</p>
                          <h6 class="mb-0">R$1234</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-bar fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Ganho Mensal</p>
                          <h6 class="mb-0">R$300</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-area fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Valor de Entrada</p>
                          <h6 class="mb-0">R$1234</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-pie fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Valor de Saída</p>
                          <h6 class="mb-0">$1234</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container-fluid pt-4 px-4">
          <div class="bg-light text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Colaborador Online</h6>
              </div>
              <div class="table-responsive">
                  <table class="table text-start align-middle table-bordered table-hover mb-0">
                      <thead>
                          <tr class="text-dark">
                              <th scope="col">Colaborador</th>
                              <th scope="col">Vendidos</th>
                              <th scope="col">Status</th>
                              <th scope="col">Info</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>               
                              <td>Colaborador</td>
                              <td>$123</td>
                              <td>Online</td>
                              <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                          </tr>
                          <tr>                                   
                              <td>Colaborador</td>
                              <td>$123</td>
                              <td>Online</td>
                              <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                          </tr>
                          <tr>                                    
                              <td>Colaborador</td>
                              <td>$123</td>
                              <td>Online</td>
                              <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                          </tr>
                          <tr>
                              <td>Colaborador</td>
                              <td>$123</td>
                              <td>Online</td>
                              <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                          </tr>
                          <tr>
                              <td>Colaborador</td>
                              <td>$123</td>
                              <td>Online</td>
                              <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              
              <div class="col-sm-12 col-md-6 col-xl-4">
                  <div class="h-100 bg-light rounded p-4">
                      <div class="d-flex align-items-center justify-content-between mb-4">
                          <h6 class="mb-0">Alugados</h6>
                          <a href="">Ver todos</a>
                      </div>
                      <div id="calender"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="js/main.js"></script>

<php
    include ='rodape.php'
?>
