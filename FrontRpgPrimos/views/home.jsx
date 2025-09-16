import React, { useState } from 'react';

import equip from "../public/game-icons/abdominal-armor.svg";
import mochila from "../public/game-icons/backpack.svg";
import itens from "../public/game-icons/standing-potion.svg";
import dados from "../public/game-icons/rolling-dices.svg";


import { Button } from 'primereact/button';
import { Dialog } from 'primereact/dialog';

const Home = () => {
const [isRolarDadosModalOpen, setIsRolarDadosModalOpen] = useState(false);

const handleOpenRolarDadosModal = () => setIsRolarDadosModalOpen(true);
const handleCloseRolarDadosModal = () => setIsRolarDadosModalOpen(false);

    return (
      <>
      <div>
        <h1>Welcome to RPG Ficha</h1>

      </div>
      <div style={{
        display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
        backgroundColor:'gray',
        // border:'1px solid black',
        maxHeight:'300px',
        width:'100%',
      }}>
                <Button 
                label="Ficha" 
                style={{color: 'black'}}
                size="large" 
                className="p-button-text" 
                onClick={() => window.location.href = '/ficha'}
                icon={
                  <img src={equip} alt="Ficha" width="20" style={{ marginRight: 8, verticalAlign: 'middle' }} />
                } 
                />

                <Button 
                label="Galeria" 
                style={{color: 'black'}}
                icon={
                  <img
                  src={itens}
                  alt="Itens"
                  width="20"
                  style={{ marginRight: 8, verticalAlign: 'middle' }}
                  />
                } 
                size="large" 
                className="p-button-text"
                onClick={() => window.location.href = '/galeria'}
                />

                <Button 
                label="Rolar Dados" size="large" className="p-button-text"
                style={{color: 'black'}}
                onClick={handleOpenRolarDadosModal}
                icon={
                  <img src={dados} alt="Rolar Dados" width="20" style={{ marginRight: 8, verticalAlign: 'middle' }}/>
                } 
                />


                <Dialog header="Rolar Dados" visible={isRolarDadosModalOpen} style={{ width: '50vw' }} onHide={handleCloseRolarDadosModal}>
                <h1>ROLAR DADOS</h1>
                <p>Lorem</p>
                </Dialog>  

            </div>
      </>
    );
};

export default Home;