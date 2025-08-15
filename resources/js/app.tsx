import './bootstrap';
import '../css/app.css';

import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot } from 'react-dom/client';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const modules = {
            ...import.meta.glob('./Admin/Pages/**/*.tsx'),
            ...import.meta.glob('./Teachers/Pages/**/*.tsx'),
            ...import.meta.glob('./Students/Pages/**/*.tsx'),
            ...import.meta.glob('./Web/Pages/**/*.tsx'),
        };
        return resolvePageComponent(
            `./${name}.tsx`,
            modules
        );
    },
    setup({ el, App, props }) {
        const root = createRoot(el!);
        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
