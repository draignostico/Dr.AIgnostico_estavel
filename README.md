Dr.AIgnostico

Sistema de consulta e análise de documentos médicos usando RAG (Retrieval-Augmented Generation) com Python e embeddings.

Requisitos

Antes de rodar o projeto, você precisa instalar:

Python 3.11 ou 3.13
https://www.python.org/ftp/python/3.11.7/python-3.11.7-amd64.exe

⚠️ Python 3.14 não é compatível por causa do ChromaDB.

Ollama CLI
https://ollama.com/download

Verifique se o Python está funcionando:

python --version


Verifique se o Ollama está funcionando:

ollama --version


Se estiver funcionando, você pode puxar um modelo, por exemplo:

ollama pull llama3

Passos para rodar o projeto
1. Abrir o terminal e navegar até a pasta do projeto
cd C:\xampp\htdocs\Dr.AIgnostico

2. Criar e ativar o ambiente virtual dentro do backend
cd backend
python -m venv venv
venv\Scripts\Activate.ps1


⚠️ Se der erro no PowerShell sobre execução de scripts, rode:

Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser

3. Instalar dependências
pip install -r requirements.txt

4. Gerar os embeddings (vetores) dos documentos
python vetorizador.py


Sempre que adicionar ou alterar documentos dentro de backend\dados, rode este comando novamente.

5. Rodar a aplicação
python run.py

6. Acessar a aplicação

API (Swagger): http://127.0.0.1:5000/swagger

Front-end: http://127.0.0.1:5000/frontend
