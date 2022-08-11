<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://127.0.0.1:8000/dashboard  " target="_blank">
        <img src="admin/eshop.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">E-SHOP </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('categories') ? 'active bg-gradient-primary':''}}" href="{{url ('categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">Categories </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('addcategory') ? 'active bg-gradient-primary':'';}}"
           href="{{url ('addcategory')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('products') ? 'active bg-gradient-primary':'';}} "
          href="{{url ('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('addproduct') ? 'active bg-gradient-primary':'';}}"
          href="{{url ('addproduct')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">Add Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('categories') ? 'active bg-gradient-primary':'';}} " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>

      </ul>
    </div>

  </aside>
