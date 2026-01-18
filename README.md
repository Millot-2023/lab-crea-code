# PROJET : LAB-CREA-CODE
---

# Mega-Projet : Structure du Menu & Workflow

## 0. Méthode & Engagements (Le Verrou)
- **Zéro initiative :** Je ne modifie jamais les couleurs, les classes ou l'organisation des fichiers sans ton accord préalable.
- **Zéro Chirurgie :** On ne modifie pas un partiel validé. On crée une version v2 si nécessaire.
- **Intégrité :** Toujours fournir les fichiers complets pour éviter les fragments cassés.
- **Architecture SCSS :** Fichiers séparés par fonction (variables, typo, layout, components).
- **Thématisation :** Dark Mode Hybride. Automatique (Système/Accessibilité) par défaut + Commutateur manuel (Liberté utilisateur).
- **Indépendance CSS :** Une classe unique par élément. Pas d'empilage de classes.
- **Unités :** `rem` (contenu / accessibilité) et `px` (structure fixe / stabilité). Base 62.5% (1rem = 10px).
- **Responsive :** Desktop (3 col), Tablette (clic), Mobile (burger).

## 1. Pilier : CRÉATION (Le Visuel)
* **Logos & Identités**
    * *Chartes et vectoriel*
* **Illustrations**
    * *Numérique et roughs*
* **Retouches**
    * *Traitement d'image pro*

## 2. Pilier : CONCEPTION (L'UX)
* **Stratégie**
    * *Modèles Personas & User Journeys*
* **Maquettes & Prototypes**
    * *UI haute fidélité et interactions*
* **Design Systems**
    * *Bibliothèques de composants*

## 3. Pilier : RESSOURCES (Le Code)
* **Cards CSS (Libre-service)**
    * *Composants prêts à copier-coller*
* **Grilles & Layouts**
    * *Structures Grid & Flexbox*
* **Système REM**
    * *Échelles typo et règles W3C*

## 4. Informations de Contact & Vie Privée
- **Standard :** Lien `mailto:` pour accessibilité recrutement (ATS).
- **Sécurité :** Masquage léger par entités HTML.
- **Confidentialité :** Exclusion totale du téléphone, de l'adresse et de l'état civil.

## 5. Proposition d'Arborescence (Structure des Dossiers)

```text
/root
│
├── index.html              # Fichier principal (appel des partiels)
│
├── /assets
│   ├── /images             # Logos, Illustrations, Retouches
│   └── /icons              # SVGs et icônes interface
│
├── /src
│   └── /scss
│       ├── main.scss       # Point d'entrée (compilation finale)
│       ├── /abstracts      # Configuration (variables, mixins, typo)
│       │   ├── _variables.scss
│       │   ├── _typography.scss
│       │   └── _functions.scss
│       ├── /base           # Fondations (reset, base styles)
│       │   └── _reset.scss
│       ├── /layout         # Squelette (header, footer, menu, grid)
│       │   ├── _header.scss
│       │   ├── _footer.scss
│       │   └── _megamenu.scss
│       └── /components     # Briques (cards, boutons, contact)
│           ├── _cards.scss
│           ├── _buttons.scss
│           └── _contact-info.scss
│
└── /dist                   # Fichiers compilés (CSS final, images opti)
    └── style.css
```

## 6. Proposition d'Arborescence (Structure des Dossiers)
```text
[ BARRE DE NAVIGATION (Sticky) ]
├── LOGO (Retour Home)
├── LIEN : CRÉATION ────────┐
├── LIEN : CONCEPTION ──────┤ (Au survol/clic -> Ouverture Mega-Menu)
├── LIEN : RESSOURCES ──────┘
└── BOUTON : COMMUTATEUR THÈME (Jour/Nuit)

[ CONTENU DU MEGA-MENU (3 Colonnes) ]
│
├── COLONNE 1 : CRÉATION
│   ├── SECTION : Identité Visuelle
│   │   ├── Logos Vectoriels
│   │   ├── Chartes Graphiques
│   │   └── Brand Guidelines
│   ├── SECTION : Arts Numériques
│   │   ├── Illustrations Concept
│   │   ├── Roughs & Storyboards
│   │   └── Peinture Digitale
│   └── SECTION : Post-Production
│       ├── Retouches Haute-Fréquence
│       ├── Colorimétrie (Lut)
│       └── Montage Photo (Compositing)
│
├── COLONNE 2 : CONCEPTION
│   ├── SECTION : Analyse & UX
│   │   ├── Études Personas
│   │   ├── Parcours Utilisateurs
│   │   └── Audits Ergonomiques
│   ├── SECTION : Interface UI
│   │   ├── Maquettes Haute Fidélité
│   │   ├── Prototypes Interactifs
│   │   └── Micro-animations
│   └── SECTION : Architecture
│       ├── Bibliothèques Figma
│       ├── Design Systems Scalables
│       └── Documentation Atome
│
├── COLONNE 3 : RESSOURCES
│   ├── SECTION : Composants (CSS)
│   │   ├── Cards & Glassmorphism
│   │   ├── Boutons & Inputs
│   │   └── Effets de Hover (Survol)
│   ├── SECTION : Mise en Page
│   │   ├── Grilles CSS Grid
│   │   ├── Flexbox Containers
│   │   └── Layouts Responsive
│   └── SECTION : Standards Web
│       ├── Typographie (REM)
│       ├── Règles Accessibilité W3C
│       └── Optimisation SEO/Code
│
└── [ PIED DE MENU (Minimaliste) ]
    └── "Informations : contact[at]votre-domaine.com — Profil Professionnel"
```