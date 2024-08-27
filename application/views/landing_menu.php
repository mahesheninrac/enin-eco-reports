<?php require(APPPATH . 'views/header.php'); ?>
<div class="off-menu-nav active" id="off-menu-nav">
    <div class="d-flex flex-row center-align company-info">
        <div class="wrapper">
            <h3 class="getin">Get in touch</h3>
            <p class="address">Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301</p>
            <div class="fs-sm">
                <p class="mb-0">+91 9319048963</p>
                <p>connect@eninrac.com</p>
            </div>
            <!-- social media icons -->
            <div class="d-flex gap-4 my-4 ">
                <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer" class="p-0">
                    <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg" alt="LinkedIn">
                </a>
                <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank" rel="noreferrer" class="p-0">
                    <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg" alt="Twitter">
                </a>
            </div>
            <!-- subscribe to news letter -->
            <div class="d-flex flex-column my-4 py-4">
                <label for="" class="subscribe-heading">Subscribe to our newsletter</label>
                <div class="my-1 subscribe-form ">
                    <input type="email" name="" id="" placeholder="Your work Email">
                    <button type="button" class="my-4">Subscribe</button>
                    <p class="my-1">By submitting this form, you agree to Rho Motion’s <u>privacy policy.</u></p>
                </div>
            </div>
        </div>
        <div class="services">

            <div class="nav-links d-flex flex-column ">
                <span class="off-menu-close" id="off-menu-close"><i class="icofont-close "></i></span>
                <a href="<?= base_url('reports') ?>" class="" id="reports">Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="" id="custom_page">Custom Requirements</a>
                <a href="<?= base_url('event') ?>" class="" id="event">Surveys & VoC</a>
                <a href="<?= base_url('contact_us') ?>" class="">About us</a>
                <button type="button" class="login-btn">login</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('off-menu-toggler').addEventListener('click', function() {
        document.getElementById('off-menu-nav').classList.toggle('active');
    });

    document.getElementById('off-menu-close').addEventListener('click', function() {
        document.getElementById('off-menu-nav').classList.toggle('active');
    });
</script>
</body>

</html>