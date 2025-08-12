import React, { useState } from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
import AtributosCard from "../components/AtributosCard";
import AlinhamentoChart from "../components/AlinhamentoChart";
import HeroisCarousel from "../components/HeroisCarousel";
import mulherVerde from "../src/assets/imgs/mulher_verde.jpg";
import InfoPersonagem from './InfoPersonagem';

import magoazul from "../src/assets/imgs/mago_azul.jpeg";
import cavaleiro from "../src/assets/imgs/cavaleiro_azul.jpeg";
import tourobandido from "../src/assets/imgs/touro_bandido.jpeg";
import cherife from "../src/assets/imgs/touro_cherife.jpeg";
import vice from "../src/assets/imgs/touro_vice.jpeg";

import equip from "../public/game-icons/abdominal-armor.svg";
import mochila from "../public/game-icons/backpack.svg";
import itens from "../public/game-icons/standing-potion.svg";
import dados from "../public/game-icons/rolling-dices.svg";


import { Button } from 'primereact/button';
import { Dialog } from 'primereact/dialog';

const Personagem = () => {
const [isEquipModalOpen, setIsEquipModalOpen] = useState(false);
const [isItensModalOpen, setIsItensModalOpen] = useState(false);
const [isMochilaModalOpen, setIsMochilaModalOpen] = useState(false);
const [isRolarDadosModalOpen, setIsRolarDadosModalOpen] = useState(false);

const handleOpenEquipModal = () => setIsEquipModalOpen(true);
const handleCloseEquipModal = () => setIsEquipModalOpen(false);

const handleOpenItensModal = () => setIsItensModalOpen(true);
const handleCloseItensModal = () => setIsItensModalOpen(false);

const handleOpenMochilaModal = () => setIsMochilaModalOpen(true);
const handleCloseMochilaModal = () => setIsMochilaModalOpen(false);

const handleOpenRolarDadosModal = () => setIsRolarDadosModalOpen(true);
const handleCloseRolarDadosModal = () => setIsRolarDadosModalOpen(false);

  const herois = [
    { img: mulherVerde, link: "#" },
    { img: magoazul, link: "#" },
    { img: cavaleiro, link: "#" },
    { img: tourobandido, link: "#" },
    { img: cherife, link: "#" },
    { img: vice, link: "#" },
  ];

const atributos = [
  { nomeAtributo: "Força", valorAtributo: 1 },
  { nomeAtributo: "Destreza", valorAtributo: 1 },
  { nomeAtributo: "Constituição", valorAtributo: 1 },
  { nomeAtributo: "Inteligência", valorAtributo: 1 },
  { nomeAtributo: "Percepção", valorAtributo: 1 },
  { nomeAtributo: "Carisma", valorAtributo: 1 },
  { nomeAtributo: "Agilidade", valorAtributo: 1 },
  { nomeAtributo: "Vigor", valorAtributo: 1 },
  { nomeAtributo: "Raciocínio", valorAtributo: 1 },
  { nomeAtributo: "Sabedoria", valorAtributo: 1 },
];

const cores = [
  { Branca: 10 },
  { Azul: 100 },
  { Preta: 10 },
  { Vermelha: 10 },
  { Verde: 10 },
];

    return (
      
      <div className='card' style={{ 
        display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center',
        height: '90vh' , width:'100vh', maxWidth:'100%', minWidth:'800px',  
        backgroundColor:'gray',
        // border:'1px solid black'
      }}>
              <h1>Arcanista Caelum</h1>
            
            <div style={{
                display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
            backgroundColor:'gray',
            //  border:'1px solid black',
            maxHeight:'300px',

            }}>
                {/* Moldura ficha */}
                <MolduraPersonagem imagem={magoazul} valquiria={false}/>
                
                {/* Atributos */}
                <InfoPersonagem atributos={atributos} />

                {/* Alinhamento */}
                {/* <AlinhamentoChart cores={cores} /> */}

            </div>

            <HeroisCarousel herois={herois} />

            <div style={{
              display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
              backgroundColor:'gray',
              // border:'1px solid black',
                maxHeight:'300px',
                width:'100%',
              }}>
                <Button 
                label="Equipamentos" 
                style={{color: 'black'}}
                size="large" 
                className="p-button-text" 
                onClick={handleOpenEquipModal}
                
                icon={
                  <img src={equip} alt="Equipamentos" width="20" style={{ marginRight: 8, verticalAlign: 'middle' }} />
                } 
                />
                <Dialog header="Equipamentos" visible={isEquipModalOpen} style={{ width: '50vw' }} onHide={handleCloseEquipModal}>
                <h1>EQUIPAMENTOS</h1>
                <p>Lorem</p>
                </Dialog>  

                <Button 
                label="Habilidades" 
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
                onClick={handleOpenItensModal}
                />
                <Dialog header="Habilidades" visible={isItensModalOpen} style={{ width: '50vw' }} onHide={handleCloseItensModal}>
                <h1>Habilidades</h1>
                <p>Lorem</p>
                </Dialog>  

                {/* <Button 
                style={{color: 'black'}}
                label="Mochila" 
                icon={
                  <img
                  src={mochila}
                  alt="Mochila"
                  width="20"
                  style={{ marginRight: 8, verticalAlign: 'middle' }}
                  />
                } 
                size="large" 
                className="p-button-text"
                onClick={handleOpenMochilaModal}
                />
                <Dialog header="Mochila" visible={isMochilaModalOpen} style={{ width: '50vw' }} onHide={handleCloseMochilaModal}>
                <h1>MOCHILA</h1>
                <p>Lorem</p>
                </Dialog>   */}

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
            {/* <h1>Welcome to RPG Ficha</h1> */}

            </div>
        </div>
    );
};

export default Personagem;