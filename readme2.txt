# DE LA CAÑA AL PLATO - SITIO WEB

Sitio oficial del programa de pesca y cocina de la Provincia de Buenos Aires.  
Hecho con HTML + TailwindCSS. Diseño responsive 100%.

## 1. ESTRUCTURA DEL PROYECTO
/index.html          <- Archivo principal
/logo-caña2.png      <- Logo
/imagenes/           <- Carpeta de imagenes del sitio
/recetas/            <- Carpeta de PDFs de recetas
README.md            <- Este archivojavascript
## 2. COMO EDITAR EL SITIO SIN ROMPERLO

El `index.html` está dividido en 10 BLOQUES independientes.  
Para hacer una corrección solo tenés que copiar y pegar el BLOQUE completo.

### MAPA DE BLOQUES

| # | BLOQUE | ID / SECCION | FUNCION | QUE EDITAR |
| --- | --- | --- | --- | --- |
| 1 | HEAD | `<head>` | Configuracion global | Titulo, fuentes, colores base |
| 2 | HEADER | `<header>` | Menu fijo superior | Logo, links del menu |
| 3 | HERO | Primera `<section>` | Portada 50/50 con 2 fotos | Imagenes, titulo, boton |
| 3A | HERO IZQ | Sub-bloque dentro de HERO | Foto izquierda al 70% | `imagenes/izquierda.jpg` |
| 3B | HERO DER | Sub-bloque dentro de HERO | Foto derecha full | `imagenes/derecha.jpg` |
| 3C | HERO TXT | Sub-bloque dentro de HERO | Textos y boton | H1, P, Link a #mapa |
| 4 | STREAMING | Sin ID | 3 Cards: Pesca, Cocina, Mapa | Iconos, textos |
| 5 | MAPA | `id="mapa"` | Google Mis Mapas embebido | `mid=` del iframe y del boton |
| 6 | PLATOS | `id="platos"` | Grid de recetas con PDF | Duplicar CARD para agregar |
| 7 | VIDEOS | `id="videos"` | Grid de videos de YouTube | `VIDEO_ID_X` de youtube |
| 8 | GALERIA | `id="galeria"` | Grid de 4 fotos | `src` de las imagenes |
| 9 | CTA | Sin ID | Boton grande a YouTube | Link del canal |
| 10 | FOOTER | `<footer>` | Pie de pagina | Texto y año |

## 3. EJEMPLOS DE CORRECCION RAPIDA

### Caso A: Cambiar la imagen de la izquierda del HERO
1. Ir a BLOQUE 3 > SUB-BLOQUE 3A
2. Cambiar solo esto:
```html
style="background-image: url('imagenes/nueva-foto.jpg');"Caso B: Agregar una receta nueva
Ir a BLOQUE 6: PLATOS ESTRELLASCopiar 1 CARD completa y pegarla abajo de la ultimaCambiar imagen, titulo, ubicacion y link del PDFCaso C: Actualizar el mapa de Google
Ir a BLOQUE 5: MAPA SPOTSCambiar el mid= en 2 lugares: en el iframe y en el botonhtmlsrc="https://www.google.com/maps/d/embed?mid=TU_NUEVO_ID"Caso D: Cambiar color principal
Color principal actual: #00BFFF Celeste
Buscar y reemplazar en todo el archivo.4. NOTAS TECNICAS IMPORTANTES
Tailwind: Se carga por CDN. No necesita instalación.Fuentes: Oswald para titulos. Lato para textos.Responsive: md: significa "desde tablet/desktop". flex-col md:flex-rowHero: Siempre 50% / 50%. La imagen izquierda esta forzada a w-[70%] h-[70%] y centrada.Cache: Si no ves los cambios, hacé Ctrl + Shift + R5. COLORES OFICIALESUsoCodigoEjemploFondo Principal#0a1a2aAzul Marino OscuroFondo Secundario#1a2a3aAzul CardsAcento / Botones#00BFFFCelesteTextowhiteBlanco6. CONTACTO / MANTENIMIENTO
Ultima actualización: Julio 2026Mantenido por: De la Caña al PlatoHecho con ❤️ y mucho pique.javascript
### **Instrucciones para usarlo:**
1.  Creá un archivo nuevo llamado `README.md` en la misma carpeta que `index.html`
2.  Pegá todo el código de arriba
3.  Subilo a GitHub y te queda documentado

Así cualquiera que toque el código sabe dónde pegar sin romper nada.

¿Querés que ahora te haga la versión "modular" donde cada bloque es un `.html` aparte?
