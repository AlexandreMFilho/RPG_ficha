// AtributosCard.jsx

import React, { useState } from "react";
import { Card } from "primereact/card";
import { Button } from 'primereact/button';
import { InputText } from "primereact/inputtext";
import { Dialog } from 'primereact/dialog';

const AtributosCard = ({ atributos = [], onAtributoChange }) => {
    const [isAtributosModalOpen, setIsAtributosModalOpen] = useState(false);

    const handleOpenAtributosModal = () => setIsAtributosModalOpen(true);
    const handleCloseAtributosModal = () => setIsAtributosModalOpen(false);

    const handleIncrement = (nomeAtributo) => {
        const atributo = atributos.find(a => a.nomeAtributo === nomeAtributo);
        if (atributo) {
            onAtributoChange(nomeAtributo, (atributo.valorAtributo || 0) + 1);
        }
    };

    const handleDecrement = (nomeAtributo) => {
        const atributo = atributos.find(a => a.nomeAtributo === nomeAtributo);
        if (atributo) {
            onAtributoChange(nomeAtributo, (atributo.valorAtributo || 0) - 1);
        }
    };

    const handleInputChange = (e, nomeAtributo) => {
        const novoValor = parseInt(e.target.value, 10);
        if (!isNaN(novoValor)) {
            onAtributoChange(nomeAtributo, novoValor);
        }
    };
    
    // Organiza os atributos em pares para a tabela
    const pares = [];
    for (let i = 0; i < atributos.length; i += 2) {
        pares.push([atributos[i], atributos[i + 1]]);
    }

    return (
        <>
            <Card
                title="Atributos"
                style={{
                    height: "100%",
                    width: "300px",
                    maxHeight: "300px",
                    position: 'relative' // Necessário para posicionar o botão de edição
                }}
            >
                {/* Botão para abrir o modal de edição */}
                <Button 
                    icon="pi pi-pencil" 
                    className="p-button-rounded p-button-text p-button-sm"
                    style={{ position: 'absolute', top: '10px', right: '10px' }}
                    onClick={handleOpenAtributosModal}
                />

                {/* Tabela de visualização dos atributos */}
                <table style={{ borderCollapse: "collapse" }}>
                    <tbody>
                        {pares.length > 0 ? (
                            pares.map((par, index) => (
                                <tr key={index}>
                                    <td style={{ verticalAlign: "middle" }}>
                                        <strong>{par[0]?.nomeAtributo}:</strong>{" "}
                                        <span>{par[0]?.valorAtributo}</span>
                                    </td>
                                    <td style={{ verticalAlign: "middle" }}>
                                        {par[1] && (
                                            <>
                                                <strong>{par[1]?.nomeAtributo}:</strong>{" "}
                                                <span>{par[1]?.valorAtributo}</span>
                                            </>
                                        )}
                                    </td>
                                </tr>
                            ))
                        ) : (
                            <tr>
                                <td colSpan="2" style={{ textAlign: "center" }}>
                                    Nenhum atributo disponível.
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </Card>

            {/* O modal de edição, que agora pertence a este componente */}
            <Dialog 
                header="Editar Atributos" 
                visible={isAtributosModalOpen} 
                style={{ width: '50vw' }} 
                onHide={handleCloseAtributosModal}
            >
                {/* Tabela de atributos com botões de edição */}
                <table style={{ borderCollapse: "collapse", width: '100%' }}>
                    <tbody>
                        {pares.length > 0 ? (
                            pares.map((par, index) => (
                                <tr key={index}>
                                    <td style={{ verticalAlign: "middle" }}>
                                        <strong>{par[0]?.nomeAtributo}:</strong>{" "}
                                        <div className="p-inputgroup" style={{ display: 'inline-flex' }}>
                                            <Button icon="pi pi-minus" className="p-button-secondary p-button-sm" onClick={() => handleDecrement(par[0]?.nomeAtributo)} />
                                            <InputText value={par[0]?.valorAtributo || 0} onChange={(e) => handleInputChange(e, par[0]?.nomeAtributo)} style={{ width: "40px", textAlign: "center" }} />
                                            <Button icon="pi pi-plus" className="p-button-secondary p-button-sm" onClick={() => handleIncrement(par[0]?.nomeAtributo)} />
                                        </div>
                                    </td>
                                    <td style={{ verticalAlign: "middle" }}>
                                        {par[1] && (
                                            <>
                                                <strong>{par[1]?.nomeAtributo}:</strong>{" "}
                                                <div className="p-inputgroup" style={{ display: 'inline-flex' }}>
                                                    <Button icon="pi pi-minus" className="p-button-secondary p-button-sm" onClick={() => handleDecrement(par[1]?.nomeAtributo)} />
                                                    <InputText value={par[1]?.valorAtributo || 0} onChange={(e) => handleInputChange(e, par[1]?.nomeAtributo)} style={{ width: "40px", textAlign: "center" }} />
                                                    <Button icon="pi pi-plus" className="p-button-secondary p-button-sm" onClick={() => handleIncrement(par[1]?.nomeAtributo)} />
                                                </div>
                                            </>
                                        )}
                                    </td>
                                </tr>
                            ))
                        ) : (
                            <tr>
                                <td colSpan="2" style={{ textAlign: "center" }}>Nenhum atributo disponível.</td>
                            </tr>
                        )}
                    </tbody>
                </table>
                <div style={{ textAlign: 'right', marginTop: '20px' }}>
                    <Button label="Fechar" onClick={handleCloseAtributosModal} />
                </div>
            </Dialog>
        </>
    );
};

export default AtributosCard;