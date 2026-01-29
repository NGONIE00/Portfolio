// ===========================
// OPTIMIZED PORTFOLIO APP.JS
// ===========================

// === Utility Functions ===
const Utils = {
    debounce(func, wait) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    },

    select(selector) {
        return document.querySelector(selector);
    },

    selectAll(selector) {
        return document.querySelectorAll(selector);
    },

    exists(selector) {
        return document.querySelector(selector) !== null;
    }
};

// === Dark Mode Toggle ===
class DarkModeToggle {
    constructor() {
        this.toggle = Utils.select('#dark-mode-toggle');
        this.html = document.documentElement;
        this.sunIcon = Utils.select('.sun-icon');
        this.moonIcon = Utils.select('.moon-icon');

        if (this.toggle) this.init();
    }

    init() {
        const saved = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        this.updateTheme(saved ? saved === 'dark' : prefersDark);

        this.toggle.addEventListener('click', () => {
            const isDark = !this.html.classList.contains('dark');
            this.updateTheme(isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    }

    updateTheme(isDark) {
        this.html.classList.toggle('dark', isDark);
        if (!this.sunIcon || !this.moonIcon) return;
        this.sunIcon.style.opacity = isDark ? '0' : '1';
        this.moonIcon.style.opacity = isDark ? '1' : '0';
    }
}

// === Terminal Typing Effect ===
class TerminalTyping {
    constructor() {
        this.el = Utils.select('#terminal-output-text');
        if (!this.el) return;

        this.tech = [
            'Laravel','Git','Jenkins','MySQL','PostgreSQL','Node.js',
            'PHP','Livewire','Tailwind CSS','React','JavaScript','Docker'
        ];

        this.index = 0;
        this.char = 0;
        this.deleting = false;
        this.active = true;

        setTimeout(() => this.loop(), 2000);
    }

    loop() {
        if (!this.active) return;

        const text = this.tech[this.index];

        if (!this.deleting) {
            this.el.textContent = text.slice(0, ++this.char);
            if (this.char === text.length) {
                setTimeout(() => this.deleting = true, 1800);
            }
        } else {
            this.el.textContent = text.slice(0, --this.char);
            if (this.char === 0) {
                this.deleting = false;
                this.index = (this.index + 1) % this.tech.length;
            }
        }

        setTimeout(() => this.loop(), this.deleting ? 50 : 120);
    }

    stop() {
        this.active = false;
    }
}

// === Floating Logos (Non-Overlapping + Animated) ===
class FloatingLogos {
    constructor() {
        this.container = Utils.select('#logo-container');
        this.logos = Array.from(Utils.selectAll('.floating-logo'));
        this.placed = [];
        if (!this.container || !this.logos.length) return;

        this.init();
    }

    init() {
        this.logos.forEach(logo => {
            logo.style.opacity = 0;
            this.placeLogo(logo);
            this.animateLogoCycle(logo);
        });

        window.addEventListener('resize', Utils.debounce(() => {
            this.logos.forEach(logo => this.placeLogo(logo));
        }, 300));
    }

    placeLogo(logo) {
        const cw = this.container.clientWidth;
        const ch = this.container.clientHeight;
        const size = logo.offsetWidth;
        let x, y, safe, tries = 0;

        do {
            safe = true;
            x = Math.random() * (cw - size);
            y = Math.random() * (ch - size);

            for (const p of this.placed) {
                const dx = p.x - x;
                const dy = p.y - y;
                if (Math.sqrt(dx*dx + dy*dy) < size * 1.3) {
                    safe = false;
                    break;
                }
            }

            tries++;
        } while (!safe && tries < 80);

        logo.dataset.x = x;
        logo.dataset.y = y;
        logo.style.transform = `translate(${x}px, ${y}px)`;
        this.placed.push({ x, y, logo });
    }

    animateLogoCycle(logo) {
        const showDuration = 2000 + Math.random() * 2000;
        const hideDuration = 1000 + Math.random() * 1000;
        const initialDelay = Math.random() * 2000;

        const cycle = () => {
            // Show
            logo.style.transition = `opacity 0.5s ease, transform 0.5s ease`;
            this.placeLogo(logo);
            logo.style.opacity = 1;

            setTimeout(() => {
                // Hide
                logo.style.opacity = 0;
                setTimeout(cycle, hideDuration);
            }, showDuration);
        };

        setTimeout(cycle, initialDelay);
    }
}

// === Contact Form ===
class ContactForm {
    constructor() {
        this.form = Utils.select('#contact-form');
        this.message = Utils.select('#message');
        this.counter = Utils.select('#char-count');

        if (!this.form) return;
        this.init();
    }

    init() {
        if (this.message && this.counter) {
            this.message.addEventListener('input', Utils.debounce(() => {
                this.counter.textContent = `${this.message.value.length} / 1000`;
            }, 100));
        }
    }
}

// === Pages ===
class HomePage {
    constructor() {
        if (!Utils.exists('#terminal-output-text')) return;
        this.terminal = new TerminalTyping();
        this.logos = new FloatingLogos();
    }
}

class ContactPage {
    constructor() {
        if (!Utils.exists('#contact-form')) return;
        new ContactForm();
    }
}

// === App Bootstrap ===
class PortfolioApp {
    constructor() {
        new DarkModeToggle();
        new HomePage();
        new ContactPage();

        document.addEventListener('visibilitychange', () => {
            if (document.hidden && window.homePage?.terminal) {
                window.homePage.terminal.stop();
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.app = new PortfolioApp();
});