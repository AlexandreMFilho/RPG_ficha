import React from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
const Home = () => {
    return (
        <div>
            <MolduraPersonagem imagem={max}/>
            <h1>Welcome to RPG Ficha</h1>
            <p>This is the home page of your RPG application.</p>
        </div>
    );
};

export default Home;