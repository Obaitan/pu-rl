<div id="contact-panel">
        <div class="row g-0">
          <div class="col-xl-5 p-0">
            <div class="address-panel">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                >&times;</a
              >
              <div class="mt-6">
                <img src="images/svg/logo-white.svg" class="w-50" alt="" />
              </div>
              <p class="mt-4">Lorem, ipsum dolor.</p>
              <p>Lorem, ipsum dolor sit amet consectetur.</p>
              <p class="mt-4">Lorem, ipsum dolor.</p>
              <p>Lorem, ipsum dolor sit amet consectetur.</p>
              <p class="mt-4">Lorem, ipsum dolor.</p>
            </div>
          </div>
          <div class="col-xl-7">
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