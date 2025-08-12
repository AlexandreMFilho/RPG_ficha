import React from 'react';
import { Card } from 'primereact/card';
import { InputText } from 'primereact/inputtext';

const InfoPersonagem = () => {

    return (
        <Card>
            <div style={{ display: 'flex', flexDirection: 'row', alignItems: 'center', justifyContent: 'center'}}>
                <div>
                    <div>
                        <label htmlFor="classe">Classe</label>
                        <InputText id="classe" type="text"/>
                    </div>
                    <div>
                        <label htmlFor="raça">Raça</label>
                        <InputText id="raça" type="text" />
                    </div>
                    <div>
                        <label htmlFor="sexo">Tendência</label>
                        <InputText id="tendencia" type="text" />
                    </div>
                </div>
                <div >
                    <div>
                        <label htmlFor="nivel">Nivel</label>
                        <InputText id="nivel" type="text" style={{ width: '20%' }}/>
                    </div>
                    <div>
                        <label htmlFor="deslocamento">Deslocamento</label>
                        <InputText id="deslocamento" type="text" />
                    </div>
                    <div>
                        <label htmlFor="bonus_base">Bônus Base</label>
                        <InputText id="bonus_base" type="text" />
                    </div>
                </div>
                <div >
                    <div>
                        <label htmlFor="altura">Altura</label>
                        <InputText id="altura" type="text" />
                    </div>
                    <div>
                        <label htmlFor="peso">Peso</label>
                        <InputText id="peso" type="text" />
                    </div>
                    <div>
                        <label htmlFor="idade">Idade</label>
                        <InputText id="idade" type="text" />
                    </div>
                    <div>
                        <label htmlFor="sexo">Sexo</label>
                        <InputText id="sexo" type="text" />
                    </div>

                </div>

            </div>

        </Card>
    );
};

export default InfoPersonagem;
