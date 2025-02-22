<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📄 **Reto Técnico - Desarrollador Backend IDBI**

¡Hola! 👋 Este es el resultado del desafío técnico para la posición de **Desarrollador Backend** en **IDBI** 🏢.

En este proyecto se priorizó la implementación de un sistema seguro de autenticación y autorización, seguido de la creación de un CRUD de productos funcional, utilizando el stack tecnológico solicitado y buenas prácticas de desarrollo.

---

## 🚀 **1. Tecnologías Utilizadas**

El proyecto fue desarrollado con el siguiente stack tecnológico:

- **Framework/Lenguaje:** PHP 8.2 / Laravel 10
- **Base de datos:** MySQL 8.0
- **Servidor web:** Nginx
- **Control de versiones:** Git (flujo de trabajo con Git Flow)
- **Autenticación:** Laravel Sanctum

---

## 🔑 **2. Implementación de Autenticación y Autorización**

Se priorizó un sistema seguro de autenticación y autorización:

- Registro y login de usuarios.
- Autenticación mediante tokens seguros (Sanctum).
- Implementación de roles:
  - **Administrador:** Acceso total al sistema.
  - **Vendedor:** Permiso para gestionar productos y registrar ventas.
- Validación de permisos en cada endpoint.

---

## 📦 **3. CRUD de Productos**

Se desarrolló un CRUD completo para la gestión de productos con los siguientes campos:

| Atributo     | Descripción                | Restricción            |
|--------------|----------------------------|-------------------------|
| SKU          | Código único del producto | Único                   |
| productName  | Nombre del producto        | Requerido               |
| unitPrice    | Precio unitario            | Número positivo         |
| stock        | Cantidad disponible        | Número positivo o cero  |

- **Operaciones:** Crear, Leer, Actualizar y Eliminar.
- Validación de datos a nivel de aplicación y base de datos.

---

## 🔄 **4. Flujo de Trabajo con Git Flow**

Se utilizó la estrategia **Git Flow** para la organización del código:

- **Rama principal:** `main`
- **Rama de desarrollo:** `develop`
- **Ramas de funcionalidad:** `feature/*`
- **Rama de lanzamiento:** `release/*`
- **Rama de corrección:** `hotfix/*`

---

## 🎥 **5. Demostración en Video**

Puedes ver la demostración del proyecto en el siguiente enlace:

[👉 Ver Video de la Demostración](#)

---

## 📝 **6. Instalación y Ejecución**

Sigue estos pasos para ejecutar el proyecto localmente:

1. **Clonar el repositorio:**
```bash
git clone [URL_DEL_REPOSITORIO]
cd nombre-del-proyecto
```

2. **Instalar dependencias:**
```bash
composer install
```

3. **Configurar variables de entorno:**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurar la base de datos:**
- En el archivo `.env`, actualiza las credenciales de MySQL.

5. **Ejecutar migraciones:**
```bash
php artisan migrate --seed
```

6. **Levantar el servidor:**
```bash
php artisan serve
```

---

## 🛠️ **7. Pendientes y Siguientes Pasos**

Aunque se avanzó significativamente en la funcionalidad, quedan pendientes:

- Implementación de la funcionalidad de ventas.
- Generación de reportes en formato JSON y XLSX.
- Pruebas unitarias y de integración.

---

## 📬 **8. Contacto**

Si tienes preguntas o deseas más detalles, no dudes en contactarme.

