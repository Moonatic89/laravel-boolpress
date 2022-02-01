  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">
                      <span data-feather="home"></span>
                      <i class="fas fa-tachometer-alt"></i>
                      Dashboard
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.posts.index')}}">
                      <span data-feather="file"></span>
                      <i class="fas fa-newspaper"></i>
                      Posts
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.products.index')}}">
                      <span data-feather="shopping-cart"></span>
                      <i class="fas fa-shopping-bag"></i>
                      Products
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories.index')}}">
                      <span data-feather="users"></span>
                      <i class="fas fa-columns"></i>
                      Categories
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.tags.index')}}">
                      <span data-feather="bar-chart-2"></span>
                      <i class="fas fa-tags"></i>
                      Tags
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('contacts')}}">
                      <span data-feather="layers"></span>
                      <i class="fas fa-id-card"></i>
                      Contacts
                  </a>
              </li>
          </ul>
      </div>
  </nav>