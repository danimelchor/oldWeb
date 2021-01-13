  <div id="footer">
    <div id="footer-menu-social">
      <p id="footer-menu-social-title">Stay tuned!</p>
    <div class="footer-popup-wrapper">
      <div class="footer-popup">
        <div id="footer-discord--close">
          <div id="footer-discord-cross"></div>
        </div>
        <img src="img/discordlogo.png" class="footer-popup-logo" />
        <p id="discord-popup-title">Danii672</p>
        <p id="discord-popup-id">#5194</p>
      </div>
    </div>
      <div id="footer-menu-social-list">
        <?php
          $title = array("instagram","twitter","snapchat");
          $links = array(
            "https://www.instagram.com/dmelchor_/",
            "https://twitter.com/danii672",
            "https://www.snapchat.com/add/danii672"
          );

          for($i = 0; $i < count($title); $i++) {
            echo "<a class='footer-menu-social-a' href='". $links[$i] ."' target='_blank' ><div class='footer-menu-social-item'><i class='fab fa-" . $title[$i] . "' ></i></div></a>";
          }
        ?>
        <div class='footer-menu-social-item' id="footer-discord">
          <i class='fab fa-discord'></i>
        </div>
        <a href='/contact.php' target="_blank" class="footer-menu-social-a" >
          <div class='footer-menu-social-item'>
            <i class='fas fa-envelope' ></i>
          </div>
        </a>
      </div>
    </div>
    <div id="footer-menu-submenu">
      <ul id="footer-menu-links">
        <a href="/"><li class="footer-menu-submenu-links" >Home</li></a>
        <a href="/gallery/"><li class="footer-menu-submenu-links" >Gallery</li></a>
        <a href="/about/"><li class="footer-menu-submenu-links" >About me</li></a>
        <a href="/contact/"><li class="footer-menu-submenu-links">Get in touch</li></a>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
