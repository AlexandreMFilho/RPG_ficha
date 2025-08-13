import React, { useState } from 'react';
import MolduraPersonagem from '../components/MolduraPersonagem';
import max from '../imgs/max.jpg';
import AtributosCard from "../components/AtributosCard";
import AlinhamentoChart from "../components/AlinhamentoChart";
import HeroisCarousel from "../components/HeroisCarousel";
import magoazul from "../src/assets/imgs/mago_azul.jpeg";
import cavaleiro from "../src/assets/imgs/cavaleiro_azul.jpeg";
import mulherVerde from "../src/assets/imgs/mulher_verde.jpg";
import tourobandido from "../src/assets/imgs/touro_bandido.jpeg";
import cherife from "../src/assets/imgs/touro_cherife.jpeg";
import vice from "../src/assets/imgs/touro_vice.jpeg";
import mochila from "../public/game-icons/backpack.svg";
import dados from "../public/game-icons/rolling-dices.svg";
import { Button } from 'primereact/button';
import { Dialog } from 'primereact/dialog';

const Ficha = () => {
    // Apenas os estados dos outros modais permanecem aqui
    const [isMochilaModalOpen, setIsMochilaModalOpen] = useState(false);
    const [isRolarDadosModalOpen, setIsRolarDadosModalOpen] = useState(false);

    // Funções para abrir/fechar os modais...
    const handleOpenMochilaModal = () => setIsMochilaModalOpen(true);
    const handleCloseMochilaModal = () => setIsMochilaModalOpen(false);
    const handleOpenRolarDadosModal = () => setIsRolarDadosModalOpen(true);
    const handleCloseRolarDadosModal = () => setIsRolarDadosModalOpen(false);

    const [atributos, setAtributos] = useState([
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
    ]);

    const cores = [
        { Branca: 10 },
        { Azul: 100 },
        { Preta: 10 },
        { Vermelha: 10 },
        { Verde: 10 },
    ];
    
    // Esta função é crucial e será passada como prop para o AtributosCard
    const handleAtributoChange = (nome, novoValor) => {
        setAtributos(
            atributos.map((atributo) =>
                atributo.nomeAtributo === nome ? { ...atributo, valorAtributo: novoValor } : atributo
            )
        );
    };

    const herois = [
        { img: magoazul, link: "personagem/1" },
        { img: cavaleiro, link: "personagem/2" },
        { img: mulherVerde, link: "personagem/3" },
        { img: tourobandido, link: "personagem/4" },
        { img: cherife, link: "personagem/5" },
        { img: vice, link: "personagem/6" },
    ];
    
    return (
        <div className='card' style={{ 
            display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center',
            height: '90vh' , width:'100vh', maxWidth:'100%', minWidth:'800px',  
            backgroundColor:'gray',
        }}>
            <h1>MaxMillium Maximus</h1>
            <div style={{
                display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
                backgroundColor:'gray',
                maxHeight:'300px',
            }}>
                <MolduraPersonagem imagem={max} valquiria={true}/>
                
                {/* O AtributosCard agora tem seu próprio botão de edição e modal */}
                <AtributosCard atributos={atributos} onAtributoChange={handleAtributoChange}/>
                
                <AlinhamentoChart cores={cores} />
            </div>

            <HeroisCarousel herois={herois} />

            <div style={{
                display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-evenly',
                backgroundColor:'gray',
                maxHeight:'300px',
                width:'100%',
            }}>
                {/* Outros botões e seus modais */}
                <Button 
                    style={{color: 'black'}}
                    label="Mochila" 
                    icon={
                        <img src={mochila} alt="Mochila" width="20" style={{ marginRight: 8, verticalAlign: 'middle' }}/>
                    } 
                    size="large" 
                    className="p-button-text"
                    onClick={handleOpenMochilaModal}
                />
                <Dialog header="Mochila" visible={isMochilaModalOpen} style={{ width: '50vw' }} onHide={handleCloseMochilaModal}>
                    <h1>MOCHILA</h1>
                    <p>Lorem</p>
                </Dialog>

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
        </div>
    );
};

export default Ficha;