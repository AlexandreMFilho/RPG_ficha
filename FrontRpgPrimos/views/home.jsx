import React from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
import AtributosCard from "../components/AtributosCard";

const Home = () => {


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
                <AtributosCard atributos={atributos} />

            </div>

            <div>
                {/* <MolduraPersonagem imagem={max}/> */}
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