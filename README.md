# 📘 Equity Link – Fullstack Test (Laravel + ReactJS)

Prototipo de aplicación **fullstack** desarrollado como ejercicio técnico.  
El objetivo es demostrar **arquitectura clara, buenas prácticas de desarrollo, principios SOLID y visión de escalabilidad**, más allá del diseño visual.  

---

## 🚀 Tecnologías principales

### Backend
- Laravel 11 – Framework PHP  
- Laravel Sanctum – Autenticación vía tokens  
- Spatie Laravel Permission – Roles y permisos  
- PHPStan + Larastan – Análisis estático  
- Pest – Testing  

### Frontend
- React 18 + Vite – Frontend SPA  
- React Router – Rutas  
- Axios – Consumo de API  
- React Query – Cache y sincronización de datos  
- React Toastify – Manejo de errores  
- SweetAlert2 – Alertas de éxito  
- TailwindCSS – Estilos rápidos y consistentes  

### Infraestructura
- MySQL – Base de datos relacional  
- Docker (opcional) – Entorno reproducible  
- Laragon – Entorno local (PHP/MySQL/Composer)  

---

## 🏗️ Arquitectura del sistema

```mermaid
flowchart LR
    A[ReactJS_Frontend] -- Axios + Token --> B[Laravel_API]
    B -- Sanctum --> C[(MySQL)]
    B -- Spatie_Roles_Permisos --> C
    B -- Consulta_tipo_cambio --> D[API_DOF]

 ```









📂 Flujo de carga de facturas
 ```mermaid
sequenceDiagram
    participant U as Usuario
    participant F as Frontend_React
    participant A as API_Laravel
    participant DB as MySQL
    participant D as API_DOF

    U->>F: Subir XML
    F->>A: POST /api/invoices (con archivo)
    A->>D: Consultar tipo de cambio
    A->>DB: Guardar datos (UUID, folio, emisor, receptor, total, moneda, tipoCambio)
    A-->>F: Respuesta OK
    F-->>U: SweetAlert "Factura cargada con éxito"

 ```
📂 Estructura de carpetas
Backend
backend/
  app/
    Actions/Invoices/ParseInvoiceXml.php
    Services/DofExchangeRateService.php
    Http/Controllers/AuthController.php
    Http/Controllers/InvoiceController.php
    Http/Requests/LoginRequest.php
    Http/Requests/InvoiceUploadRequest.php
    Http/Resources/InvoiceResource.php
  database/migrations/
  database/seeders/RoleSeeder.php
  routes/api.php
  tests/Feature/

Frontend
frontend/
  src/
    components/
      Sidebar.jsx
      Header.jsx
      InvoiceTable.jsx
      UploadForm.jsx
    pages/
      Login.jsx
      Dashboard.jsx
      Invoices.jsx
      Users.jsx
    context/
      AuthContext.jsx
    api/
      axiosClient.js
    hooks/
      useAuth.js
      useInvoices.js

✨ Features implementadas

🔑 Autenticación con email y contraseña vía Laravel Sanctum

📊 Dashboard con barra lateral + cabecera mostrando nombre de usuario

🔒 Roles y permisos con Spatie:

view-invoices → ver sección de facturas

upload-invoices → subir facturas

👥 Administración de usuarios y permisos (sección protegida)

📑 Facturas (XML Upload):

Extrae UUID, folio, emisor, receptor, moneda, total

Si no hay folio, usa última parte del UUID

Consulta tipo de cambio al DOF

Guarda en tabla invoices

⚠️ Manejo de errores → Toastify

✅ Mensajes de éxito → SweetAlert2

🧪 Testing → Pest (auth, roles, invoices)

🔍 Análisis estático → PHPStan (nivel 6)

🔑 Setup rápido
Backend
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

Frontend
cd frontend
npm install
npm run dev

Credenciales demo

Admin: admin@demo.com / password

User: user@demo.com / password

🧪 Testing & QA
Backend
php artisan test
vendor/bin/phpstan analyse

Frontend
npm run lint

🛣️ Roadmap futuro

 Paginación y filtros en tabla de facturas

 Exportar facturas a Excel/PDF

 Multi-idioma (i18n)

 Notificaciones en tiempo real (WebSockets)

 Integración con sistema de usuarios corporativos (LDAP/SSO)

📌 Notas del autor

Este repositorio se entrega como monorepo (backend y frontend en la misma estructura) para facilitar la evaluación.
En un entorno de producción real, cada módulo se gestionaría en repos separados con pipelines de CI/CD independientes.

🛑 .gitignore
# Laravel
/backend/vendor
/backend/node_modules
/backend/storage/*.key
/backend/storage/framework/cache/*
/backend/storage/framework/sessions/*
/backend/storage/framework/views/*
/backend/.env

# React
/frontend/node_modules
/frontend/dist

# General
.DS_Store
npm-debug.log*
yarn-debug.log*
yarn-error.log*
.idea
.vscode
