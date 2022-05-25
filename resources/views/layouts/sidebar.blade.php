<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 myshop">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset(\App\Base::$logo) }}" class="w-50" alt="">
        </div>
        <button
            class="hide-sidebar-btn btn btn-light d-block d-lg-none btnnn"
        >
            <i class="feather-x text-primary" style="font-size: 2em"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <x-menu-spacer></x-menu-spacer>

            <x-menu-item name="Home" class="fas fa-home" link="{{ route('home') }}"></x-menu-item>


            <x-menu-title title="My Test Title"></x-menu-title>
            <x-menu-item name="Create Item" class="fas fa-plus-circle"></x-menu-item>
            <x-menu-item name="Item List" class="fas fa-list" counter="50">

            </x-menu-item><x-menu-title title="Article Manager"></x-menu-title>
            <x-menu-item name="Manage Category" link="{{ route('category.index') }}" class="feather-layers"></x-menu-item>
            <x-menu-item name="Create Article" link="{{ route('article.create') }}" class="feather-plus-circle"></x-menu-item>
            <x-menu-item name="Article List" link="{{ route('article.index') }}" class="feather-list"></x-menu-item>

            <x-menu-title title="User Profile"></x-menu-title>
            <x-menu-item name="Your Profile" link="{{ route('profile') }}" class="feather-user"></x-menu-item>
            <x-menu-item name="Change Password" link="{{ route('profile.edit.password') }}" class="feather-refresh-cw"></x-menu-item>
            <x-menu-item name="Update Name & Email" link="{{ route('profile.edit.name.email') }}" class="feather-message-square"></x-menu-item>
            <x-menu-item name="Update photo" link="{{ route('profile.edit.photo') }}" class="feather-image"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>
            <li class="menu-item">
                <a href="{{ route('logout') }}" class="btn btn-outline-primary d-block"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    logout
                </a>

            </li>

        </ul>

    </div>
</div>
