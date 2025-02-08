<div class="flex">
    <!-- Sidebar -->
    <div class="w-64 bg-white h-screen shadow-md">
        <div class="p-4 flex items-center">
            <img alt="Logo" class="w-10 h-10" height="40"
                src="https://storage.googleapis.com/a1aa/image/MJTFJixatp6cj-WMxaRta53x9gIvx0Zyku0rYgk8gAU.jpg"
                width="40" />
            <span class="ml-2 text-xl font-bold">
                Auth-Flip
            </span>
        </div>
        <div class="p-4 flex items-center">
            <img alt="User Avatar" class="w-10 h-10 rounded-full" height="40"
                src="https://storage.googleapis.com/a1aa/image/n8HRNm67GXKhdJ9k5sgO8jue6RNDanBY_0Ir0F7RYsI.jpg"
                width="40" />
            <div class="ml-2">
                <div class="font-bold">
                    mantap
                </div>
                <div class="text-sm text-gray-500">
                    Free
                </div>
            </div>
        </div>
        <nav class="mt-4">
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="#">
                <i class="fas fa-tachometer-alt w-5">
                </i>
                <span class="ml-2">
                    Dashboard
                </span>
            </a>
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="#">
                <i class="fas fa-th-large w-5">
                </i>
                <span class="ml-2">
                    My Apps
                </span>
            </a>
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="#">
                <i class="fas fa-credit-card w-5">
                </i>
                <span class="ml-2">
                    Subscription
                </span>
            </a>
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="{{ route('Support.Index') }}">
                <i class="fas fa-life-ring w-5">
                </i>
                <span class="ml-2">
                    Support
                </span>
            </a>
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="#">
                <i class="fas fa-cog w-5">
                </i>
                <span class="ml-2">
                    Settings
                </span>
            </a>
            <a class="flex items-center p-2 text-gray-700 hover:bg-gray-200" href="#">
                <i class="fas fa-book w-5">
                </i>
                <span class="ml-2">
                    Documentation
                </span>
            </a>
        </nav>
    </div>
    @yield('content')
</div>
