<?php require "global.php"; ?>

<footer>
  <div class="container footer_top">
    <div class="row">
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 item center-block text-center">
          <h3>POP School</h3>
          <img class="logo_pop" src="img/popschool.png" alt="logo_popschool">
      </div>

      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 item xs-center">
          <h3>Lien</h3>
          <ul class="footer_link">
              <li><a href="mentions.php">Mentions légales</a></li>
              <li><a href="<?php echo $linkPopGroupe; ?>" target="_blank">Groupe POP</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="faq.php">F.A.Q</a></li>
          </ul>
      </div>

      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 item text xs-center">
          <h3>POP</h3>
          <div class="icon_pop">
              <a href="<?php echo $linkPopPlace; ?>" target="_blank">
                  <div class="icon"><span class="text_icon place">PLACE</span></div>
              </a>
              <a href="<?php echo $linkPopUp; ?>" target="_blank">
                  <div class="icon"><span class="text_icon up">UP</span></div>
              </a>
              <a href="<?php echo $linkPopSchool; ?>" target="_blank">
                  <div class="icon"><span class="text_icon school">SCHOOL</span></div>
              </a>
              <a href="<?php echo $linkPopLab; ?>" target="_blank">
                  <div class="icon"><span class="text_icon lab">LAB</span></div>
              </a>
              <a href="<?php echo $linkPopTech; ?>" target="_blank">
                  <div class="icon"><span class="text_icon tech">TECH</span></div>
              </a>
          </div>
      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item text xs-center">
        <h3>Newsletter</h3>
        <form method="post" id="formulaire">
          <div id="pageMessages">

          </div>
          <input type="email" class="text_newletter" name="text_newletter" placeholder="Entrez votre email"><br>
          <input type="submit" class="button_newletter" name="button_newletter" onclick="createAlert();" value="S'inscrire">
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 center-block text-center">
          <a href="<?php echo $linkFb; ?>" target="_blank"><img class="icon-social" src="img/fb.png" alt="icon_facebook"></a>
          <a href="<?php echo $linkTw; ?>" target="_blank"><img class="icon-social" src="img/tw.png" alt="icon_twitter"></a>
          <a href="<?php echo $linkInsta; ?>" target="_blank"><img class="icon-social" src="img/insta.png" alt="icon_instagram"></a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="copyright text-center">POP School © 2017-2018</p>
      </div>
    </div>
  </div>
</footer>
