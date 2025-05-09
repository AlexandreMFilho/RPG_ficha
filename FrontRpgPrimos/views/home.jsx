import React from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
const Home = () => {
    return (
        <div className='card' style={{ 
            display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', height: '100vh' ,backgroundColor:'gray'}}>
            <MolduraPersonagem imagem={max}/>
            {/* <h1>Welcome to RPG Ficha</h1> */}
            {/* <p>This is the home page of your RPG application.</p> */}
        </div>
    );
};

export default Home;