	<section class="sub-bnr">
    <div class="position-center-center">
      <div class="container">
        <h4>Contact</h4>
        <hr class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="/">Acasa</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
  </section>


<div id="content">

    <section class="contact-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row margin-top-100 margin-bottom-100">
          <div class="col-md-8">
            <div class="heading text-left margin-bottom-20">
              <h3> Contacteaza-<span>ne</span></h3>
              <hr />
            </div>

            <div class="contact-form">

              <!-- Form  -->
              <div class="margin-top-50">
                <div class="contact-form">

              		<div id="errors-container">
									</div>

                  <!-- FORM -->
                  <form role="form" id="contact_form" class="contact-form" method="post" action="send_message.php">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="name" id="name"
														required placeholder="NUME"
														data-validation-error-msg-container="#errors-container" />
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
													<input type="text" name="email" id="email"
														class="form-control" placeholder="EMAIL"
														data-validation="email" required
														data-validation-error-msg-container="#errors-container" />
                        </label>
                      </li>
					   					<li class="col-sm-12">
                        <label>
													<input type="text" name="phone" id="phone" class="form-control"
															placeholder="TELEFON - 0798 765 432" required
															pattern="^07\d\d\s\d\d\d\s\d\d\d" data-validation="phone"
															data-validation-error-msg-container="#errors-container" />
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
													<input type="text" name="subject" id="subject"
															placeholder="SUBIECT" class="form-control" required
															pattern="^07\d\d\s\d\d\d\s\d\d\d$" data-validation="phone"
															data-validation-error-msg-container="#errors-container" />

                        </label>
                      </li>
                      <li class="col-sm-12 margin-top-20">
                        <label>
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder="MESAJ"></textarea>
                        </label>
                      </li>
											<li>
													<input type="text" class="honey" name="honey" id="honey" />
											</li>
                      <li class="col-sm-12">
                        <button type="submit" value="submit" id="btn_submit" class="btn btn-yellow" onclick="proceed();">Trimite</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="services-intro">
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-2.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Proiectare</h6>
                  <p>Solutii optime, individualizate</p>
                </div>
              </li>
                <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-5.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Expertiza</h6>
                  <p>Experienta si inovatie</p>
                </div>
              </li>
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-6.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Verificari periodice</h6>
                  <p>Siguranta si eficienta</p>
                </div>
              </li>
							<li>
								<div class="media-left">
									<div class="icon"><img src="images/intro-icon-4.png" alt=""></div>
								</div>
								<div class="media-body">
									<h6 class="font-normal margin-bottom-10">Seriozitate</h6>
									<p></p>
								</div>
							</li>
            </ul>
          </div>
        </div>
      </div>
</section>
</div>

<div id="map" style="width:100%; height:650px;"></div>
