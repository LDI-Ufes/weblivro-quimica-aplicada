const staticCache = 'static-cache-v1.0';
const dynamicCache = 'dynamic-cache-v1.0';

self.importScripts('constantes.js');

//ATUALIZAÇÃO DO SERVICE WORKER
self.addEventListener('message', event => {
    if (event.data.action === 'skipWaiting') {
        self.skipWaiting();
    }
});

// CACHES PARA A INSTALAÇÃO
const cacheResources = async () => {
    const assets = [
        ...fallback,
        ...paginasPadrao,
        ...components,
        ...imagensMarcas,
        ...capitulos,
        ...capas,
        ...estilos,
        ...fontes,
        ...scripts,
    ];

    let cache = await caches.open(staticCache);
    return cache.addAll(assets)
}

self.addEventListener('install', evt => {
    evt.waitUntil(cacheResources())
});

//ATUALIZANDO OS CACHES
const updatingCache = async () => {
    let chave = await caches.keys();
    return Promise.all(chave
        .filter(chave => chave !== staticCache && chave !== dynamicCache)
        .map(chave => caches.delete(chave))
    )
}

self.addEventListener('activate', evt => {
    evt.waitUntil(updatingCache());
});

// TRABALHANDO OS FETCH REQUESTS
self.addEventListener('fetch', evt => {
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request)
                .then(fetchRes => {
                    return caches.open(dynamicCache)
                        .then(cache => {
                            if (evt.request.url.indexOf('?query=') > -1) {
                                caches.delete(evt.request.url);
                                return fetchRes;
                            } else {
                                cache.put(evt.request.url, fetchRes.clone());
                                return fetchRes;
                            }
                        })
                });
        })
            .catch(() => {
                if (evt.request.url.indexOf('?query=') > -1) {
                    return caches.match('./fallback-busca.html')
                } else {
                    return caches.match('./fallback.html')
                }
            })
    );
});

