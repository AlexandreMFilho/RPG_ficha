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

            <div style={{
                display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
            backgroundColor:'gray',
            //  border:'1px solid black',
            maxHeight:'300px',

            }}>
                {/* <Herois */}
                 <HeroisCarousel herois={herois} />
            <h1>Welcome to RPG Ficha</h1>

            </div>
            <div>
                {/* <MolduraPersonagem imagem={max}/> */}
            <h1>Welcome to RPG Ficha</h1>

            </div>
        </div>
    );
};

export default Home;