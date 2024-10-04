<!DOCTYPE html>
<html lang="en">



<body>
    @auth
    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded"
        x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
        class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
    </div>
  @endauth

  <!-- ===== Preloader End ===== -->

    <div class="flex h-screen overflow-hidden">
        <!-- ===== header ===== -->
        @include('admin.layouts.header')
        <!-- ===== aside ===== -->
        @auth
        @include('admin.layouts.aside')
        @endauth
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- ===== navbar ===== -->
            @auth
            @include('admin.layouts.navbar')
            @endauth
            <!-- ===== content ===== -->
            @yield('content')
        </div>
    </div>
    @include('admin.layouts.footer')
    </div>
</body>

</html>