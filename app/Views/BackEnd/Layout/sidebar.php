<?php
$auth = service('authentication');
$user = $auth->user();
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #DDE6ED;">
        <div class="sb-sidenav-menu" style="color: black;">
            <div class="nav">
                <div class="sb-sidenav-menu-heading" style="color: grey;">DASH</div>
                <a class="nav-link" href="/admin" style="color: black;">
                    <div class="sb-nav-link-icon" style="color: black;"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <?php if ($user->role == 'admin') : ?>
                    <a class="nav-link" href="/user" style="color: black;">
                        <div class="sb-nav-link-icon" style="color: black;"><i class="fas fa-user"></i></div>
                        Users
                    </a>
                <?php endif; ?>
                <div class="sb-sidenav-menu-heading" style="color: grey;">CONTENT</div>
                <?php if ($user->role == 'operator') : ?>
                    <a class="nav-link" href="/posts" style="color: black;">
                        <div class="sb-nav-link-icon" style="color: black;"><i class="fas fa-newspaper"></i></div>
                        Posts
                    </a>
                <?php endif; ?>
                <?php if ($user->role == 'admin') : ?>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" style="color: black;">
                        <div class="sb-nav-link-icon"><i class="fas fa-book" style="color: black;"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: black;"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion" style="color: black;">
                        <nav class="sb-sidenav-menu-nested nav" style="color: black;">
                            <a class="nav-link" href="/academic" style="color: black;"><i class="fas fa-book" style="color: black;"></i>&nbsp; Academic Years</a>
                            <a class="nav-link" href="/image" style="color: black;"><i class="fas fa-image" style="color: black;"></i>&nbsp; Image Sliders</a>
                            <a class="nav-link" href="/menu" style="color: black;"><i class="fas fa-th-list" style="color: black;"></i>&nbsp; Menu</a>
                            <a class="nav-link" href="/module" style="color: black;"><i class="fas fa-book" style="color: black;"></i>&nbsp; Modules</a>
                            <a class="nav-link" href="/posts" style="color: black;"><i class="fas fa-folder-open" style="color: black;"></i>&nbsp; Posts</a>
                            <a class="nav-link" href="/links" style="color: black;"><i class="fas fa-link" style="color: black;"></i>&nbsp; Links</a>
                            <a class="nav-link" href="/quote" style="color: black;"><i class="fas fa-quote-left" style="color: black;"></i>&nbsp; Quotes</a>
                        </nav>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="sb-sidenav-footer" style="display: flex; align-items: center; background-color: #9DB2BF;">
            <img src="/img/smk1padang.png" alt="smkn 1 padang" style="width: 50px; height: auto; margin-right: 15px;">
            <div style="color: black;">
                <div class="small">Copyright &copy;</div>
                SMKN 1 PADANG
            </div>
        </div>


    </nav>
</div>