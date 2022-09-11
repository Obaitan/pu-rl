<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purl-in | Sign Up</title>

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->

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
    <section class="sign-hero" id="hero">
      <div class="col-xl-3 mx-auto">
        <div class="b-palette">
          <div class="text-center">
            <img
              src="images/svg/logo-white.svg"
              class="logo"
              alt="Pu-rl logo"
            />
          </div>
          <div>
            <div class="text-center mt-3">
              <p class="sign">Sign Up</p>
            </div>
            <div class="mt-3">
              <form action="">
                <div class="mb-3">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-line"
                    placeholder="Email"
                  />
                </div>
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-line"
                    placeholder="Password"
                  />
                </div>
                <div class="form-outline mb-3">
                  <input
                    type="password"
                    id="re_password"
                    name="re_password"
                    class="form-line"
                    placeholder="Confirm Password"
                  />
                </div>
                <div class="form-check mb-3">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="terms"
                  />
                  <label class="form-check-label" for="terms"
                    >I accept the
                    <a href="#!" class="accept" target="_blank"
                      >Terms of Service</a
                    >
                    and
                    <a href="#!" class="accept" target="_blank"
                      >Privacy Policy</a
                    >
                  </label>
                </div>
                <a href="#!" class="btn btn-white btn-block mb-2"
                  >Create account</a
                >
                <div class="text-center">
                  <span class="form-check-label">Already have an account?</span>
                  <span class="mx-1"></span>
                  <a href="sign-in.php" class="form-check-label accept"
                    >Sign In</a
                  >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
    ></script>
  </body>
</html>
