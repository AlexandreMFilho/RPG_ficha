// Modal.jsx
import React from 'react';
import './Modal.css'; // Iremos criar este arquivo CSS a seguir

const Modal = ({ isOpen, onClose, children }) => {
    // Se o modal não estiver aberto, não renderize nada
    if (!isOpen) return null;

    return (
        // O "overlay" (fundo escurecido) do modal
        <div className="modal-overlay" onClick={onClose}>
            {/* O conteúdo do modal em si */}
            {/* O onClick={e => e.stopPropagation()} impede que o clique no conteúdo feche o modal */}
            <div className="modal-content" onClick={e => e.stopPropagation()}>
                {/* Botão de fechar */}
                <button className="modal-close-button" onClick={onClose}>
                    &times;
                </button>
                {/* Conteúdo dinâmico do modal */}
                {children}
            </div>
        </div>
    );
};

export default Modal;