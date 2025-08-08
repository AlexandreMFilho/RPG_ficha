import React from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
import AtributosCard from "../components/AtributosCard";
import AlinhamentoChart from "../components/AlinhamentoChart";
import HeroisCarousel from "../components/HeroisCarousel";
import mulherVerde from "../src/assets/imgs/mulher_verde.jpg";

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

const Home = () => {

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
              <h1>MaxMillium Maximus</h1>
            
            <div style={{
                display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
            backgroundColor:'gray',
            //  border:'1px solid black',
            maxHeight:'300px',

            }}>
                {/* Moldura ficha */}
                <MolduraPersonagem imagem={max}/>
                
                {/* Atributos */}
                <AtributosCard atributos={atributos} />

                {/* Alinhamento */}
                <AlinhamentoChart cores={cores} />

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
              icon={
                <img
                src={equip}
                alt="Equipamentos"
                width="20"
                style={{ marginRight: 8, verticalAlign: 'middle' }}
                />
              } 
              size="large" 
              className="p-button-text"
              />
              
              <Button 
              label="Itens" 
              icon={
                <img
                src={itens}
                alt="Equipamentos"
                width="20"
                style={{ marginRight: 8, verticalAlign: 'middle' }}
                />
              } 
              size="large" 
              className="p-button-text"
              />

              <Button 
              label="Mochila" 
              icon={
                <img
                src={mochila}
                alt="Equipamentos"
                width="20"
                style={{ marginRight: 8, verticalAlign: 'middle' }}
                />
              } 
              size="large" 
              className="p-button-text"
              />

              <Button 
              label="Rolar Dados" 
              icon={
                <img
                src={dados}
                alt="Equipamentos"
                width="20"
                style={{ marginRight: 8, verticalAlign: 'middle' }}
                />
              } 
              size="large" 
              className="p-button-text"
              />

            </div>
            <div>
              {/* <MolduraPersonagem imagem={max}/> */}
            {/* <h1>Welcome to RPG Ficha</h1> */}

            </div>
        </div>
    );
};

export default Home;