<!--Header-->
<header>
    <div class="header header--transparent">
      <div class="container">    
        <nav>
            <div class="logo">
                <a href="index.php"><img src="https://bitas-idc.com/anassets/frontend/images/logo.png" alt=""></a>
            </div>
          
            <!-- Main Navigation -->
            <div class="navigation">
                <ul>
                    <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>"><a href="index.php">Beranda</a></li>
                    <li class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a href="about.php">Tentang Kami</a></li>
                    <li class="<?php echo ($current_page == 'product') ? 'active' : ''; ?>"><a href="product.php">Produk</a></li>
                    <li class="<?php echo ($current_page == 'services') ? 'active' : ''; ?>"><a href="services.php">Layanan</a></li>
                    <li class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a href="contact.php">Hubungi Kami</a></li>
                    <li class="navigation__cta"><a href="mailto:bitas.idc@gmail.com" class="btn btn__primary" target="_blank">Lihat Penawaran</a></li>
                </ul>
            </div>

            <!--Hamburger Menu-->
            <div class="visible-xs menu__mobile">
                <div id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>      
      </div>
    </div>
<header>