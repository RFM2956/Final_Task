 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-secondary navbar-dark">
         <a href="@route('dashboard.index')" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
             <div class="position-relative">
                 <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
             </div>
             <div class="ms-3">
                 <h6 class="mb-0">{{ $user->name}}</h6>
                 <a href="{{ route('admin.logout')}}" class="font-weight-bold">Logout</a>
                 <span>Admin</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
             <a href="@route('dashboard.index')" class="nav-item nav-link @ca('dashboard.index')"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             <a href="@route('books.index')" class="nav-item nav-link @ca('books.index')"><i class="fa fa-th me-2"></i>Categories</a>
             <a href="@route('slide.index')" class="nav-item nav-link @ca('slide.index')"><i class="fa fa-keyboard me-2"></i>Slide</a>
             <a href="@route('images.index')" class="nav-item nav-link @ca('images.index')"><i class="fa fa-table me-2"></i>Images</a>
             <a href="@route('products.index')" class="nav-item nav-link @ca('products.index')"><i class="fa fa-chart-bar me-2"></i>Products</a>
             <a href="@route('brands.index')" class="nav-item nav-link @ca('brands.index')"><i class="fa fa-chart-bar me-2"></i>Other Img</a>
             <a href="@route('shop.index')" class="nav-item nav-link @ca('shop.index')"><i class="fa fa-chart-bar me-2"></i>Shop</a>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                 <div class="dropdown-menu bg-transparent border-0">
                     <a href="signin.html" class="dropdown-item">Sign In</a>
                     <a href="signup.html" class="dropdown-item">Sign Up</a>
                     <a href="404.html" class="dropdown-item">404 Error</a>
                     <a href="blank.html" class="dropdown-item">Blank Page</a>
                 </div>
             </div>
         </div>
     </nav>
 </div>
 <!-- Sidebar End -->
