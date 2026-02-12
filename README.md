# CRUD `libros_y_cositas` (Laravel - API pública)

Archivos añadidos (esqueleto) para un CRUD público sobre la entidad `LibroYCosita`.

- Modelo: [app/Models/LibroYCosita.php](app/Models/LibroYCosita.php)
- Migración: [database/migrations/2026_02_12_000000_create_libros_y_cositas_table.php](database/migrations/2026_02_12_000000_create_libros_y_cositas_table.php)
- Requests: [app/Http/Requests/StoreLibroYCositaRequest.php](app/Http/Requests/StoreLibroYCositaRequest.php), [app/Http/Requests/UpdateLibroYCositaRequest.php](app/Http/Requests/UpdateLibroYCositaRequest.php)
- Controlador API: [app/Http/Controllers/Api/LibroYCositaController.php](app/Http/Controllers/Api/LibroYCositaController.php)
- Servicio e interfaz: [app/Services/LibroServiceInterface.php](app/Services/LibroServiceInterface.php), [app/Services/LibroService.php](app/Services/LibroService.php)
- Provider para binding: [app/Providers/LibroServiceProvider.php](app/Providers/LibroServiceProvider.php)
- Rutas API: [routes/api.php](routes/api.php)
- Ejemplo `.env`: [.env.example](.env.example)

Instrucciones rápidas

1. Si aún no tienes un proyecto Laravel, crea uno en este directorio (o integra los archivos en un proyecto existente):

```bash
composer create-project laravel/laravel .
```

2. Copia los archivos añadidos a las rutas indicadas (ya están en este repo). Agrega el provider en `config/app.php` dentro del array `providers`:

```php
App\Providers\LibroServiceProvider::class,
```

3. Configura tu base de datos editando `.env` (puedes partir de `.env.example`). Ejemplo para MySQL:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=actividad2
DB_USERNAME=root
DB_PASSWORD=
```

4. Instala dependencias y ejecuta migraciones:

```bash
composer install
php artisan migrate
php artisan serve
```

5. Endpoints (públicos, sin autenticación):

- GET /api/libros-y-cositas            -> listar
- POST /api/libros-y-cositas           -> crear
- GET /api/libros-y-cositas/{id}       -> ver
- PUT/PATCH /api/libros-y-cositas/{id} -> actualizar
- DELETE /api/libros-y-cositas/{id}    -> eliminar

Ejemplo con `curl`:

```bash
curl -X POST http://127.0.0.1:8000/api/libros-y-cositas \
  -H "Content-Type: application/json" \
  -d '{"titulo":"Mi libro","descripcion":"Descripción..."}'
```

Siguientes pasos que puedo hacer por ti:

- Ejecutar `php artisan migrate` en este contenedor (si Laravel está instalado).
- Añadir pruebas PHPUnit para los endpoints.
- Implementar paginación, filtros o validaciones adicionales.
# actividad2
migra datos 
