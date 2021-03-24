<main class="mdl-layout__content">

  <div class="mdl-grid mdl-grid--no-spacing dashboard">

    <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

      <!-- TEMP -->
      <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
                      <div class="mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__title">
                              <h5 class="mdl-card__title-text text-color--white">Perfil de usuario</h5>
                          </div>
                          <div class="mdl-card__supporting-text">
                                <form enctype="multipart/form-data" class="" action="<?php echo base_url('profile/change')?>" method="post">
                                  <div class="mdl-grid">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                              <input class="mdl-textfield__input" type="text" name="user_name" value="<?php echo $_SESSION['user_name']; ?>">
                                              <label class="mdl-textfield__label">Nombre de usuario</label>
                                          </div>
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                              <input class="mdl-textfield__input" type="text" name="email" value="<?php echo $_SESSION['user_email']; ?>">
                                              <label class="mdl-textfield__label">Email</label>
                                          </div>
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                              <input class="mdl-textfield__input" type="password" name="password1">
                                              <label class="mdl-textfield__label" for="password1">Contraseña</label>
                                          </div>
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                              <input class="mdl-textfield__input" type="password" name="password2">
                                              <label class="mdl-textfield__label" for="password2">Repite Contraseña</label>
                                          </div>
                                          

                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue" data-upgraded=",MaterialButton,MaterialRipple" type="submit">
                                    Guardar!
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 262.161px; height: 262.161px; transform: translate(-50%, -50%) translate(74px, 23px);"></span></span></button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
      <!-- Table-->

    </div>

</main>
