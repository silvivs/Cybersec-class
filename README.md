# 🏢 Yaripo Corp - Vulnerable Lab Infrastructure

Este é um laboratório de cibersegurança focado em aplicações web, simulando o portal institucional da **Yaripo Corporation**. O objetivo deste projeto é fornecer um ambiente controlado para prática de técnicas de enumeração, exploração e pós-exploração.

## 🛠️ Tecnologias Utilizadas
* **Docker & Docker Compose**: Orquestração do ambiente.
* **Apache/PHP**: Servidor web e motor da aplicação.
* **MySQL**: Banco de dados para persistência de credenciais.

---

## 🏗️ Arquitetura do Laboratório
O ambiente é composto por dois containers interligados em uma rede isolada:
1.  **Web Server (Frontend/Backend)**: Expõe as funcionalidades de login e upload.
2.  **Database (Backend)**: Armazena tabelas de usuários e segredos corporativos.

---

## 🚀 Como subir o ambiente
Certifique-se de ter o **Docker** e o **Docker Compose** instalados na sua VM de ataque (Kali/Parrot/Ubuntu).

1. Clone este repositório:
   ```bash
   git clone [https://github.com/silvivs/Cybersec-class.git](https://github.com/silvivs/Cybersec-class.git)
   cd Cybersec-class