<style>
    body:not(.layout-fixed) .main-sidebar {
    height: inherit;
    min-height: 242%;
    position: absolute;
    top: 0;
}
</style>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= route('admin') ?>" class="brand-link">
  
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <img src="/dist/img/Logo1.png" style="width:56px;" />
      {{-- <span class="brand-text font-weight-light" href="/admin" style="font-family: 'Times New Roman', Times, serif;">NB Law Firm</span> --}}
      <span class="brand-text font-weight-light" <a href="<?= route('admin') ?>" style="font-family: 'Times New Roman', Times, serif;">NB Law Firm</a></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="" class="d-block" style="font-family: 'Times New Roman', Times, serif; color:white"><b>Welcome To Admin Panel</b></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            {{-- <a href="admin/" class="nav-link active"> --}}
            <a href="<?=route('admin') ?>"class="nav-link active"</a>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="font-family: 'Times New Roman', Times, serif;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="font-family: 'Times New Roman', Times, serif;">
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addpost') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="/all-post" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
