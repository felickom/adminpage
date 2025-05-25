# AdminPage

A lightweight PHP + MySQL admin-dashboard *and* landing-page template.  
Use it as a starting point for company websites that need a simple CMS-style back-office.

---

## ✨ Features
- **Public site (`home.php`)** – hero, services, testimonials, and contact form.  
- **Secure admin panel (`/admin/`)** – CRUD for services & testimonials, inbox for messages.  
- **Reusable components** in `css/` and `js/`, Font Awesome icons, Bootstrap 5 layout.  
- **SEO extras** – `logo.png`, open-graph tags (in template), and a ready-made `sitemap.xml`.  
- **Clean project structure** – see below.

## 📂 Project structure
```text
.
├── DB/               # .sql dump & migration scripts
├── admin/            # Admin dashboard (views + controllers)
├── contactform/      # Sends & stores contact-form messages
├── css/              # Custom stylesheets
├── images/           # Static assets
├── js/               # Vanilla-JS helpers & plugins
├── ourservices/      # Service pages for company profile
├── testimonial/      # Testimonial pages for company profile
├── home.php          # Landing-page entry point
├── sitemap.xml
└── logo.png

## 🚀 Quick start

1. **Clone the repo**
   ```bash
   git clone https://github.com/felickom/adminpage.git
   cd adminpage
