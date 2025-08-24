import './bootstrap';
import '../css/app.css';

import { createInertiaApp } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';
import { lazy } from 'react';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        // Usando importações dinâmicas para carregamento preguiçoso
        const page = () => {
            const modules = {
                ...import.meta.glob('./Admin/Pages/**/*.tsx'),
                ...import.meta.glob('./Teachers/Pages/**/*.tsx'),
                ...import.meta.glob('./Students/Pages/**/*.tsx'),
                ...import.meta.glob('./Web/Pages/**/*.tsx'),
            };

            const module = modules[`./${name}.tsx`];
            if (!module) throw new Error(`Página não encontrada: ${name}`);

            const Component = lazy(() => module().then(component =>
                ({ default: component.default })
            ));

            return Component;
        };

        return page();
    },
    setup({ el, App, props }) {
        const root = createRoot(el!);
        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
