import { Button } from 'primereact/button';
import { Dialog } from 'primereact/dialog';
import React, { useState } from 'react';

const CartaMana = ({ imagem, valor: valorInicial, color }) => {
  const [valor, setValor] = useState(valorInicial);
  const [visible, setVisible] = useState(false);

  const incrementar = () => {
    setValor((prev) => prev + 1);
  };

  const decrementar = () => {
    if (valor > 0) {
      setValor((prev) => prev - 1);
    }
  };

  return (
    <div style={{ position: 'relative', display: 'inline-block', margin: '5px' }}>
      {/* Imagem da Carta */}
      <img
        src={`/imgs/${imagem}`}
        alt={`Mana ${imagem}`}
        width="40"
        style={{ borderRadius: '8px' }}
      />

      {/* Valor sobreposto */}
      <span
        onClick={() => setVisible(true)}
        style={{
          position: 'absolute',
          top: 0,
          left: '50%',
          transform: 'translateX(-50%)',
          fontSize: '26px',
          fontWeight: 'bold',
          color: color,
          textShadow: `0 0 0.3em ${color}, 0 0 0.3em ${color}`,
          WebkitTextStroke: '1px black',
          cursor: 'pointer'
        }}
        onMouseOver={(e) => {
          e.target.style.color = 'white';
          e.target.style.textShadow = `0 0 0.2em ${color}, 0 0 0.3em ${color}`;
        }}
        onMouseOut={(e) => {
          e.target.style.color = color;
          e.target.style.textShadow = `0 0 0.2em ${color}, 0 0 0.3em ${color}`;
        }}
      >
        {valor}
      </span>

      {/* Modal do PrimeReact */}
      <Dialog
        visible={visible}
        onHide={() => setVisible(false)}
        header={`Gerenciar Mana: ${imagem}`}
        style={{ width: '300px' }}
        className="p-fluid"
      >
        <div style={{ textAlign: 'center' }}>
          <img
            src={`/imgs/${imagem}`}
            alt={`Imagem da Mana ${imagem}`}
            style={{ width: '200px', marginBottom: '20px' }}
          />
          <h3 style={{ color: color }}>{valor}</h3>
          <div style={{ marginBottom: '20px' }}>
            <Button
              icon="pi pi-plus"
              label="Aumentar"
              onClick={incrementar}
              className="p-button-success mr-2"
            />
            <Button
              icon="pi pi-minus"
              label="Diminuir"
              onClick={decrementar}
              className="p-button-danger ml-2"
              disabled={valor <= 0}
            />
          </div>
          <Button label="Fechar" onClick={() => setVisible(false)} />
        </div>
      </Dialog>
    </div>
  );
};

export default CartaMana;