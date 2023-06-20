# Services

Servicios para manejo de servicios (estudios)

## available

<small class="badge badge-darkred">requires authentication</small>

Muestra la lista de servicios que están disponibles

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/services/available?search=incidunt&per_page=8&page=16" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/available"
);

let params = {
    "search": "incidunt",
    "per_page": "8",
    "page": "16",
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


> Example response (200):

```json
{
    "version": "v1",
    "data": {
        "current_page": 16,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/services\/available?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/services\/available?page=1",
        "links": [
            {
                "url": "http:\/\/localhost\/api\/services\/available?page=15",
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/services\/available?page=1",
                "label": "1",
                "active": false
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/services\/available",
        "per_page": 8,
        "prev_page_url": "http:\/\/localhost\/api\/services\/available?page=15",
        "to": null,
        "total": 0
    }
}
```
<div id="execution-results-GETapi-services-available" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services-available"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services-available"></code></pre>
</div>
<div id="execution-error-GETapi-services-available" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services-available"></code></pre>
</div>
<form id="form-GETapi-services-available" data-method="GET" data-path="api/services/available" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services-available', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services/available</code></b>
</p>
<p>
<label id="auth-GETapi-services-available" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-services-available" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-services-available" data-component="query"  hidden>
<br>
Campo que será usado para buscar coincidencias entre los servicios. Example. Orina
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-services-available" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-services-available" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
</form>


## show

<small class="badge badge-darkred">requires authentication</small>

Muestra la información de un servicio.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/services/4" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/4"
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


> Example response (404):

```json
{
    "version": "v1",
    "error": "No existe un registro disponible para id = 4"
}
```
<div id="execution-results-GETapi-services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services--id-"></code></pre>
</div>
<div id="execution-error-GETapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services--id-"></code></pre>
</div>
<form id="form-GETapi-services--id-" data-method="GET" data-path="api/services/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-services--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-services--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-services--id-" data-component="url" required  hidden>
<br>
Identificador del servicio
</p>
</form>


## index

<small class="badge badge-darkred">requires authentication</small>

Muestra la lista de servicios

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/services?search=ea&per_page=9&page=13" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services"
);

let params = {
    "search": "ea",
    "per_page": "9",
    "page": "13",
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
<div id="execution-results-GETapi-services" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services"></code></pre>
</div>
<div id="execution-error-GETapi-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services"></code></pre>
</div>
<form id="form-GETapi-services" data-method="GET" data-path="api/services" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services</code></b>
</p>
<p>
<label id="auth-GETapi-services" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-services" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-services" data-component="query"  hidden>
<br>
Campo que será usado para buscar coincidencias entre los servicios
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-services" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-services" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
</form>


## create
Registra un nuevo servicio.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/services/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et","request":"doloribus","public_cost":162174.2,"process_time":14}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et",
    "request": "doloribus",
    "public_cost": 162174.2,
    "process_time": 14
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-services-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-services-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services-create"></code></pre>
</div>
<div id="execution-error-POSTapi-services-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services-create"></code></pre>
</div>
<form id="form-POSTapi-services-create" data-method="POST" data-path="api/services/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-services-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/services/create</code></b>
</p>
<p>
<label id="auth-POSTapi-services-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-services-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-services-create" data-component="body" required  hidden>
<br>
Nombre del servicio.
</p>
<p>
<b><code>request</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="request" data-endpoint="POSTapi-services-create" data-component="body" required  hidden>
<br>
Requerimientos del servicio (Requisitos de tiempo y de cuidados).
</p>
<p>
<b><code>public_cost</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="public_cost" data-endpoint="POSTapi-services-create" data-component="body" required  hidden>
<br>
Precio al público del estudio.
</p>
<p>
<b><code>process_time</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="process_time" data-endpoint="POSTapi-services-create" data-component="body" required  hidden>
<br>
Tiempo del proceso del estudio.
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza la información de un servicio.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/services/2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"tempore","request":"saepe","public_cost":427.270781597,"process_time":12,"enable":17}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/2"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "tempore",
    "request": "saepe",
    "public_cost": 427.270781597,
    "process_time": 12,
    "enable": 17
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services--id-"></code></pre>
</div>
<form id="form-POSTapi-services--id-" data-method="POST" data-path="api/services/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/services/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-services--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-services--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-services--id-" data-component="url" required  hidden>
<br>
Identificador del servicio
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-services--id-" data-component="body" required  hidden>
<br>
Nombre del servicio.
</p>
<p>
<b><code>request</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="request" data-endpoint="POSTapi-services--id-" data-component="body" required  hidden>
<br>
Requerimientos del servicio (Requisitos de timpo y de cuidados).
</p>
<p>
<b><code>public_cost</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="public_cost" data-endpoint="POSTapi-services--id-" data-component="body" required  hidden>
<br>
Precio al público del estudio.
</p>
<p>
<b><code>process_time</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="process_time" data-endpoint="POSTapi-services--id-" data-component="body" required  hidden>
<br>
Tiempo del proceso del estudio.
</p>
<p>
<b><code>enable</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="enable" data-endpoint="POSTapi-services--id-" data-component="body"  hidden>
<br>
Indica si el estudio esta activo. [0, 1]
</p>

</form>


## delete

<small class="badge badge-darkred">requires authentication</small>

Elimina un servicio.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/services/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/6"
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


<div id="execution-results-DELETEapi-services--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-services--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-services--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-services--id-"></code></pre>
</div>
<form id="form-DELETEapi-services--id-" data-method="DELETE" data-path="api/services/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-services--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/services/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-services--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-services--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-services--id-" data-component="url" required  hidden>
<br>
Identificador del servicio
</p>
</form>



