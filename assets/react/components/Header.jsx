import React from 'react';

<<<<<<< HEAD
const Header = ({ title }) => {
    return (
        <h1 className="text-3xl font-bold underline">
            {title}
        </h1>
=======
const Header = () => {
    return (
        <nav class="navbar rounded-box shadow">
            <div class="w-full md:flex md:items-center md:gap-2">
                <div class="flex items-center justify-between">
                <div class="navbar-start items-center justify-between max-md:w-full">
                    <a class="link text-base-content link-neutral text-xl font-semibold no-underline" href="#">FlyonUI</a>
                    <div class="md:hidden">
                    <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square" data-collapse="#dropdown-navbar-collapse" aria-controls="dropdown-navbar-collapse" aria-label="Toggle navigation" >
                        <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                        <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                    </button>
                    </div>
                </div>
                </div>
                <div id="dropdown-navbar-collapse" class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full" >
                <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end]">
                    <button id="dropdown-nav" type="button" class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown" >
                        Products
                        <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-nav" >
                        <li><a class="dropdown-item" href="#">UI kits</a></li>
                        <li><a class="dropdown-item" href="#">Templates</a></li>
                        <li><a class="dropdown-item" href="#">Component library</a></li>
                        <hr class="border-base-content/25 -mx-2 my-3" />
                        <li><a class="dropdown-item" href="#">Figma designs</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
>>>>>>> cabd853ab4176bbe9554626a63289200413b031f
    );
};

export default Header;