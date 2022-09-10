<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purl-in | Home</title>

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header px-0 w-100" id="header">
      <nav class="navbar navbar-expand-lg py-md-1 py-lg-2 navbar-light">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand me-2" href="index.html">
            <img src="images/svg/logo.svg" class="logo" alt="Logo" />
            <img
              src="images/svg/logo-white.svg"
              class="logo-white"
              alt="Logo"
            />
          </a>

          <div
            class="group navbar-toggler"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            onclick="myFunction(this)"
          >
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
          <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <ul class="navbar-nav my-3 my-lg-0" id="menu-wrap">
              <li class="nav-item dropdown mx-lg-4">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="drop"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                  Features
                </a>
                <ul class="dropdown-menu" aria-labelledby="drop">
                  <li>
                    <a class="dropdown-item" href="#url">URL Shortener</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#qrcode">QR Codes</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#!">Integrations</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item mx-lg-4">
                <a class="nav-link" href="pricing.html">Pricing</a>
              </li>
              <li class="nav-item mx-lg-4">
                <a class="nav-link" href="#!">APIs</a>
              </li>

              <li class="nav-item mx-lg-4">
                <a class="nav-link" href="#!" onclick="openNav()">Contact Us</a>
              </li>
              <li class="nav-item mx-lg-4">
                <a class="btn btn-sign" href="sign-in.html" role="button"
                  >Sign In</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <a class="btn up" type="button">
      <span class="material-icons"> keyboard_arrow_up </span>
    </a>