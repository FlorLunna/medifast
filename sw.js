const CACHE ='medifast';
const CACHE_DINAMICO ='dinamico';
const CACHE_INMUTABLE ='inmutable';

self.addEventListener('install', evento=>{
   
    const promesa =caches.open(CACHE)
    .then(cache=>{
    return cache.addAll([
        //'/',
        'index.html',
        'app.js',
        'manifest.json',
        'Botiquin.html',
        'assets/img/ima/1.jpeg',
        'assets/img/ima/2.jpeg',
        'assets/img/ima/3.jpeg',
        'assets/img/ima/4.jpeg',
        'assets/img/ima/61.jpeg',
        'assets/img/ima/6.jpeg',
        'assets/img/ima/7.jpeg',
        'assets/img/ima/8.jpeg',
        'assets/img/ima/9.jpeg',
        'assets/img/ima/12.jpeg',
        'assets/img/ima/14.jpeg',
        'assets/img/ima/71.jpeg',
        'assets/img/ima/13.jpeg',
        'assets/img/ima/17.jpeg',
        'assets/img/ima/18.jpeg',
        'assets/img/ima/19.jpeg',
        'assets/img/ima/20.jpeg',
        'assets/img/ima/21.jpeg',
        'assets/img/ima/22.jpeg',
        'assets/img/ima/23.jpeg',
        'assets/img/ima/24.jpeg',
        'assets/img/ima/26.jpeg',
        'assets/img/ima/25.jpeg',
        'assets/img/ima/100.jpeg',
        
        'java/scripts.js',
        'offline.html',
        'assets/img/error404.jpg',
        'perfil.html',
        //'funciones.js',
        //'main.js',
        'registrar.html',
        //'java/dexie.min.js'
        
    ]);
    });
    const cacheInmutable =  caches.open(CACHE_INMUTABLE)
        .then(cache => cache.addA(
            'https://use.fontawesome.com/releases/v5.15.3/js/all.js',
            //'https://fonts.googleapis.com/css?family=Montserrat:400,700',
            //'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
            //'/assets/as.png',
            //'/css/styles.css',
            //'/css/icons.css',
            //'/css/bootstrap.min.css',
            //'/css/londinium-theme.css',
            //'/css/googleapi.css' 
            

        ));
            

        evento.waitUntil(Promise.all([promesa,cacheInmutable]));
});

self.addEventListener('fetch', evento => {
    const respuesta = caches.match(evento.request)
        .then(res => {
            if (res) {
                return res;
            }
            console.log('No existe', evento.request.url);

            return fetch(evento.request)
                .then(resWeb => {
                    caches.open(CACHE_DINAMICO)
                        .then(cache => {
                            cache.put(evento.request, resWeb);
                            limpiarCache(CACHE_DINAMICO, 70);
                        });

                    // Mover este bloque dentro del 'then' correspondiente
                    return resWeb.clone();
                });
        })
        .catch(err => {
            // Si ocurre un error, en nuestro caso no hay conexión
            if (evento.request.headers.get('accept').includes('text/html')) {
                // Si lo que se pide es un archivo HTML, muestra nuestra página offline que está en cache
                return caches.match('/offline.html');
            } else if (evento.request.headers.get('accept').includes('png')) {
                // Si lo que se pide es un archivo PNG, muestra nuestra imagen de error que está en cache
                return caches.match('assets/img/error404.jpg');
            }
        });

    evento.respondWith(respuesta);
});

    
  
        function limpiarCache(nombreCache, numeroItems){
            //abrimos el cache
            caches.open(nombreCache)
                .then(cache=>{
                    return cache.keys()
                        .then(keys=>{
                            if (keys.length>numeroItems){
                                cache.delete(keys[0])
                                .then(limpiarCache(nombreCache, numeroItems));
            }
            });
            });
        }
    
        
    