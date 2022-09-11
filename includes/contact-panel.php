<div id="contact-panel">
        <div class="row g-0">
          <div class="col-md-4 p-0 order-2 order-md-1">
            <div class="address-panel">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                >&times;</a
              >
              <div class="mt-6 mb-4">
                <img src="images/svg/logo-white.svg" class="w-50" alt="" />
              </div>
              <div class="d-flex justify-content-start align-items-center mb-3">
                <i class="fas fa-phone-alt"></i>
                <p class="panel-text mb-0">+234 801 100 9600</p>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-3">
                <i class="fas fa-envelope"></i>
                <p class="panel-text mb-0">help@pu-rl.com</p>
              </div>
              <div class="d-flex justify-content-start align-items-start">
                <i class="fas fa-map-marker-alt"></i>
                <p class="panel-text mb-0">
                  8 Atanda Street, Ladipo, Oshodi, Lagos, Nigeria
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-8 order-1 order-md-2">
            <form id="contact-form">
              <h5 class="mb-4"><strong>Leave Us A Message</strong></h5>
              <div class="mb-3">
                <div class="mt-3">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-line2"
                    placeholder="Name"
                  />
                </div>
                <div class="mt-3">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-line2"
                    placeholder="Email"
                  />
                </div>
                <div class="mt-3">
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    class="form-line2"
                    placeholder="Phone"
                    onkeypress="return isNumberKey(event)"
                  />
                </div>
                <div class="mt-3">
                  <input
                    type="text"
                    id="subject"
                    name="subject"
                    class="form-line2"
                    placeholder="Subject"
                  />
                </div>

                <textarea
                  class="mt-3 form-line2"
                  id="message"
                  name="message"
                  rows="5"
                  placeholder="Message"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-try btn-lg btn-block">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>