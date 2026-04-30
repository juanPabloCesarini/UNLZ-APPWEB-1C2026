---
description: "Workspace instructions for UNLZ-APPWEB-1C2026, an educational web development course. Use when: helping students with HTML/CSS/Bootstrap exercises, navigating student submissions, or understanding course structure."
---

# UNLZ-APPWEB-1C2026 Workspace Instructions

## 📋 Project Overview

This is an educational web development course workspace managed via Git. It contains student assignments and course materials focused on:
- **HTML**: Semantic structure and forms
- **CSS**: Styling and layouts
- **Bootstrap 5**: Responsive design and components
- **JavaScript**: DOM manipulation and Fetch API
- **Git**: Version control workflows

## 🗂️ Folder Structure

```
UNLZ-APPWEB-1C2026/
├── 11abr26/                    # Class date: April 11, 2026
├── 28mar26/                    # Class date: March 28, 2026
├── [StudentName]/              # Individual student assignment folders
│   ├── 11abr26/               # Date-based submission
│   │   ├── index.html         # Main project file
│   │   ├── maquetado.html     # Layout mockup (Spanish: "maquetado")
│   │   ├── css/
│   │   │   └── style*.css     # Stylesheet (style.css or styles.css)
│   │   └── img/ or assets/    # Images and media (optional)
│   └── 28mar26/               # Previous assignment folder
├── Grupo[N]/                  # Group projects
├── readme.md                  # Course resources and documentation
└── index.html                 # Course homepage
```

## 📅 Naming Conventions

- **Dates**: `DDMMMYY` format (e.g., `11abr26` = April 11, 2026)
  - Spanish month abbreviations: `ene`, `feb`, `mar`, `abr`, `may`, `jun`, `jul`, `ago`, `sep`, `oct`, `nov`, `dic`
- **HTML files**: 
  - `index.html` — Main production/entry point
  - `maquetado.html` — Layout draft or mockup (do not remove)
- **CSS files**: `style.css` or `styles.css` (check student folder for consistency)
- **Assets**: Organize in `img/`, `images/`, `assets/`, or named folders (`Logo/`, etc.)

## 🎯 Common Development Tasks

### Reviewing Student Work
1. Find the student folder → Date subfolder → `index.html`
2. Check for linked resources: `css/`, images, `maquetado.html`
3. Validate Bootstrap 5 import and custom CSS

### Creating/Updating Assignments
- Create a new date folder following `DDMMMYY` format
- Use `index.html` as the submission file (keep `maquetado.html` for drafts)
- Ensure CSS is in a `css/` subfolder and properly linked
- Test responsive design across screen sizes

### HTML/CSS Best Practices
- Use semantic HTML5 tags (header, nav, main, section, footer)
- Follow Bootstrap 5 grid system (`container`, `row`, `col-*`)
- Keep custom CSS separate from Bootstrap imports
- Link stylesheets before closing `</head>` tag
- Use relative paths for local assets: `./css/style.css`, `./img/image.png`

### Bootstrap 5 Integration
- Always include the official CDN or locally hosted Bootstrap files
- Common imports:
  ```html
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  ```
- Reference: [Bootstrap 5 Official Docs](https://getbootstrap.com/docs/5.3/)

## 🔗 Key Resources

- [Git Basics](https://git-scm.com/doc) — Version control workflow
- [HTML5 Semantic Elements](https://www.w3schools.com/html/) — Proper structure
- [CSS Fundamentals](https://www.w3schools.com/css/) — Styling and layout
- [Bootstrap 5 Grid System](https://getbootstrap.com/docs/5.3/layout/grid/) — Responsive design
- [MDN JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript) — DOM manipulation
- [FontAwesome 5.15.4](https://fontawesome.com/) — Icon library (if used)

## 🛠️ Common Issues & Solutions

| Issue | Solution |
|-------|----------|
| CSS not loading | Check path (use `./css/style.css`), ensure file exists |
| Bootstrap not working | Verify CDN link or file path, check Bootstrap version |
| Images not displaying | Verify relative path, check lowercase filename match |
| Responsive design broken | Test with Bootstrap grid classes, avoid hardcoded widths |
| Git conflicts | Pull latest, check if student folders need merging |

## 📝 Notes for Educators

- **Per-student organization**: Each student has their own folder with date-based submissions
- **Group projects**: Found in `Grupo[N]/` folders
- **Shared resources**: Top-level files (`index.html`, `readme.md`) are course-wide
- **Asset management**: Encourage students to organize assets in subfolders to avoid clutter

---

**Last Updated**: April 14, 2026  
**Course**: Aplicaciones Web 1 - UNLZ
