// ===========================
// OPTIMIZED PORTFOLIO APP.JS
// ===========================

// === Utility Functions ===
const Utils = {
// Debounce function for performance
debounce(func, wait) {
let timeout;
return function executedFunction(...args) {
const later = () => {
clearTimeout(timeout);
func(...args);
};
clearTimeout(timeout);
timeout = setTimeout(later, wait);
};
},

// Check if element exists  
exists(selector) {  
    return document.querySelector(selector) !== null;  
},  

// Safe element selection  
select(selector) {  
    return document.querySelector(selector);  
},  

// Safe multiple element selection  
selectAll(selector) {  
    return document.querySelectorAll(selector);  
}

};

// === Dark Mode Toggle ===
class DarkModeToggle {
constructor() {
this.elements = {
toggle: Utils.select('#dark-mode-toggle'),
html: document.documentElement,
sunIcon: Utils.select('.sun-icon'),
moonIcon: Utils.select('.moon-icon')
};

if (this.elements.toggle) {  
        this.init();  
    }  
}  

init() {  
    this.setInitialTheme();  
    this.bindEvents();  
}  

setInitialTheme() {  
    const savedTheme = localStorage.getItem('theme');  
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;  
      
    // Explicitly check for saved theme, otherwise use system preference  
    let isDark;  
    if (savedTheme === 'dark') {  
        isDark = true;  
    } else if (savedTheme === 'light') {  
        isDark = false;  
    } else {  
        // No saved preference, use system preference  
        isDark = prefersDark;  
    }  
      
    this.updateTheme(isDark);  
}  

bindEvents() {  
    this.elements.toggle.addEventListener('click', () => this.toggle());  
      
    // Listen for system theme changes  
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {  
        if (!localStorage.getItem('theme')) {  
            this.updateTheme(e.matches);  
        }  
    });  
}  

toggle() {  
    const isCurrentlyDark = this.elements.html.classList.contains('dark');  
    const newThemeIsDark = !isCurrentlyDark;  
      
    // Update theme  
    this.updateTheme(newThemeIsDark);  
      
    // Save preference  
    localStorage.setItem('theme', newThemeIsDark ? 'dark' : 'light');  
      
    // Debug log (can be removed in production)  
    console.log('Theme toggled to:', newThemeIsDark ? 'dark' : 'light');  
}  

updateTheme(isDark) {  
    // Explicitly add or remove the dark class  
    if (isDark) {  
        this.elements.html.classList.add('dark');  
    } else {  
        this.elements.html.classList.remove('dark');  
    }  
    this.updateIcons(isDark);  
}  

updateIcons(isDark) {  
    if (!this.elements.sunIcon || !this.elements.moonIcon) return;  
      
    const showSun = !isDark;  
      
    this.elements.sunIcon.style.transform = showSun ? 'scale(1)' : 'scale(0)';  
    this.elements.sunIcon.style.opacity = showSun ? '1' : '0';  
    this.elements.moonIcon.style.transform = showSun ? 'scale(0)' : 'scale(1)';  
    this.elements.moonIcon.style.opacity = showSun ? '0' : '1';  
}

}

// === Terminal Typing Effect ===
class TerminalTyping {
constructor() {
this.element = Utils.select('#terminal-output-text');
if (!this.element) return;

this.config = {  
        technologies: [  
            'Laravel', 'Git', 'Jenkins', 'MySQL', 'PostgreSQL', 'Node.js',   
            'PHP', 'Apache Cassandra', 'Livewire', 'Tailwind CSS', 'React',   
            'JavaScript',  'Bootstrap', 'Docker'  
        ],  
        typingSpeed: 150,  
        deletingSpeed: 50,  
        pauseDuration: 2000,  
        startDelay: 4000  
    };  

    this.state = {  
        currentTechIndex: 0,  
        currentCharIndex: 0,  
        isDeleting: false,  
        isActive: true,  
        timeoutId: null  
    };  

    this.techDisplayNames = {  
        'php': 'PHP',  
        'laravel': 'Laravel',  
        'nodedotjs': 'Node.js',  
        'mysql': 'MySQL',  
        'postgresql': 'PostgreSQL',  
        'react': 'React',  
        'vuedotjs': 'Vue.js',  
        'typescript': 'TypeScript',  
        'tailwindcss': 'Tailwind CSS',  
        'bootstrap': 'Bootstrap',  
        'git': 'Git',  
        'docker': 'Docker',   
        'jenkins': 'Jenkins',  
        'livewire': 'Livewire'  
    };  

    this.init();  
}  

init() {  
    setTimeout(() => this.startTyping(), this.config.startDelay);  
}  

startTyping() {  
    if (!this.state.isActive) return;  

    const currentTech = this.config.technologies[this.state.currentTechIndex];  
      
    if (!this.state.isDeleting) {  
        this.typeCharacter(currentTech);  
    } else {  
        this.deleteCharacter(currentTech);  
    }  
}  

typeCharacter(text) {  
    this.element.textContent = text.substring(0, this.state.currentCharIndex + 1);  
    this.state.currentCharIndex++;  

    if (this.state.currentCharIndex === text.length) {  
        this.state.timeoutId = setTimeout(() => {  
            this.state.isDeleting = true;  
            this.startTyping();  
        }, this.config.pauseDuration);  
    } else {  
        this.state.timeoutId = setTimeout(() => this.startTyping(), this.config.typingSpeed);  
    }  
}  

deleteCharacter(text) {  
    this.element.textContent = text.substring(0, this.state.currentCharIndex - 1);  
    this.state.currentCharIndex--;  

    if (this.state.currentCharIndex === 0) {  
        this.state.isDeleting = false;  
        this.state.currentTechIndex = (this.state.currentTechIndex + 1) % this.config.technologies.length;  
    }  

    this.state.timeoutId = setTimeout(() => this.startTyping(), this.config.deletingSpeed);  
}  

displayClickedTech(techName, clickedElement) {  
    this.stop();  
    this.hideOtherLogos(clickedElement);  
      
    const displayName = this.techDisplayNames[techName] || techName;  
      
    this.element.textContent = '';  
    this.element.classList.add('terminal-highlight');  
      
    this.typeClickedTech(displayName, clickedElement);  
}  

hideOtherLogos(excludeElement) {  
    const logos = Utils.selectAll('.floating-logo');  
    logos.forEach(logo => {  
        if (logo !== excludeElement && logo.classList.contains('opacity-100')) {  
            logo.classList.remove('opacity-100');  
            logo.classList.add('opacity-0');  
        }  
    });  
}  

typeClickedTech(displayName, clickedElement) {  
    let charIndex = 0;  
      
    const typeChar = () => {  
        if (charIndex < displayName.length) {  
            this.element.textContent = displayName.substring(0, charIndex + 1);  
            charIndex++;  
            setTimeout(typeChar, 100);  
        } else {  
            setTimeout(() => this.deleteClickedTech(displayName, clickedElement), 2000);  
        }  
    };  
      
    typeChar();  
}  

deleteClickedTech(displayName, clickedElement) {  
    let charIndex = displayName.length;  
      
    const deleteChar = () => {  
        if (charIndex > 0) {  
            this.element.textContent = displayName.substring(0, charIndex - 1);  
            charIndex--;  
            setTimeout(deleteChar, 50);  
        } else {  
            this.resetAfterClick(clickedElement);  
        }  
    };  
      
    deleteChar();  
}  

resetAfterClick(clickedElement) {  
    this.element.classList.remove('terminal-highlight');  
      
    if (clickedElement) {  
        this.resetClickedElement(clickedElement);  
    }  
      
    setTimeout(() => {  
        this.state.isActive = true;  
        this.state.currentCharIndex = 0;  
        this.state.isDeleting = false;  
        this.startTyping();  
    }, 500);  
}  

resetClickedElement(element) {  
    element.classList.remove('clicked');  
    element.style.transform = '';  
    element.style.boxShadow = '';  
    element.style.zIndex = '';  
    element.classList.remove('opacity-100');  
    element.classList.add('opacity-0');  
}  

stop() {  
    this.state.isActive = false;  
    if (this.state.timeoutId) {  
        clearTimeout(this.state.timeoutId);  
    }  
}

}

// === Floating Tech Logos ===
class FloatingLogos {
constructor() {
this.logos = Utils.selectAll('.floating-logo');
this.terminalTyping = null;

if (this.logos.length > 0) {  
        this.init();  
    }  
}  

init() {  
    this.logos.forEach((logo, index) => {  
        this.setupLogo(logo, index);  
    });  
}  

setTerminalTyping(terminalTyping) {  
    this.terminalTyping = terminalTyping;  
}   

setupLogo(element, index) {  
    this.setRandomPosition(element);  
    this.bindEvents(element);  
    this.startAnimationCycle(element);  
}  

bindEvents(element) {  
    element.addEventListener('click', (e) => this.handleClick(e, element));  
    element.addEventListener('mouseenter', () => this.handleMouseEnter(element));  
    element.addEventListener('mouseleave', () => this.handleMouseLeave(element));  
}  

handleClick(event, element) {  
    event.preventDefault();  
    const techName = element.getAttribute('data-tech');  
      
    if (techName && this.terminalTyping) {  
        this.terminalTyping.displayClickedTech(techName, element);  
        this.addClickEffect(element);  
    }  
}  

handleMouseEnter(element) {  
    if (!element.classList.contains('clicked')) {  
        const rotation = (Math.random() - 0.5) * 10;  
        element.style.transform = `scale(1.1) rotate(${rotation}deg)`;  
    }  
    element.style.cursor = 'pointer';  
}  

handleMouseLeave(element) {  
    if (!element.classList.contains('clicked')) {  
        element.style.transform = '';  
    }  
}  

addClickEffect(element) {  
    element.classList.add('clicked');  
    element.style.transform = 'scale(1.2) rotate(5deg)';  
    element.style.boxShadow = '0 15px 35px rgba(59, 130, 246, 0.3)';  
    element.style.zIndex = '100';  
}  

getRandomPosition(containerWidth, containerHeight, elementWidth, elementHeight) {  
    return {  
        x: Math.floor(Math.random() * (containerWidth - elementWidth)),  
        y: Math.floor(Math.random() * (containerHeight - elementHeight))  
    };  
}  

setRandomPosition(element) {  
    const parent = element.parentElement;  
    if (!parent) return;  
      
    const position = this.getRandomPosition(  
        parent.offsetWidth,   
        parent.offsetHeight,   
        element.offsetWidth,   
        element.offsetHeight  
    );  
      
    element.style.left = `${position.x}px`;  
    element.style.top = `${position.y}px`;  
}  

startAnimationCycle(element) {  
    const toggleVisibility = () => {  
        if (element.classList.contains('opacity-0')) {  
            this.showLogo(element);  
        }  
    };  

    const initialDelay = Math.random() * 5000;  
    setTimeout(() => {  
        toggleVisibility();  
          
        const cycleInterval = 6000 + Math.random() * 4000;  
        setInterval(() => {  
            setTimeout(toggleVisibility, Math.random() * 3000);  
        }, cycleInterval);  
    }, initialDelay);  
}  

showLogo(element) {  
    this.setRandomPosition(element);  
    element.classList.remove('opacity-0');  
    element.classList.add('opacity-100');  
      
    const showDuration = 3000 + Math.random() * 2000;  
    setTimeout(() => {  
        if (element.classList.contains('opacity-100')) {  
            element.classList.remove('opacity-100');  
            element.classList.add('opacity-0');  
        }  
    }, showDuration);  
}

}

// === Contact Form Handler ===
class ContactForm {
constructor() {
this.elements = {
form: Utils.select('#contact-form'),
submitBtn: Utils.select('#submit-btn'),
btnText: Utils.select('.btn-text'),
btnLoading: Utils.select('.btn-loading'),
messageField: Utils.select('#message'),
charCount: Utils.select('#char-count')
};

if (this.elements.form) {  
        this.init();  
    }  
}  

init() {  
    this.setupCharacterCounter();  
    this.setupFormSubmission();  
    this.setupEmailValidation();  
    this.resetButtonOnError();  
}  

setupCharacterCounter() {  
    if (!this.elements.messageField || !this.elements.charCount) return;  

    const updateCounter = Utils.debounce((value) => {  
        const count = value.length;  
        this.elements.charCount.textContent = `${count} / 1000`;  
        this.elements.charCount.classList.toggle('text-red-500', count > 950);  
    }, 100);  

    this.elements.messageField.addEventListener('input', (e) => {  
        updateCounter(e.target.value);  
    });  

    // Initialize counter  
    updateCounter(this.elements.messageField.value);  
}  

setupEmailValidation() {  
    const emailField = Utils.select('#email');  
    if (!emailField) return;  

    const emailPattern = /^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$/i;  
      
    const validateEmail = () => {  
        const email = emailField.value.trim();  
        const isValid = emailPattern.test(email);  
          
        // Remove previous validation classes  
        emailField.classList.remove('border-red-500', 'border-green-500');  
          
        if (email.length > 0) {  
            if (isValid) {  
                emailField.classList.add('border-green-500');  
                emailField.classList.remove('border-red-500');  
            } else {  
                emailField.classList.add('border-red-500');  
                emailField.classList.remove('border-green-500');  
            }  
        }  
    };  

    emailField.addEventListener('blur', validateEmail);  
    emailField.addEventListener('input', Utils.debounce(validateEmail, 300));  
}  

setupFormSubmission() {  
    if (!this.elements.form || !this.elements.submitBtn) return;  

    this.elements.form.addEventListener('submit', () => {  
        this.setLoadingState(true);  
    });  
}  

setLoadingState(isLoading) {  
    if (!this.elements.submitBtn || !this.elements.btnText || !this.elements.btnLoading) return;  

    this.elements.submitBtn.disabled = isLoading;  
    this.elements.btnText.classList.toggle('hidden', isLoading);  
    this.elements.btnLoading.classList.toggle('hidden', !isLoading);  
}  

resetButtonOnError() {  
    // Reset button state if validation errors are present  
    if (Utils.exists('.text-red-600')) {  
        this.setLoadingState(false);  
    }  
}

}

// === Page Controllers ===
class PageController {
static isCurrentPage(identifier) {
return Utils.exists(identifier);
}
}

class HomePage extends PageController {
constructor() {
super();
if (!PageController.isCurrentPage('#terminal-output-text')) return;

this.terminalTyping = new TerminalTyping();  
    this.floatingLogos = new FloatingLogos();  
      
    // Connect components  
    if (this.terminalTyping && this.floatingLogos) {  
        this.floatingLogos.setTerminalTyping(this.terminalTyping);  
    }  
}

}

class ContactPage extends PageController {
constructor() {
super();
if (!PageController.isCurrentPage('#contact-form')) return;

this.contactForm = new ContactForm();  
}

}

// === Main Application ===
class PortfolioApp {
constructor() {
this.components = {
darkMode: new DarkModeToggle(),
homePage: new HomePage(),
contactPage: new ContactPage()
};

this.bindGlobalEvents();  
}  

bindGlobalEvents() {  
    // Handle page visibility changes (pause animations when tab is hidden)  
    document.addEventListener('visibilitychange', () => {  
        if (document.hidden && this.components.homePage?.terminalTyping) {  
            this.components.homePage.terminalTyping.stop();  
        }  
    });  

    // Handle window resize for floating logos  
    window.addEventListener('resize', Utils.debounce(() => {  
        if (this.components.homePage?.floatingLogos) {  
            const logos = Utils.selectAll('.floating-logo');  
            logos.forEach(logo => {  
                if (this.components.homePage.floatingLogos) {  
                    this.components.homePage.floatingLogos.setRandomPosition(logo);  
                }  
            });  
        }  
    }, 250));  
}  

// Public utility methods  
static smoothScrollTo(elementId) {  
    const element = Utils.select(`#${elementId}`);  
    if (element) {  
        element.scrollIntoView({ behavior: 'smooth' });  
    }  
}  

static showNotification(message, type = 'info') {  
    console.log(`${type.toUpperCase()}: ${message}`);  
    // Could be extended with toast notifications  
}

}

// === Initialize Application ===
document.addEventListener('DOMContentLoaded', () => {
try {
window.portfolioApp = new PortfolioApp();
} catch (error) {
console.error('Portfolio App initialization failed:', error);
}
});

// === Module Exports (for testing) ===
if (typeof module !== 'undefined' && module.exports) {
module.exports = {
Utils,
DarkModeToggle,
TerminalTyping,
FloatingLogos,
ContactForm,
PortfolioApp
};
}