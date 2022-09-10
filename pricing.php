

    <div class="container-fluid app p-0">
      <section class="pricing" id="pricing">
        <div class="container">
          <div class="text-center">
            <h4 class="mb-5"><strong>Pricing</strong></h4>
            <div class="btn-group mb-5" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-lg btn-billing">
                Monthly billing
              </button>
              <button type="button" class="btn btn-lg btn-billing">
                Annual billign <small>(2 months FREE)</small>
              </button>
            </div>
          </div>

          <div class="row gx-lg-4">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div
                  class="card-header py-3"
                  style="border: 1px solid rgb(7, 160, 7)"
                >
                  <p class="text-uppercase small green mb-2">
                    <strong>Free</strong>
                  </p>
                  <h5 class="green mb-0">Free</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                  </ul>
                </div>
                <div class="card-footer bg-white py-4">
                  <button type="button" class="btn btn-green btn-sm">
                    Get it
                  </button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card" style="border: 1px solid pink">
                <div class="card-header py-3" style="background-color: pink">
                  <p class="text-uppercase small white mb-2">
                    <strong>Essential</strong>
                  </p>
                  <h5 class="white mb-0">$19/month</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                  </ul>
                </div>
                <div class="card-footer bg-white py-4">
                  <button type="button" class="btn btn-promo btn-sm">
                    Buy now
                  </button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-header main-background py-3">
                  <p class="text-uppercase small white mb-2">
                    <strong>Advanced</strong>
                  </p>
                  <h5 class="white mb-0">$49/month</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                  </ul>
                </div>
                <div class="card-footer bg-white py-4">
                  <button type="button" class="btn btn-explore btn-sm">
                    Buy now
                  </button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-header main-background py-3">
                  <p class="text-uppercase small white mb-2">
                    <strong>Enterprise</strong>
                  </p>
                  <h5 class="white mb-0">$189/month</h5>
                </div>

                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                    <li class="list-group-item">Feature</li>
                  </ul>
                </div>

                <div class="card-footer bg-white py-4">
                  <button type="button" class="btn btn-explore btn-sm">
                    Buy now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
    </div>
