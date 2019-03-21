<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('images/logo.png') }}" style="padding:20px">
      </a>

    </div>
    
    <div class="sidebar-wrapper">
      <ul class="nav">

        <li class="{{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }} ">
          <a href="{{ route('dashboard') }}">
              <i class="fa fa-tachometer"></i>
            <p>Dashboard</p>
          </a>
        </li>



        <li class="">
            <a href="{{ route('dash.settings') }}">
                <i class="fa fa-suitcase"></i>
                <p>Products</p>
            </a>
        </li>


        <li class="divider"><hr></li>

        <li>
            <a href="{{ route('logout') }}">
                <i class="nc-icon nc-button-power"></i>
                <p>Logout</p>
            </a>
        </li>

      </ul>
    </div>
  </div>