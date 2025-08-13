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
        width="30"
        onClick={() => setVisible(true)}
        style={{
          cursor: 'pointer'}}
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
          WebkitTextFillColor: color,
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
        header="Ajustar Mana"
        footer={
          <Button className="flex" label="Close" severity="secondary" onClick={() => setVisible(false)} style={{margin:"10px"}}/>
        }
        style={{ width: '300px' }}
      >
        <div style={{ textAlign: 'center'}}>
          {/* Imagem da Carta */}
          <img src={`/imgs/${imagem}`} alt={`Mana ${imagem}`} style={{ width: '200px'}} />

          {/* Botões de Aumentar/Diminuir */}
          <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center', marginTop: '-100px' , minWidth: '100%', gap: '15px', }}>
            <Button icon="pi pi-minus" onClick={decrementar} className="p-button-danger" disabled={valor <= 0} severity="danger" />
            <div style={{ fontSize: '36px', fontWeight: 'bold', color: color, WebkitTextStroke: '1px black', WebkitTextFillColor: color }}>{valor}</div>
            <Button icon="pi pi-plus" onClick={incrementar} className="p-button-success btn-green" severity="success"/>
          </div>
        </div>
      </Dialog>
    </div>
  );
};

export default CartaMana;