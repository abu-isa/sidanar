
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Master Data</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ url('/listseminar') }}">Seminar</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="{{ url('/listregistration') }}">
                          <i class="icon_document_alt"></i>
                          <span>Registration</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{ url('/listregistration') }}">
                          <i class="icon_piechart"></i>
                          <span>Report</span>

                      </a>

          </li> 

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
