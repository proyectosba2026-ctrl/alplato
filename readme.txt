pejerrey-frito.pdf
corvina-parrilla.pdf 
guiso-bagre-boga.pdf


                    LA CAÑA AL PLATO - LANDING PAGE

Proyecto: Sitio web oficial del streaming de pesca y cocina en Buenos Aires
Autor: [Tu Nombre]
Fecha: Julio 2026
Tecnologías: HTML5 + Tailwind CSS

1. ESTRUCTURA DE ARCHIVOS

/
├── index.html                <- Archivo principal de la web
├── logo-caña2.png            <- Logo con fondo transparente
├── README.txt                <- Este archivo
└── recetas/                  <- Carpeta para los PDFs de recetas
    ├── pejerrey-frito.pdf
    ├── corvina-parrilla.pdf
    └── guiso-bagre-boga.pdf

2. GUIA RAPIDA DE EDICION - BLOQUES DEL CODIGO

Abrí index.html y buscá por los comentarios <!-- BLOQUE: ... -->

[BLOQUE: HEAD]
Para qué sirve: Configuración general, fuentes, estilos y Tailwind
Qué editar: Títulos, meta tags, colores base, fuentes de Google

[BLOQUE: HEADER / NAVBAR]
Para qué sirve: Menú fijo superior con logo
Qué editar: 
- Logo: Cambiar src="logo-caña2.png"
- Links del menú: Agregar/quitar <a href="#seccion">Nombre</a>
- Colores: bg-[#0a1a2a] es el azul oscuro del fondo

[BLOQUE: HERO]
Para qué sirve: Portada principal con título grande
Qué editar: 
- Título y subtítulo
- Imagen de fondo: Cambiar url() en .hero-bg del <style>
- Botón CTA: Texto y link href="#mapa"

[BLOQUE: SOBRE EL STREAMING]
Para qué sirve: Los 3 pilares: Pesca, Cocina, Mapa
Qué editar: Emojis, títulos y textos de cada tarjeta

[BLOQUE: MAPA SPOTS]
ID: #mapa
Para qué sirve: Mapa de Google Maps con los lugares de pesca
Qué editar: Cambiar el src del <iframe> por tu mapa personalizado

[BLOQUE: PLATOS ESTRELLAS]
ID: #platos
Para qué sirve: Mostrar recetas y descargar PDFs
Qué editar:
- Para agregar plato: Copiar y pegar 1 tarjeta completa
- Imagen: Cambiar src del <img>
- Texto: Título, lugar y descripción
- PDF: Cambiar href="recetas/nombre.pdf" y subir el archivo a la carpeta /recetas

[BLOQUE: VIDEOS YOUTUBE]
ID: #videos
Para qué sirve: Catálogo de videos del canal
Qué editar: 
- Cambiar VIDEO_ID_1, VIDEO_ID_2 por el ID real de YouTube
- Ejemplo: https://youtube.com/watch?v=ABC123 -> ID es "ABC123"

[BLOQUE: GALERIA]
ID: #galeria
Para qué sirve: Grilla de fotos
Qué editar: Agregar fotos duplicando la línea <img src="...">

[BLOQUE: CTA]
Para qué sirve: Llamado a suscribirse a YouTube
Qué editar: Cambiar href="https://youtube.com" por tu canal real

[BLOQUE: FOOTER]
Para qué sirve: Pie de página
Qué editar: Texto de copyright y año

3. COLORES PRINCIPALES DEL SITIO

Azul Fondo:     #0a1a2a
Azul Tarjetas:  #1a2a3a  
Celeste Marca:  #00BFFF
Rojo YouTube:   red-600

4. COMO AGREGAR UNA RECETA NUEVA

Paso 1: Crear el PDF de la receta
Paso 2: Guardarlo en /recetas/nombre-receta.pdf
Paso 3: En index.html, BLOQUE PLATOS ESTRELLAS, duplicar 1 tarjeta
Paso 4: Cambiar imagen, texto y href del botón al nuevo PDF

5. NOTAS IMPORTANTES

- El logo debe tener fondo transparente para verse bien sobre el azul
- Todos los links del menú usan #ancla. El id de la sección debe coincidir
- Para que el botón de descarga funcione, el PDF debe existir en la carpeta
- El sitio es responsive. Se adapta a mobile automáticamente con Tailwind

DUDAS? Buscá el bloque que querés editar y seguí las instrucciones.
