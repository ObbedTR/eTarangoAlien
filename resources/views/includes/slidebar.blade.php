

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Barra Lateral</h3>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                
            </li>
            <li>
                <a href="#">SlideBar</a>
            </li>
            <li>
                      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">@yield('primer')</a>
              <li>
                  <a href="#">@yield('segun')</a>
              </li>
              <li>
                  <a href="#">@yield('tercer')</a>
              </li>
              <li>
                  <a href="#">@yield('cuarto')</a>
              </li>
          </ul>
            </li>
            
        </ul>
    </nav>

</div>
