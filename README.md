# Sabor y Arte - Sistema E-commerce para Panadería & Repostería Fina

**Sabor y Arte** es una plataforma web integral de comercio electrónico diseñada para la gestión de ventas, inventario y pedidos de una panadería y repostería artesanal. El proyecto incluye control de acceso basado en roles (RBAC) y un flujo completo de compras tanto para entrega a domicilio como para retiro en punto de venta.

> **Nota:** Este proyecto fue desarrollado como proyecto de grado para la titulación de Bachiller Técnico y refinado como parte de mis prácticas de desarrollo web.

---

## 🚀 Funcionalidades Principales

### 1. Módulo de Cliente
* **Autenticación:** Registro de usuarios e inicio de sesión seguro con manejo de sesiones.
* **Catálogo & Búsqueda:** Exploración de productos organizados por categorías (ej. productos calientes, panes, repostería fina).
* **Gestión de Carrito:** Agregar productos dinámicamente según el stock disponible, modificar cantidades y calcular subtotales.
* **Procesamiento de Pedidos:** Formulario de entrega (domicilio o reclamos en tienda) y selección de métodos de pago (Bancolombia, Nequi, PSE, Efectivo).
* **Perfil:** Panel personal para gestionar la cuenta del usuario.

### 🛡️ 2. Módulo de Administrador
* **Control de Inventario:** Visualización del stock en tiempo real y reabastecimiento de productos.
* **Gestión de Pedidos:** Recepción, revisión y aprobación/aceptación de pedidos realizados por los clientes.
* **Administración de Usuarios:** Control total sobre las cuentas registradas (asignación y edición de roles: Administrador, Empleado, Cliente).
* **Gestión de Tablas:** Administración de bases de datos para contacto, inventario y registros de la plataforma.

### 💼 3. Módulo de Empleado
* **Atención y Toma de Pedidos:** Interfaz optimizada para el procesamiento rápido de pedidos en punto de venta.
* **Consulta de Productos:** Acceso directo al catálogo y actualización rápida de ventas.

---

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP (Manejo de sesiones, consultas MySQL, lógica de negocio y redirecciones)
* **Frontend:** HTML5, CSS3 (Diseño responsivo y personalización visual), JavaScript (Manipulación del DOM y lógica interactiva)
* **Base de Datos:** MySQL (Diseño relacional para inventarios, usuarios, carritos y pedidos)

---

## 📁 Estructura del Proyecto

```text
sabor-y-arte/
├── index.html                 # Página de entrada principal
├── php/                       # Módulos de lógica del servidor y backend
│   ├── conexion.php           # Configuración y conexión a la base de datos
│   ├── admin.php              # Panel de administración
│   ├── cliente.php            # Panel principal de cliente
│   ├── empleado.php           # Panel para toma de pedidos de personal
│   ├── carrito.php            # Gestión e interfaz del carrito de compras
│   ├── inventario.php         # Control y consulta de stock
│   ├── pedidos.php            # Control e historial de pedidos
│   ├── agregar_carrito.php    # Procesamiento CRUD del carrito
│   ├── procesar_pedido.php    # Lógica de confirmación de órdenes
│   └── ...                    # Módulos adicionales (editar, actualizar, eliminar, vistas)
├── js/                        # Controladores e interacción dinámica en el cliente
│   ├── carrito.js             # Lógica dinámica del carrito de compras
│   ├── inventario.js          # Filtrado y acciones del módulo de inventario
│   ├── filtro.js              # Búsqueda y filtrado interactivo
│   ├── registro.js            # Validaciones de formularios de registro
│   └── ...
├── style/                     # Archivos de estilos y diseño visual
│   └── style.css
├── img/                       # Recursos multimedia y gráficos del e-commerce
└── README.md                  # Documentación principal del repositorio
```