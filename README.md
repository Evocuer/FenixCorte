# 🔥 Fenix Corte Acero

Official website for **Fenix Corte Acero**, a Medellín-based company specializing in laser cutting of stainless steel, cold-rolled sheet metal, and other iron alloys for personal, advertising, and industrial projects.

🌐 **Live site:** [evocuer.github.io/FenixCorte](https://evocuer.github.io/FenixCorte)

---

## 📋 Pages

| Page | File | Description |
|---|---|---|
| Home | `index.html` | Home page with service overview |
| Services | `servicios.html` | Services — laser cutting & surface treatments |
| Laser Cutting | `corte.html` | Laser cutting detail page |
| Surface Treatments | `trat.html` | Surface treatments detail page |
| Materials | `materiales.html` | Materials — stainless steel & cold-rolled sheet |
| Portfolio | `trabajos.html` | Gallery of completed work |
| About Us | `nosotros.html` | About us — mission & vision |
| Contact | `contacto.html` | Contact form with Google Maps |

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
├── index.html                    ← landing page redirect
├── servicios.html                ← services page
├── corte.html                    ← laser cutting details
├── trat.html                     ← surface treatments details
├── materiales.html               ← materials info
├── trabajos.html                 ← portfolio/gallery
├── nosotros.html                 ← about company
├── contacto.html                 ← contact form
├── fca1.css                      ← main stylesheet
├── sliders.css                   ← slider components
├── README.md
└── Imagenes/                     ← image assets
```

---

## 📧 Contact Form

The contact form uses [EmailJS](https://www.emailjs.com) to send emails directly from the browser without a backend server.

### Anti-spam protections included
- **Honeypot field** — invisible field that catches bots
- **Minimum fill time** — rejects submissions under 3 seconds
- **Rate limiting** — max 3 messages per hour per browser session

### Configuration
To update EmailJS credentials, edit the following variables in `contacto.html`:

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
