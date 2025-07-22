# React + Vite

This template provides a minimal setup to get React working in Vite with HMR and some ESLint rules.

Currently, two official plugins are available:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react/README.md) uses [Babel](https://babeljs.io/) for Fast Refresh
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react-swc) uses [SWC](https://swc.rs/) for Fast Refresh

## 🛠️ Guia de Instalação e Execução do Projeto FrontRpgPrimos

### ✅ Pré-requisitos

- **Node.js** versão **18 ou superior** (recomendada: LTS)
- **npm** versão compatível (geralmente instalada junto com o Node)
- **Ubuntu/Linux** (ou adaptável para outras distros)

---

### 📦 Instalando o Node.js com NVM (Node Version Manager)

```bash
# Remover versão antiga do Node.js, se necessário
sudo apt remove nodejs -y

# Instalar o NVM (Node Version Manager)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash

# Ativar o NVM no terminal atual
export NVM_DIR="$([ -z "${XDG_CONFIG_HOME-}" ] && printf %s "${HOME}/.nvm" || printf %s "${XDG_CONFIG_HOME}/nvm")"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"

# Instalar a versão LTS mais recente do Node.js
nvm install --lts

# Usar essa versão como padrão
nvm use --lts
nvm alias default lts/*
```

Verifique se tudo está ok:

```bash
node -v
npm -v
```

---

### 🚀 Instalando dependências e rodando o projeto

No diretório raiz do projeto (`FrontRpgPrimos`), execute:

```bash
# Remover dependências antigas (se necessário)
rm -rf node_modules package-lock.json

# Instalar dependências
npm install

# Rodar servidor de desenvolvimento
npm run dev
```

---

### 🧠 Dica

Caso apareça erro como `vite: not found` ou `Unexpected reserved word`, certifique-se de que o Node.js está atualizado (v18 ou superior).

---
