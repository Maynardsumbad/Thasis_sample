<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone Project</title>
    <link rel="stylesheet" href="../frontend/landing_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">
        <img src="../assets/logo1.webp" alt="ULATLINK Logo" style="height: 50px; vertical-align: middle;">
        ULATLINK</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#org-chart">Organizational Chart</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#contact">Contact Us</a>
          </li>

        </ul>
      </div>
    </div>
    <a href="../backend/login-register.php" class="login-button">Login</a>
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    <section class="hero-section">

    </section>

    <div class="content-section">
        <h1>MATINO, MAHUSAY, AT MAASAHAN!</h1>
    </div>

    <div class="main-content container my-5 d-flex flex-column flex-md-row gap-4">
        <aside class="service-list flex-shrink-0" style="width: 100%; max-width: 420px;">
            <div class="row g-4 flex-column">
                <div class="col-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">VISION</h5>
                            <p>A highly trusted Department and partner in nurturing local governments and sustaining peaceful, safe, progressive, resilient, and inclusive communities towards a comfortable and secure life for Filipinos by 2040.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">MISSION</h5>
                            <p>The Department shall promote peace and order, public safety and security, uphold excellence in local governance and enable resilient and inclusive communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">MANDATE</h5>
                            <p>To promote peace and order, ensure public safety, and further strengthen local government capability aimed towards the effective delivery of basic services to the citizenry.</p>
                        </div>
                    </div>
                </div>
                <div id="about" class="col-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">QUALITY POLICY</h5>
                            <img src="../assets/qpms.jpg" alt="Quality Policy" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <section id="org-chart" class="org-chart flex-grow-1">
            <h2>DEPARTMENT OF INTERIOR AND LOCAL GOVERNMENT</h2>
            <h2>MUNICIPAL OPERATIONS OFFICE</h2>
            <h3>BANAYOYO, ILOCOS SUR</h3><br>
            <h2>ORGANIZATIONAL CHART</h2>
            <div class="org-chart-content">
                <div class="org-head">
                    <img src="../assets/remulla.jpg" alt="secretary" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>HON. JUANITO VICTOR "JONVIC" REMULLA JR.</h3>
                        <h5>Secretary</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/jonathan.png" alt="regional director" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>JONATHAN PAUL M. LEUSEN, JR. CESO III</h3>
                        <h5>Regional Director</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/lalata.png" alt="assistant regional director" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>PAULINO G. LALATA, JR. CESO V</h5>
                        <h5>Assistant Regional Director</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/delarosa.jpg" alt="provincial director" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>RANDY S. DELA ROSA, JR. CESO V</h3>
                        <h5>Provincial Director</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/jonathan.png" alt="cluster leader" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>APRILLE REGINA P. GUERRERO, OIC</h3>
                        <h5>Cluster Leader</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/supnet.jpg" alt="mlgoo" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>MAVELYN S. SUPNET</h3>
                        <h5>MLGOO</h5>
                    </div>
                </div>
                <div class="org-member">
                    <img src="../assets/gray.jpg" alt="mlgoo" class="img-fluid org-chart-img">
                    <div class="org-chart-details">
                        <h3>KAREN JOY V. GRAY</h3>
                        <h5>Admin Aide/LGU Staff Assigned to DILG</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer id="contact" class="footer">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-start">
            <div class="footer-section" style="flex:1; min-width:220px;">
                <h6 class="text-start">DILG Websites and Social Media</h6>
                <ul class="list-unstyled">
                    <li><a href="https://www.dilg.gov.ph">https://www.dilg.gov.ph</a></li>
                    <li><a href="https://region1.dilg.gov.ph/">https://region1.dilg.gov.ph/</a></li>
                    <li><a href="https://www.facebook.com/DILGNatin">https://www.facebook.com/DILGNatin</a></li>
                    <li><a href="https://www.facebook.com/dilg.philippines">https://www.facebook.com/dilg.philippines</a></li>
                    <li><a href="https://www.facebook.com/nboo2015">https://www.facebook.com/nboo2015</a></li>
                    <li><a href="https://www.facebook.com/dilgilocossurpage">https://www.facebook.com/dilgilocossurpage</a></li>
                </ul>
            </div>
            <div class="footer-section text-md-start" style="flex:1; min-width:220px;">
                <h6>Government Links</h6>
                <ul class="list-unstyled ps-0">
                    <li class="text-start"><a href="https://www.officialgazette.gov.ph/office-of-the-president/">Office of the President</a></li>
                    <li class="text-start"><a href="https://www.ovp.gov.ph/">Office of the Vice President</a></li>
                    <li class="text-start"><a href="https://senate.gov.ph/">Senate of the Philippines</a></li>
                    <li class="text-start"><a href="https://www.congress.gov.ph/">House of Representatives</a></li>
                    <li class="text-start"><a href="https://sc.judiciary.gov.ph/">Supreme Court of the Philippines</a></li>
                    <li class="text-start"><a href="https://ca.judiciary.gov.ph/">Court of Appeals</a></li>
                    <li class="text-start"><a href="https://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
                    <li class="text-start"><a href="https://www.gppb.gov.ph/">Government Procurement Policy Board</a></li>
                    <li class="text-start"><a href="https://www.phcc.gov.ph/">Philippine Health Insurance Corporation</a></li><br>
                </ul>
            </div>
            <div class="footer-section text-md-start" style="flex:1; min-width:220px;">
                <h6>Connect With Us</h6>
                <ul class="list-unstyled">
                    <p>DILG Banayoyo Municipal Operations Office</p>
                    <p>2nd Floor, Municipal Hall, Barangay Casilagan Norte, Banayoyo, Ilocos Sur</p>
                </ul>
            </div>
        </div>
        <div class="container">
            <p class="text-center mt-3">&copy; 2026 ULATLINK. All rights reserved.</p>
        </div>
    </footer>

    <script src="../scripts/landing_page.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>