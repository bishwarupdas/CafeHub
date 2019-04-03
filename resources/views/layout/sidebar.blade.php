<!--
       Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

       Tip 2: you can also add an image using data-image tag
   -->
<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        CT
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ Request::route()->uri() == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboards</p>
            </a>
        </li>
        <li class="nav-item {{ in_array(Request::route()->uri(), array('customers', 'bill-items')) ? 'active' : '' }}">
            <a class="nav-link" href="/customers">
                <i class="material-icons">perm_identity</i>
                <p>Customers</p>
            </a>
        </li>
        <!-- your sidebar here -->
    </ul>
</div>