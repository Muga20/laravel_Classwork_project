

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            {{-- dashboard  --}}
            
          <li class="nav-item has-treeview {{ request()-> is('admin') ? 'menu-open' : '' }}">          
            <a href="#" class="nav-link {{ request()-> is('admin') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/admin")}}" class="nav-link {{ request()-> is('admin') ? 'active': '' }} "  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- category section  --}}
          
          <li class="nav-item has-treeview  {{ request()-> is('addcategory') ? 'menu-open': '' }} 
           {{ request()-> is('categories') ? 'menu-open': '' }}">
            <a href="#" class="nav-link {{ request()-> is('addcategory') ? 'active': '' }} 
           {{ request()-> is('categories') ? 'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/addcategory")}}" class="nav-link  {{ request()-> is('addcategory') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/categories")}}" class="nav-link  {{ request()-> is('categories') ? 'active' : '' }} >
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- sliders section  --}}

           <li class="nav-item has-treeview  {{ request()-> is('addslider') ? 'menu-open': '' }} 
           {{ request()-> is('sliders') ? 'menu-open': '' }}">
            <a href="#" class="nav-link {{ request()-> is('addslider') ? 'active': '' }} 
           {{ request()-> is('sliders') ? 'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/addslider")}}" class="nav-link  {{ request()-> is('addslider') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add sliders</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/sliders")}}" class="nav-link  {{ request()-> is('sliders') ? 'active' : '' }} >
                  <i class="far fa-file nav-icon"></i>
                  <p>sliders</p>
                </a>
              </li>
            </ul>
          </li>


            {{-- product section --}}

             <li class="nav-item has-treeview  {{ request()-> is('addproduct') ? 'menu-open': '' }} 
           {{ request()-> is('product') ? 'menu-open': '' }}">
            <a href="#" class="nav-link {{ request()-> is('addproduct') ? 'active': '' }} 
           {{ request()-> is('product') ? 'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/addproduct")}}" class="nav-link  {{ request()-> is('addproduct') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/product")}}" class="nav-link  {{ request()-> is('product') ? 'active' : '' }} >
                  <i class="far fa-file nav-icon"></i>
                  <p>product</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- orders section  --}}

            <li class="nav-item has-treeview  {{ request()-> is('orders') ? 'menu-open': '' }} 
           {{ request()-> is('orders') ? 'menu-open': '' }}">
            <a href="#" class="nav-link {{ request()-> is('orders') ? 'active': '' }} 
           {{ request()-> is('orders') ? 'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/orders")}}" class="nav-link  {{ request()-> is('orders') ? 'active' : '' }} >
                  <i class="far fa-file nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>


          {{--  --}}

          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

