import React, { createContext, useState } from 'react';

export const RPGContext = createContext();

export const RPGProvider = ({ children }) => {
    const [state, setState] = useState({});

    return (
        <RPGContext.Provider value={{ state, setState }}>
            {children}
        </RPGContext.Provider>
    );
};