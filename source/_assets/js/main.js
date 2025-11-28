import simplyCountdown from "simplycountdown.js";

// .my-super-countdown is an example
// you can target any HTML element with any CSS selector
simplyCountdown(".my-super-countdown", {
    // Target date (Required)
    year: 2025, // Target year [YYYY]
    month: 12, // Target month [1-12]
    day: 9, // Target day [1-31]
    hours: 0, // Target hours [0-23]
    minutes: 0, // Target minutes [0-59]
    seconds: 0, // Target seconds [0-59]

    // Words customization
    words: {
        days: {
            // Function to handle pluralization
            lambda: (root, count) => (count > 1 ? root + "s" : root),
            root: "día", // Base word for days
        },
        hours: {
            lambda: (root, count) => (count > 1 ? root + "s" : root),
            root: "hora",
        },
        minutes: {
            lambda: (root, count) => (count > 1 ? root + "s" : root),
            root: "minuto",
        },
        seconds: {
            lambda: (root, count) => (count > 1 ? root + "s" : root),
            root: "segundo",
        },
    },

    // Display options
    plural: true, // Enable/disable pluralization
    inline: false, // Display inline (true) or in blocks (false)
    inlineSeparator: ", ", // Separator for inline display
    enableUtc: false, // Use UTC time instead of local time

    // Styling classes
    inlineClass: "simply-countdown-inline", // Class for inline display
    sectionClass: "simply-section", // Class for each time unit section
    amountClass: "simply-amount", // Class for number display
    wordClass: "simply-word", // Class for word display

    // Formatting options
    zeroPad: false, // Add leading zeros to numbers (e.g., 05 instead of 5)
    countUp: false, // Count up from target date instead of down to it
    removeZeroUnits: false, // Hide time units when they reach zero
    refresh: 1000, // Update interval in milliseconds (1 second = 1000)

    // Event handlers
    onEnd: () => {
        // Callback function when countdown ends
        console.log("Countdown finished!");
    },
    onStop: () => {}, // Callback when countdown is stopped
    onResume: () => {}, // Callback when countdown is resumed
    onUpdate: (params) => {}, // Callback when countdown is updated
});

// Countdown inline
simplyCountdown(".my-inline-countdown", {
    year: 2025,
    month: 12,
    day: 9,
    hours: 0,
    minutes: 0,
    seconds: 0,
    words: {
        days: { lambda: (root, count) => (count > 1 ? root + "s" : root), root: "día" },
        hours: { lambda: (root, count) => (count > 1 ? root + "s" : root), root: "hora" },
        minutes: { lambda: (root, count) => (count > 1 ? root + "s" : root), root: "minuto" },
        seconds: { lambda: (root, count) => (count > 1 ? root + "s" : root), root: "segundo" },
    },
    plural: true,
    inline: true, // Inline
    inlineClass: "simply-countdown-inline",
    inlineSeparator: " | ",
    refresh: 1000,
});


import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// ..
AOS.init({
  once: true // la animación solo ocurre una vez
});

