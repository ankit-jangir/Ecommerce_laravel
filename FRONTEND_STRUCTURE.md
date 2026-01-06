# Frontend Structure - NICOBAR E-commerce Website

## Folder Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Main layout file
│   ├── components/
│   │   ├── footer.blade.php       # Footer component
│   │   ├── header.blade.php       # Main header component
│   │   ├── hero-section.blade.php # Hero section component
│   │   ├── offer-slider.blade.php # Yellow offer header slider
│   │   ├── sidebar-menu.blade.php # Left sidebar menu
│   │   └── whatsapp-icon.blade.php # WhatsApp floating icon
│   └── Pages/
│       ├── home.blade.php         # Home page
│       ├── women.blade.php         # Women's collection page
│       ├── women-kurti.blade.php   # Women's kurti page
│       ├── men.blade.php           # Men's collection page
│       └── gifting.blade.php       # Gifting page
├── js/
│   ├── app.js                      # Main JS file
│   └── components/
│       └── sidebar.js              # Sidebar menu toggle functionality
└── css/
    └── app.css                     # Main CSS file with Tailwind

routes/
└── web.php                         # All frontend routes
```

## Components

### 1. Offer Slider (`offer-slider.blade.php`)
- Yellow header banner with animated slider
- Shows 3 offers: "THE GIFTING CONCIERGE", "50% OFF", "20% OFF"
- Auto-rotating animation

### 2. Header (`header.blade.php`)
- Main navigation bar with gradient background
- Hamburger menu button (opens sidebar)
- Logo with stylized "O"
- Navigation links: HOME, WOMEN, MEN, GIFTING
- Right side icons: Search, User, Cart

### 3. Sidebar Menu (`sidebar-menu.blade.php`)
- Slides in from left when hamburger is clicked
- Contains all navigation items and categories
- Newsletter signup form
- Social media links
- Region selector (India/Global)

### 4. Footer (`footer.blade.php`)
- 4-column layout
- Contact information
- About us links
- Quick links
- Branding section with "NICO Radio"
- Diagonal pattern background
- Dragonfly logo (centered)

### 5. Hero Section (`hero-section.blade.php`)
- Full-screen hero image
- "HOLIDAY HOSTING" text overlay
- Link to "THE HOLIDAY EDIT"
- Scroll indicator

### 6. WhatsApp Icon (`whatsapp-icon.blade.php`)
- Fixed position bottom-right
- Green circular button
- Links to WhatsApp chat

## Pages

### Home Page (`home.blade.php`)
- Hero section
- Featured collections grid
- Banner section

### Women Page (`women.blade.php`)
- Filter bar
- Product grid with modern kurtis
- Load more button

### Women Kurti Page (`women-kurti.blade.php`)
- Dedicated kurti collection
- Filter options (Anarkali, A-Line, etc.)
- Product cards with hover effects
- Offer badges (50% OFF, 20% OFF)

### Men Page (`men.blade.php`)
- Men's collection grid
- Filter and sort options

### Gifting Page (`gifting.blade.php`)
- Hero banner
- Category cards
- Featured gifts grid

## Routes

- `/` - Home page
- `/women` - Women's collection
- `/women/kurti` - Women's kurti collection
- `/men` - Men's collection
- `/gifting` - Gifting collection

## Features

1. **Responsive Design** - Works on all screen sizes
2. **Sidebar Menu** - Slides in from left on mobile/desktop
3. **Offer Slider** - Auto-rotating promotional banner
4. **Product Cards** - Hover effects and quick actions
5. **WhatsApp Integration** - Floating chat button
6. **Modern UI** - Clean, minimalist design matching NICOBAR brand

## Styling

- **Font**: Inter (Google Fonts)
- **Framework**: Tailwind CSS 4.0
- **Theme**: E-commerce focused with gray/white color scheme
- **Accents**: Yellow for offers, Green for WhatsApp

## JavaScript Functionality

- Sidebar menu toggle (open/close)
- Overlay click to close sidebar
- Escape key to close sidebar
- Smooth animations and transitions

## Usage

1. Run `npm install` to install dependencies
2. Run `npm run dev` for development
3. Run `npm run build` for production
4. Access the site at your Laravel application URL

## Notes

- All images use Unsplash placeholder URLs - replace with actual product images
- Product prices and data are placeholder - connect to database
- WhatsApp number is set to +91 8588000150 - update if needed
- Email addresses in footer are placeholder - update with actual emails

