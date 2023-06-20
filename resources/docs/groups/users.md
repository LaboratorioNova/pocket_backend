# Users

CRUD de servicios para usuarios

## create-customer

<small class="badge badge-darkred">requires authentication</small>

Registra a un nuevo usuario

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/sign-up-customer" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quidem","last_name_father":"blanditiis","last_name_mother":"dolorem","phone_number":"quia","password":"saepe","email":"voluptatibus","role_id":20,"gender":"voluptatem","birthdate":"atque"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/sign-up-customer"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quidem",
    "last_name_father": "blanditiis",
    "last_name_mother": "dolorem",
    "phone_number": "quia",
    "password": "saepe",
    "email": "voluptatibus",
    "role_id": 20,
    "gender": "voluptatem",
    "birthdate": "atque"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-sign-up-customer" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-sign-up-customer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-sign-up-customer"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-sign-up-customer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-sign-up-customer"></code></pre>
</div>
<form id="form-POSTapi-auth-sign-up-customer" data-method="POST" data-path="api/auth/sign-up-customer" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-sign-up-customer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/sign-up-customer</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-sign-up-customer" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-sign-up-customer" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Nombre del usuario
</p>
<p>
<b><code>last_name_father</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_father" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Apellido paterno
</p>
<p>
<b><code>last_name_mother</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_mother" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Apellido materno
</p>
<p>
<b><code>phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone_number" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Número teléfonico
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Contraseña del usuario
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Correo electrónico del usuario
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Rol del usuario, para esto: 1. Administrador; 2. Flebotomista; 3. Cliente.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Género del cliente. [Hombre-Mujer] Solo cliente
</p>
<p>
<b><code>birthdate</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthdate" data-endpoint="POSTapi-auth-sign-up-customer" data-component="body" required  hidden>
<br>
Fecha de nacimiento Solo cliente
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza la información del usuario.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/users/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"odit","last_name_father":"quam","last_name_mother":"expedita","phone_number":"delectus","password":"sit","email":"bins.davon@example.org","role_id":"est","gender":"placeat","birthdate":"ipsam","zone_id":5}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/users/10"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "odit",
    "last_name_father": "quam",
    "last_name_mother": "expedita",
    "phone_number": "delectus",
    "password": "sit",
    "email": "bins.davon@example.org",
    "role_id": "est",
    "gender": "placeat",
    "birthdate": "ipsam",
    "zone_id": 5
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users--id-"></code></pre>
</div>
<form id="form-POSTapi-users--id-" data-method="POST" data-path="api/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-users--id-" data-component="url" required  hidden>
<br>
Identificar del usuario que se desea actualizar
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-users--id-" data-component="body"  hidden>
<br>
Nombre del usuario
</p>
<p>
<b><code>last_name_father</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name_father" data-endpoint="POSTapi-users--id-" data-component="body"  hidden>
<br>
Apellido paterno
</p>
<p>
<b><code>last_name_mother</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name_mother" data-endpoint="POSTapi-users--id-" data-component="body"  hidden>
<br>
Apellido materno
</p>
<p>
<b><code>phone_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone_number" data-endpoint="POSTapi-users--id-" data-component="body"  hidden>
<br>
Número teléfonico
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-users--id-" data-component="body"  hidden>
<br>
Contraseña del usuario
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-users--id-" data-component="body" required  hidden>
<br>
El campo value debe ser un correo electrónico válido.
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role_id" data-endpoint="POSTapi-users--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-users--id-" data-component="body" required  hidden>
<br>
Género del cliente. [Hombre-Mujer]. Solo cliente
</p>
<p>
<b><code>birthdate</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthdate" data-endpoint="POSTapi-users--id-" data-component="body" required  hidden>
<br>
Fecha de nacimiento. Solo cliente
</p>
<p>
<b><code>zone_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="zone_id" data-endpoint="POSTapi-users--id-" data-component="body" required  hidden>
<br>
Zona a la que está asingado el flebotomista. Solo flebotomista
</p>

</form>


## show
Muestra la información de un usuario

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/users/7" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/users/7"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}
```
<div id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-"></code></pre>
</div>
<form id="form-GETapi-users--id-" data-method="GET" data-path="api/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-users--id-" data-component="url" required  hidden>
<br>
Identificador del usuario al que se quiere ver
</p>
</form>


## index

<small class="badge badge-darkred">requires authentication</small>

Muestra todos los usuarios registrados en el sistema, se entregan de manera paginada y se pueden filtrar.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/users?search=vero&per_page=18&page=15" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/users"
);

let params = {
    "search": "vero",
    "per_page": "18",
    "page": "15",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}
```
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
<p>
<label id="auth-GETapi-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-users" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-users" data-component="query"  hidden>
<br>
Campo que será usado para buscar coincidencias entre los usuarios
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-users" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-users" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
</form>


## create

<small class="badge badge-darkred">requires authentication</small>

Crea un usuario, los parámetros cambian según el rol del usuario que se desea crear.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/users/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nobis","last_name_father":"non","last_name_mother":"sed","phone_number":"reiciendis","password":"est","email":"et","role_id":8,"gender":"et","birthdate":"eum","zone_id":2}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/users/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nobis",
    "last_name_father": "non",
    "last_name_mother": "sed",
    "phone_number": "reiciendis",
    "password": "est",
    "email": "et",
    "role_id": 8,
    "gender": "et",
    "birthdate": "eum",
    "zone_id": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-create"></code></pre>
</div>
<div id="execution-error-POSTapi-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-create"></code></pre>
</div>
<form id="form-POSTapi-users-create" data-method="POST" data-path="api/users/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/create</code></b>
</p>
<p>
<label id="auth-POSTapi-users-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-users-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Nombre del usuario
</p>
<p>
<b><code>last_name_father</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_father" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Apellido paterno
</p>
<p>
<b><code>last_name_mother</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_mother" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Apellido materno
</p>
<p>
<b><code>phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone_number" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Número teléfonico
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Contraseña del usuario
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Correo electrónico del usuario
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Rol del usuario, para esto: 1. Administrador; 2. Flebotomista; 3. Cliente.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Género del cliente. [Hombre-Mujer] Solo cliente
</p>
<p>
<b><code>birthdate</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthdate" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Fecha de nacimiento Solo cliente
</p>
<p>
<b><code>zone_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="zone_id" data-endpoint="POSTapi-users-create" data-component="body" required  hidden>
<br>
Zona a la que está asingado el flebotomista Solo flebotomista
</p>

</form>


## delete
Elimina un usuario.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/users/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/users/10"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-"></code></pre>
</div>
<form id="form-DELETEapi-users--id-" data-method="DELETE" data-path="api/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-users--id-" data-component="url" required  hidden>
<br>
Identificador del usuario al que se quiere eliminar
</p>
</form>



