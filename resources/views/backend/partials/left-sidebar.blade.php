        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
 


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Product</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.product.create')}}"> Add Product </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.products')}}"> Manage Products </a>
                  </li>

                </ul>
              </div>
            </li>

             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Category</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.category.create')}}"> Add Category </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.categories')}}"> Manage Category </a>
                  </li>

                </ul>
              </div>
            </li>

              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Brands</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="brand">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.brand.create')}}"> Add Brand </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.brands')}}"> Manage Brands </a>
                  </li>

                </ul>
              </div>
            </li>

                <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#division" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Divisions</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="division">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.division.create')}}"> Add Division </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.divisions') }}"> Manage Division </a>
                  </li>

                </ul>
              </div>
            </li>


                   <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Districts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="district">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.district.create')}}"> Add District </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.districts')}}"> Manage District </a>
                  </li>

                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->