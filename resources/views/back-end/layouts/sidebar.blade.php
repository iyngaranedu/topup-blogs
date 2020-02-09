<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Navigation</div>
                <a class="nav-link" href="index.html"
                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard</a
                >

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsPosts" aria-expanded="false" aria-controls="collapsPosts"
                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Manage Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                <div class="collapse" id="collapsPosts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('backend.blogs')}}">Posts</a>
                        <a class="nav-link" href="{{route('backend.blogs.add')}}">Add New Post</a></nav>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory"
                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Manage Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                <div class="collapse" id="collapseCategory" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('backend.categories')}}">Categories</a>
                        <a class="nav-link" href="{{route('backend.categories.add')}}">Add New Category</a></nav>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser"
                ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Manage Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="table.html">Users</a>
                        <a class="nav-link" href="form.html">Add New User</a></nav>
                </div>




            </div>
        </div>

    </nav>
</div>
