import React from 'react';
import CartaMana from './CartaMana';

const MolduraPersonagem = ({ imagem }) => {
  return (
    <div style={{
      display: 'flex',
      flexDirection: 'column',
      alignItems: 'center',
      justifyContent: 'flex-end',
      backgroundColor: 'rgba(0, 4, 255, 0.77)',
      borderRadius: '8px',
       
      minHeight: '300px',
      minWidth: '300px',
      // margin: '10px',
      padding: '10px',
      position: 'relative'
    }}>
      {/* Imagem da Valquíria */}
      <div style={{
        display: 'flex',
        position: 'relative',
        // border: '1px solid gray',
        height: '280px',
        width: '100%',
        borderRadius: '8px'
      }}>
        <img src={`${imagem}`} alt="Imagem da Valquíria" style={{ width: '100%', borderRadius: '8px' }} />
      </div>

      {/* Ícones de Mana */}
      <div style={{
        position: 'absolute',
        width: '100%',
        bottom: '5px',
        left: '50%',
        transform: 'translateX(-50%)',
        display: 'flex',
        justifyContent: 'center',
        // gap: '5px'
      }}>
        <CartaMana imagem="plains.jpg" valor={1} color="rgb(255, 255, 255)" />
        <CartaMana imagem="island.jpg" valor={1} color="rgb(34, 56, 255)" />
        <CartaMana imagem="swamp.jpg" valor={1} color="rgb(104, 104, 104)" />
        <CartaMana imagem="montain.jpg" valor={1} color="rgb(255, 45, 45)" />
        <CartaMana imagem="forest.jpg" valor={1} color="rgb(45, 255, 94)" />
        <CartaMana imagem="colorless.jpg" valor={1} color="rgba(255, 255, 255, 0.34)" />
      </div>
    </div>
  );
};

export default MolduraPersonagem;