import React from 'react';
import { Card } from 'primereact/card';
import { InputText } from 'primereact/inputtext';
import './InfoPersonagem.css'; // Vamos criar este arquivo de CSS a seguir

const InfoPersonagem = () => {

    return (
        <Card className="info-personagem-card">
            <div className="p-grid p-fluid">
                {/* Linha 1 */}
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="classe">Classe</label>
                        <InputText id="classe" type="text" />
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-grid p-fluid">
                        <div className="p-col-6 p-field">
                            <label htmlFor="nivel">Nível</label>
                            <InputText id="nivel" type="text" />
                        </div>
                        <div className="p-col-6 p-field">
                            <label htmlFor="sexo">Sexo</label>
                            <InputText id="sexo" type="text" />
                        </div>
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="altura">Altura</label>
                        <InputText id="altura" type="text" />
                    </div>
                </div>

                {/* Linha 2 */}
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="raca">Raça</label>
                        <InputText id="raca" type="text" />
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="deslocamento">Deslocamento</label>
                        <InputText id="deslocamento" type="text" />
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="peso">Peso</label>
                        <InputText id="peso" type="text" />
                    </div>
                </div>

                {/* Linha 3 */}
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="tendencia">Tendência</label>
                        <InputText id="tendencia" type="text" />
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="bonus-base">Bônus Base</label>
                        <InputText id="bonus-base" type="text" />
                    </div>
                </div>
                <div className="p-col-4">
                    <div className="p-field">
                        <label htmlFor="idade">Idade</label>
                        <InputText id="idade" type="text" />
                    </div>
                </div>
            </div>
        </Card>
    );
};

export default InfoPersonagem;