# 🚀 Plan de Trabajo — Modernización Incremental de FenixCorte

> Objetivo general:
>
> Modernizar progresivamente el proyecto **FenixCorte** manteniendo:
>
> - ✅ costo cero (o casi cero)
> - ✅ seguridad alta
> - ✅ facilidad de aprendizaje
> - ✅ compatibilidad con GitHub Pages
> - ✅ arquitectura escalable
>
> sin sobreingeniería ni complejidad innecesaria.

---

# 📌 Estado Actual

## Arquitectura actual

```txt
HTML + CSS estático
GitHub Pages
Sin framework
Sin backend
```

## Ventajas actuales

- Muy rápido
- Muy seguro por defecto
- Muy barato
- Fácil de desplegar

## Problemas actuales

- Mucha duplicación de código
- CSS difícil de mantener
- No reutilización de componentes
- Escalabilidad limitada
- Difícil agregar nuevas funcionalidades

---

# 🎯 Objetivos Técnicos

## Corto plazo

- Mejorar mantenibilidad
- Aprender arquitectura moderna frontend
- Mantener GitHub Pages

## Mediano plazo

- Componentización
- Mejor responsive
- Mejor estructura CSS
- Mejor SEO

## Largo plazo

- Scheduling seguro
- Integración con Google Calendar
- Backend ligero y seguro
- Escalabilidad progresiva

---

# 🧱 Arquitectura Objetivo (Final)

```txt
Frontend:
Astro
+
GitHub Pages

↓

Backend ligero:
Cloudflare Workers

↓

Integraciones:
Google Calendar API
```

---

# 🛣️ Roadmap Incremental

---

# FASE 1 — Migración Arquitectónica Frontend

## Objetivo

Migrar de HTML plano a una arquitectura moderna usando Astro SIN backend.

---

## Duración estimada

1–2 semanas

---

## Herramientas

| Herramienta | Uso |
|---|---|
| Astro | Static Site Generator |
| GitHub Pages | Hosting |
| Git | Control de versiones |

---

## Conceptos a aprender

- Componentes
- Layouts
- Routing
- Estructura moderna frontend
- Build process
- Reutilización

---

## Tareas

### 1. Instalar Astro

```bash
npm create astro@latest
```

---

### 2. Crear estructura inicial

```txt
src/
├── components/
├── layouts/
├── pages/
├── styles/
└── assets/
```

---

### 3. Crear layout principal

Archivo:

```txt
src/layouts/MainLayout.astro
```

Debe contener:

- head
- metadata base
- navbar
- footer

---

### 4. Convertir navbar en componente

```txt
src/components/Navbar.astro
```

---

### 5. Convertir footer en componente

```txt
src/components/Footer.astro
```

---

### 6. Migrar páginas una por una

Orden recomendado:

```txt
index
nosotros
servicios
materiales
trabajos
contacto
```

---

### 7. Organizar estilos

Separar:

```txt
global.css
layout.css
components.css
pages/
```

---

## Resultado esperado

✅ sitio moderno  
✅ mismo hosting  
✅ menos duplicación  
✅ mejor mantenibilidad  
✅ arquitectura limpia

---

# FASE 2 — Mejora de UI y Responsive

## Objetivo

Modernizar experiencia visual y responsive.

---

## Duración estimada

1 semana

---

## Conceptos

- Flexbox
- CSS Grid
- Mobile-first
- Responsive design
- Accesibilidad

---

## Tareas

### 1. Reemplazar `column-count`

Usar:

```css
display: grid;
```

o

```css
display: flex;
```

---

### 2. Mejorar navegación móvil

Agregar:

- menú hamburguesa
- navegación accesible

---

### 3. Optimizar imágenes

- tamaños correctos
- lazy loading

---

### 4. Mejorar accesibilidad

- labels correctos
- contrastes
- navegación teclado

---

## Resultado esperado

✅ responsive moderno  
✅ mejor UX  
✅ mejor accesibilidad

---

# FASE 3 — Interactividad Controlada

## Objetivo

Agregar JS moderno sin complejidad excesiva.

---

## Duración estimada

1 semana

---

## Conceptos

- estado UI
- eventos
- validación frontend

---

## Tareas

### 1. Mejorar formulario contacto

Agregar:

- validación
- mensajes de error
- loading states

---

### 2. Crear componentes interactivos

Ejemplos:

- modal
- tabs
- acordeones

---

### 3. Aprender Astro Islands

Ejemplo:

```astro
<Component client:load />
```

---

## Resultado esperado

✅ frontend moderno  
✅ JS controlado  
✅ mejor experiencia usuario

---

# FASE 4 — Introducción Segura a Backend

## Objetivo

Aprender backend SIN montar servidores complejos.

---

## Duración estimada

1 semana

---

## Herramienta

| Herramienta | Uso |
|---|---|
| Cloudflare Workers | Backend serverless |

---

## Conceptos

- APIs
- requests
- responses
- variables de entorno
- seguridad backend

---

## Tareas

### 1. Crear primer Worker

Ejemplo:

```js
export default {
  async fetch(request) {
    return new Response("Hello");
  }
}
```

---

### 2. Aprender variables secretas

Ejemplo:

```bash
wrangler secret put API_KEY
```

---

### 3. Crear endpoint simple

```txt
POST /api/contact
```

---

## Resultado esperado

✅ comprensión backend moderna  
✅ secretos seguros  
✅ APIs simples

---

# FASE 5 — Integración Google Calendar

## Objetivo

Implementar scheduling seguro.

---

## Duración estimada

2 semanas

---

## Arquitectura

```txt
Astro frontend
↓
Cloudflare Worker
↓
Google Calendar API
```

---

## Seguridad

IMPORTANTE:

```txt
Google secrets SOLO en backend
```

Nunca en frontend.

---

## Conceptos

- APIs externas
- autenticación Google
- tokens
- validación backend

---

## Tareas

### 1. Crear calendario dedicado

Ejemplo:

```txt
asesorias@tudominio.com
```

---

### 2. Crear proyecto Google Cloud

Habilitar:

```txt
Google Calendar API
```

---

### 3. Configurar credenciales seguras

Guardar en:

```txt
Cloudflare secrets
```

---

### 4. Crear endpoint booking

Ejemplo:

```txt
POST /api/book
```

---

### 5. Crear eventos automáticamente

Datos:

- nombre
- correo
- fecha
- duración

---

### 6. Enviar invitaciones automáticas

Google Calendar enviará:

- confirmación
- cambios
- cancelaciones

---

## Resultado esperado

✅ scheduling seguro  
✅ integración real  
✅ control total desde Google Calendar

---

# FASE 6 — Hardening de Seguridad

## Objetivo

Reducir riesgos y abuso.

---

## Tareas

### 1. Rate limiting

Evitar spam.

---

### 2. Honeypot anti-bots

Campo invisible.

---

### 3. Validación backend

Nunca confiar en frontend.

---

### 4. Sanitización inputs

Evitar abuso.

---

## Resultado esperado

✅ sistema más seguro  
✅ protección básica producción

---

# 📚 Conceptos Clave que Debes Entender

---

## Frontend

Aprender:

- HTML semántico
- CSS moderno
- componentes
- responsive

---

## Arquitectura

Aprender:

- separación de responsabilidades
- reutilización
- estructura escalable

---

## Seguridad

Entender:

- secretos nunca en frontend
- validación backend
- APIs seguras

---

## Backend moderno

Entender:

- serverless
- endpoints
- requests HTTP

---

# ❌ Cosas que NO debes hacer

---

## ❌ No poner secrets en frontend

Nunca:

```js
const SECRET = "..."
```

---

## ❌ No sobreingenierizar

Evitar:

- microservicios
- Kubernetes
- arquitecturas complejas

---

## ❌ No usar demasiadas librerías

Aprender fundamentos primero.

---

# 🧰 Stack Final Recomendado

| Área | Herramienta |
|---|---|
| Frontend | Astro |
| Hosting | GitHub Pages |
| Backend | Cloudflare Workers |
| Scheduling | Google Calendar API |
| Seguridad | Worker secrets |
| Deploy | GitHub Actions (futuro opcional) |

---

# 💰 Costos

| Servicio | Costo |
|---|---|
| GitHub Pages | Gratis |
| Astro | Gratis |
| Cloudflare Workers | Gratis tier |
| Google Calendar API | Gratis uso pequeño |

---

# 📈 Resultado Esperado Final

Al terminar este roadmap deberías tener:

✅ arquitectura moderna  
✅ frontend mantenible  
✅ componentes reutilizables  
✅ sistema seguro  
✅ scheduling profesional  
✅ integración Google Calendar  
✅ conocimiento real de desarrollo web moderno  
✅ comprensión básica frontend/backend/security

---

# 🎯 Prioridad Inmediata

## Lo siguiente recomendado

### Empezar FASE 1

Objetivo inmediato:

```txt
Migrar la estructura actual a Astro
SIN backend todavía
```

---

# 🧠 Filosofía del Proyecto

Este roadmap prioriza:

```txt
aprender correctamente
antes que construir rápido
```

porque una base sólida evita:

- deuda técnica
- problemas de seguridad
- arquitecturas incomprensibles

---

# ✅ Definición de éxito

El proyecto será exitoso si:

- puedes mantenerlo solo
- entiendes cada capa
- puedes extenderlo sin miedo
- mantienes seguridad
- mantienes simplicidad

---