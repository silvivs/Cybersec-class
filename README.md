# Yaripo Corp - Vulnerable Lab Infrastructure

Este é um laboratório de cibersegurança focado em aplicações web, simulando o portal institucional da **Yaripo Corporation**. O projeto fornece um ambiente controlado para a prática de técnicas de reconhecimento, exploração de vulnerabilidades web e pós-exploração.

## Tecnologias e Melhorias

* **Docker & Docker Compose**: Orquestração completa do ambiente.
* **Suporte Multi-Arquitetura**: Configurado para funcionar nativamente em arquiteturas **x86** e **ARM** (Apple Silicon M1/M2).
* **Auto-Provisioning**: O banco de dados e as extensões PHP necessárias (MySQLi) são instalados e configurados automaticamente no primeiro boot.
* **Vulnerabilidades Plantadas**: SQL Injection (Bypass de Autenticação) e Unrestricted File Upload (RCE).

## Arquitetura do Laboratório

O ambiente é composto por dois containers interligados em uma rede isolada:
* **Web Server (yaripo_web)**: Servidor Apache/PHP 8.2 que expõe as funcionalidades de login e upload.
* **Database (yaripo_db)**: Instância MariaDB que armazena credenciais e segredos corporativos.

## Como subir o ambiente

### 1. Pré-requisitos
Certifique-se de ter o **Docker** e o **Docker Compose** instalados em sua máquina host ou VM.

### 2. Instalação e Inicialização
```bash
# Clone o repositório
git clone [https://github.com/silvivs/Cybersec-class.git](https://github.com/silvivs/Cybersec-class.git)
cd Cybersec-class

# Ajuste as permissões da pasta de uploads (Essencial para o sucesso do RCE)
sudo chmod -R 777 web/

# Suba os containers
docker-compose up -d