# 🔥 Fenix Corte Acero

Official website for **Fenix Corte Acero**, a Medellín-based company specializing in laser cutting of stainless steel, cold-rolled sheet metal, and other iron alloys for personal, advertising, and industrial use.

🌐 **Live site:** [evocuer.github.io/FenixCorte](https://evocuer.github.io/FenixCorte)

---

## 📋 Pages

| Page | Description |
|---|---|
| `Index.html` | Home page with service overview |
| `Servicios.html` | Services — laser cutting & surface treatments |
| `Corte.html` | Laser cutting detail page |
| `Trat.html` | Surface treatments detail page |
| `Materiales.html` | Materials — stainless steel & cold-rolled sheet |
| `Trabajos.html` | Gallery of completed work |
| `Nosotros.html` | About us — mission & vision |
| `Contacto.html` | Contact form with Google Maps |

---

## 🛠️ Tech Stack

- **HTML5 / CSS3** — vanilla, no frameworks
- **EmailJS** — contact form email delivery (no backend required)
- **Font Awesome 5** — icons
- **Google Maps Embed** — location map on contact page
- **GitHub Pages** — free static hosting

---

## 📁 Project Structure

```
FenixCorte/
├── Index.html
├── Contacto.html
├── Servicios.html
├── Materiales.html
├── Trabajos.html
├── Nosotros.html
├── Corte.html
├── Trat.html
├── FCA1.css
├── Sliders.css
├── index.html              ← redirect to Index.html
├── .nojekyll               ← disables Jekyll on GitHub Pages
└── Fenix Corte Acero/
    └── Imagenes/           ← all site images live here
```

---

## 📧 Contact Form

The contact form uses [EmailJS](https://www.emailjs.com) to send emails directly from the browser without a backend server.

### Anti-spam protections included
- **Honeypot field** — invisible field that catches bots
- **Minimum fill time** — rejects submissions under 3 seconds
- **Rate limiting** — max 3 messages per hour per browser session

### Configuration
To update EmailJS credentials, edit the following variables in `Contacto.html`:

```javascript
var EMAILJS_PUBLIC_KEY  = "your_public_key";
var EMAILJS_SERVICE_ID  = "your_service_id";
var EMAILJS_TEMPLATE_ID = "your_template_id";
```

> ⚠️ This is a public repository. EmailJS Public Keys are safe to expose as long as you restrict allowed origins in your EmailJS dashboard.

---

## 🚀 Deployment

The site is deployed automatically via **GitHub Pages** on every push to `main`.

To enable GitHub Pages on a fork:
1. Go to **Settings → Pages**
2. Set **Branch** to `main` and folder to `/ (root)`
3. Save — the site will be live in ~1 minute

---

## 📍 Business Info

| | |
|---|---|
| 📍 Address | Calle 32C # 78 - 04, Belén Miravalle, Medellín |
| 📞 Phone | (4) 387 73 10 / 311 532 01 89 |
| ✉️ Email | Fenixcorte@gmail.com |
| 📘 Facebook | [fenix.corteacero.5](https://www.facebook.com/fenix.corteacero.5) |
| 📸 Instagram | [@fenixcorte](https://www.instagram.com/fenixcorte/) |

---

*Designed by Evocuer · All rights reserved © Fenix Corte Acero*
