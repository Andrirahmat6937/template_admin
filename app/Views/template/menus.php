<!-- extend ke main.php di folder view layout -->
<?= $this->extend('template/main') ?>


<?= $this->section('menu'); ?>

<li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <div class="badge bg-danger rounded-pill ms-auto">5</div>
    </a>
</li>

<!-- Layouts -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Layouts</div>
    </a>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Apps &amp; Pages</span>
</li>

<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-envelope"></i>
        <div data-i18n="Layouts">Email</div>
    </a>
</li>

<!-- Components -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
<!-- Cards -->
<li class="menu-item">
    <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Cards</div>
    </a>
</li>

<li class="menu-item">
    <a href="icons-boxicons.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div data-i18n="Boxicons">Boxicons</div>
    </a>
</li>

<?= $this->endSection(); ?>