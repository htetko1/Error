<div class="row header mb-3">
    <div class="col-12">
        <div
            class="p-2 bg-primary rounded d-flex justify-content-between align-items-center"
        >
            <button class="show-sidebar-btn btn d-block d-lg-none">
                <i class="feather-menu text-light" style="font-size: 2em"></i>
            </button>
            <form action="" method="post" class="d-none d-md-block">
                <div class="form-inline d-flex">
                    <input type="text" class="form-control" />
                    <button class="btn btn-light">
                        <i class="feather-search text-primary"></i>
                    </button>
                </div>
            </form>
            <div class="dropdown">
                <button
                    class="btn btn-white dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img src="{{ asset('images/pexels-cátia-matos-1072179.jpg') }}" class="user-img" alt="" />
                    <span class="text-white text-uppercase">Htet Ko</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            LogOut
                        </a>
                    </li>

                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
