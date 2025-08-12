import 'primeicons/primeicons.css';
import { PrimeReactProvider } from 'primereact/api';
import "primereact/resources/primereact.min.css";
import "primereact/resources/themes/lara-light-cyan/theme.css";
import React from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Home from '../views/home';
import './App.css';
import Ficha from '../components/Ficha';
import Personagem from '../components/Personagem';

// import "primereact/resources/themes/lara-light-indigo/theme.css";  // ou seu tema
// import "primeflex/primeflex.css";


function App() {

  return (
    <>
      <PrimeReactProvider>
        <BrowserRouter>
          <Routes>
            {/* <Route path="/login" element={<Login />} />  */}
            <Route path="/" element={<Home />} />
            <Route path="/ficha" element={<Ficha />} />
            <Route path="/personagem/:id" element={<Personagem />} />
            {/* <Route path="/galeria" element={<Galeria />} /> */}

          </Routes>
        </BrowserRouter>
      </PrimeReactProvider>
    </>
  )
}

export default App
