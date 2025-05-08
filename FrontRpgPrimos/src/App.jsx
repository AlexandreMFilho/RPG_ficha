import 'primeicons/primeicons.css';
import { PrimeReactProvider } from 'primereact/api';
import "primereact/resources/primereact.min.css";
import "primereact/resources/themes/lara-light-cyan/theme.css";
import React from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Home from '../views/home';
import './App.css';



function App() {

  return (
    <>
      <PrimeReactProvider>
        <BrowserRouter>
          <Routes>
            {/* <Route path="/login" element={<Login />} />  */}
            <Route path="/" element={<Home />} />

          </Routes>
        </BrowserRouter>
      </PrimeReactProvider>
    </>
  )
}

export default App
