# Zones

Servicios para administrar zonas

## index
Muestra todas las zonas registradas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/zones" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/zones"
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
<div id="execution-results-GETapi-zones" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-zones"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zones"></code></pre>
</div>
<div id="execution-error-GETapi-zones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zones"></code></pre>
</div>
<form id="form-GETapi-zones" data-method="GET" data-path="api/zones" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-zones', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/zones</code></b>
</p>
<p>
<label id="auth-GETapi-zones" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-zones" data-component="header"></label>
</p>
</form>


## show
Muestra una zona al recibir un identificador

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/zones/maiores?id=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/zones/maiores"
);

let params = {
    "id": "2",
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


> Example response (404):

```json
{
    "errors": [
        "El recurso al que quieres consultar no existe. Ten un buen día ;)"
    ]
}
```
<div id="execution-results-GETapi-zones--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-zones--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zones--id-"></code></pre>
</div>
<div id="execution-error-GETapi-zones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zones--id-"></code></pre>
</div>
<form id="form-GETapi-zones--id-" data-method="GET" data-path="api/zones/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-zones--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/zones/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-zones--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-zones--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-zones--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-zones--id-" data-component="query" required  hidden>
<br>
Identificador de la zona
</p>
</form>


## create
Crea una zona, esta es utilizada para que se asigne a los flebotomistas y direcciones.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/zones/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Zona Centro de Le\u00f3n","polygon":"[[\"21.1197983033326\", \"-101.687003727918\"][\"21.1268038570971\", \"-101.685458775526\"][\"21.1238563506651\", \"-101.677737236023\"][\"21.1178366889814\", \"-101.679708119398\"]]"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/zones/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Zona Centro de Le\u00f3n",
    "polygon": "[[\"21.1197983033326\", \"-101.687003727918\"][\"21.1268038570971\", \"-101.685458775526\"][\"21.1238563506651\", \"-101.677737236023\"][\"21.1178366889814\", \"-101.679708119398\"]]"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-zones-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-zones-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-zones-create"></code></pre>
</div>
<div id="execution-error-POSTapi-zones-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-zones-create"></code></pre>
</div>
<form id="form-POSTapi-zones-create" data-method="POST" data-path="api/zones/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-zones-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/zones/create</code></b>
</p>
<p>
<label id="auth-POSTapi-zones-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-zones-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-zones-create" data-component="body" required  hidden>
<br>
Nombre de la zona.
</p>
<p>
<details>
<summary>
<b><code>polygon</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Lista de puntos dónde que determinan la zona.
</summary>
<br>
<p>
<b><code>polygon.*</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="polygon.*" data-endpoint="POSTapi-zones-create" data-component="body" required  hidden>
<br>
Tupla de valores numéricos (latitud y longitud).
</p>
</details>
</p>

</form>


## update
Actualiza la información de una zona.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/zones/illo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ducimus","polygon":"totam"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/zones/illo"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ducimus",
    "polygon": "totam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-zones--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-zones--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-zones--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-zones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-zones--id-"></code></pre>
</div>
<form id="form-POSTapi-zones--id-" data-method="POST" data-path="api/zones/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-zones--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/zones/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-zones--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-zones--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-zones--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-zones--id-" data-component="body" required  hidden>
<br>
Nombre de la zona.
</p>
<p>
<details>
<summary>
<b><code>polygon</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Lista de puntos dónde que determinan la zona.
</summary>
<br>
<p>
<b><code>polygon.*</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="polygon.*" data-endpoint="POSTapi-zones--id-" data-component="body" required  hidden>
<br>
Tupla de valores numéricos (latitud y longitud).
</p>
</details>
</p>

</form>


## delete
Elimina una zona.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/zones/13" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/zones/13"
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


<div id="execution-results-DELETEapi-zones--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-zones--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-zones--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-zones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-zones--id-"></code></pre>
</div>
<form id="form-DELETEapi-zones--id-" data-method="DELETE" data-path="api/zones/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-zones--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/zones/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-zones--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-zones--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-zones--id-" data-component="url" required  hidden>
<br>
Identificador de la zona que se quiere eliminar.
</p>
</form>



