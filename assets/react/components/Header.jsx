import React from 'react';

const Header = ({ title }) => {
    return (
        <nav className="navbar shadow bg-gray-800 text-white h-1/10">
            <div className="w-full md:flex md:items-center md:gap-2">
                <div className="flex items-center justify-between">
                    <div className="navbar-start items-center justify-between max-md:w-full">
                        <a className="link text-base-content link-neutral text-xl font-semibold no-underline text-white" href="/">{title}</a>
                        <div className="md:hidden">
                            <button type="button" className="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square" data-collapse="#default-navbar-collapse" aria-controls="default-navbar-collapse" aria-label="Toggle navigation" >
                            <span className="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                            <span className="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="default-navbar-collapse" className="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full" >
                    <ul className="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                        <li><a href="/tasks/create">Créer une tache</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    );
};

export default Header;