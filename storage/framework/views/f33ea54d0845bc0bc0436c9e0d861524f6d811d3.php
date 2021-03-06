<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">COMICS WEB STORE</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if(Route::currentRouteName()=='home' ): ?> active <?php endif; ?>" aria-current="page" href="<?php echo e(route('home')); ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(Route::currentRouteName()=='comics.index' ): ?> active <?php endif; ?>" aria-current="page"
                            href="<?php echo e(route('comics.index')); ?>">
                            Comics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(Route::currentRouteName()=='comics.create' ): ?> active <?php endif; ?>" aria-current="page"
                            href="<?php echo e(route('comics.create')); ?>">
                            New Comics
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<?php /**PATH C:\Users\giuse\Desktop\laravel-base-crud\resources\views/partials/header.blade.php ENDPATH**/ ?>