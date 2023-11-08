//Indicamos que durante el proceso de instalación
self.addEventListener('install', evento=>{
    /*Promesa que crea el proceso de creación del espacio
    en cache y agrega los archivos necesarios para cargar nuestra
    aplicación*/
    const promesa =caches.open('medifast')
    .then(cache=>{
    return cache.addAll([
    '/',
    'index.html',
    'css/styles.css',
    'ofertas.html',
    'botiquin.html',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
    'assets/img/header-bg.jpg'  
    ]);
    });
    //Indicamos que la instalación espere hasta que la promesa se cumpla
    evento.waitUntil(promesa);
    });
   