# 📇 Contact Manager
Aplicação web para cadastro e gerenciamento de contatos, desenvolvida em Laravel 11, com Tailwind CSS, Vite, Livewire e testes com PHPUnit.


### 🚀 Requisitos
PHP 8.2+

Composer

Node.js (16+)

NPM ou Yarn

SQLite / MySQL / PostgreSQL


### ⚙️ Instalação
```bash
# Clone o projeto
git clone git@github.com:romulo2735/junior-backend-test.git
cd seu-repo

# Instale as dependências PHP
composer install

# Instale as dependências JS
npm install

# Copie e configure o .env
cp .env.example .env
php artisan key:generate
```

### 🧩 Configuração do banco de dados
Edite o arquivo .env com suas configurações:
```ini
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```

Para SQLite, crie o arquivo vazio:
```bash
touch database/database.sqlite
```

### 🛠️ Migração e seeders
```bash
php artisan migrate --seed
```

### 💻 Executando o projeto
```bash
# Compile os assets
npm run dev

# Inicie o servidor Laravel
php artisan serve
```
http://127.0.0.1:8000/contacts

### 🧪 Testes
```bash
# Executar testes
php artisan test

# Rodar apenas Feature tests
php artisan test --testsuite=Feature
```

- O projeto já possui testes para criar, editar, excluir e validar contatos.

### 🧱 Estrutura do projeto
```sql
├── app/
│   ├── Http/
│   │   └── Controllers/Contacts/ (CRUD por controllers __invoke)
│   ├── Models/Contact.php
├── resources/
│   └── views/
│       └── contacts/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── form.blade.php
├── routes/
│   └── web.php
├── tests/
│   └── Feature/
│       └── ContactsTest.php
```
