import React from 'react';

const Header = ({ title }) => {
    return (
        <h1 className="text-3xl font-bold underline">
            {title}
        </h1>
    );
};

export default Header;