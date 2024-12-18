<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->



    <!-- SUPERADMIN SIDEBAR -->
    @if(auth()->user()->role == "superadmin")
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Time & Pay
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user_admin.invoices')}}">
            <span>Invoices</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user_admin.personnel')}}">
            <span>Personnel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user_admin.receipts')}}">
            <span>Receipts</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        System
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user_admin.programs')}}">
            <span>Programs</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Update Passwords (DNI)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Settings</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout')}}">
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
@endif

<!-- ADMIN SIDEBAR -->
@if(auth()->user()->role == "admin")
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    Time & Pay
</div>

<li class="nav-item">
    <a class="nav-link" href="{{ route('user_admin.invoices')}}">
        <span>Invoices</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user_admin.invoices')}}">
        <span>Personnel</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user_admin.invoices')}}">
        <span>Receipts</span>
    </a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    System
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('user_admin.invoices')}}">
        <span>Reports</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <span>Projects</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
@endif

<!-- ACCOUNTANT SIDEBAR -->
@if(auth()->user()->role == "accountant")
<li class="nav-item active">
<a class="nav-link" href="index.html">
    <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
Time & Pay
</div>

<li class="nav-item">
<a class="nav-link" href="{{ route('user_admin.invoices')}}">
    <span>Invoices</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('user_admin.invoices')}}">
    <span>Exports</span>
</a>
</li>

<hr class="sidebar-divider d-none d-md-block">
@endif


<!-- TEAM LEAD SIDEBAR -->
@if(auth()->user()->role == "teamlead")
<li class="nav-item active">
<a class="nav-link" href="index.html">
    <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
Time & Pay
</div>

<li class="nav-item">
<a class="nav-link" href="{{ route('user_admin.invoices')}}">
    <span>Invoices</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('user_admin.invoices')}}">
    <span>Exports</span>
</a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<!-- End of Sidebar -->
@endif


<!-- TEAM LEAD SIDEBAR -->
@if(auth()->user()->role == "worker")
<li class="nav-item active">
<a class="nav-link" href="{{ route('dashboard')}}">
    <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
Time & Pay
</div>

<li class="nav-item">
<a class="nav-link" href="{{ route('user_worker.invoices')}}">
    <span>Invoices</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('user_worker.photo')}}">
    <span>Receipts</span>
</a>
</li>

<hr class="sidebar-divider d-none d-md-block">
@endif

</ul>
