# Endpoints


## index

<small class="badge badge-darkred">requires authentication</small>

Muestra la lista de días festivos

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/holidays?per_page=9&page=12" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/holidays"
);

let params = {
    "per_page": "9",
    "page": "12",
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
<div id="execution-results-GETapi-holidays" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-holidays"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-holidays"></code></pre>
</div>
<div id="execution-error-GETapi-holidays" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-holidays"></code></pre>
</div>
<form id="form-GETapi-holidays" data-method="GET" data-path="api/holidays" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-holidays', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/holidays</code></b>
</p>
<p>
<label id="auth-GETapi-holidays" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-holidays" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-holidays" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-holidays" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
</form>


## create
Registra un nuevo día festivo.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/holidays/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"holiday":"facere"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/holidays/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "holiday": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-holidays-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-holidays-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-holidays-create"></code></pre>
</div>
<div id="execution-error-POSTapi-holidays-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-holidays-create"></code></pre>
</div>
<form id="form-POSTapi-holidays-create" data-method="POST" data-path="api/holidays/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-holidays-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/holidays/create</code></b>
</p>
<p>
<label id="auth-POSTapi-holidays-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-holidays-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>holiday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="holiday" data-endpoint="POSTapi-holidays-create" data-component="body" required  hidden>
<br>
Fecha del día festivo.
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza un día festivo.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/holidays/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"holiday":"voluptatibus"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/holidays/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "holiday": "voluptatibus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-holidays--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-holidays--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-holidays--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-holidays--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-holidays--id-"></code></pre>
</div>
<form id="form-POSTapi-holidays--id-" data-method="POST" data-path="api/holidays/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-holidays--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/holidays/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-holidays--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-holidays--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-holidays--id-" data-component="url" required  hidden>
<br>
Identificador del día festivo.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>holiday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="holiday" data-endpoint="POSTapi-holidays--id-" data-component="body" required  hidden>
<br>
Fecha del día festivo.
</p>

</form>


## delete

<small class="badge badge-darkred">requires authentication</small>

Elimina un día festivo.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/holidays/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/holidays/6"
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


<div id="execution-results-DELETEapi-holidays--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-holidays--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-holidays--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-holidays--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-holidays--id-"></code></pre>
</div>
<form id="form-DELETEapi-holidays--id-" data-method="DELETE" data-path="api/holidays/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-holidays--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/holidays/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-holidays--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-holidays--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-holidays--id-" data-component="url" required  hidden>
<br>
Identificador del día festivo
</p>
</form>



