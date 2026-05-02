import './bootstrap';

import.meta.glob([
    "../images/**"
]);

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

import intersect from '@alpinejs/intersect'
 
Alpine.plugin(intersect)

Alpine.plugin(focus);

Alpine.start();
