# Addresses

Servicios para manejo de direcciones

## index

<small class="badge badge-darkred">requires authentication</small>

Muestra la lista de direcciones

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/addresses/10?search=id&per_page=17&page=5" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/addresses/10"
);

let params = {
    "search": "id",
    "per_page": "17",
    "page": "5",
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
<div id="execution-results-GETapi-addresses--customer-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-addresses--customer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-addresses--customer-"></code></pre>
</div>
<div id="execution-error-GETapi-addresses--customer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-addresses--customer-"></code></pre>
</div>
<form id="form-GETapi-addresses--customer-" data-method="GET" data-path="api/addresses/{customer}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-addresses--customer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/addresses/{customer}</code></b>
</p>
<p>
<label id="auth-GETapi-addresses--customer-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-addresses--customer-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer" data-endpoint="GETapi-addresses--customer-" data-component="url" required  hidden>
<br>
Identificador del cliente
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-addresses--customer-" data-component="url" required  hidden>
<br>
Identificador de la dirección
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-addresses--customer-" data-component="query"  hidden>
<br>
Campo que será usado para buscar coincidencias entre las direcciones
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-addresses--customer-" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-addresses--customer-" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
</form>


## create

<small class="badge badge-darkred">requires authentication</small>

Registra una nueva dirección.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/addresses/20/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"Francisco I. Madero","neighborhood":"Colonia centro","num_ext":"321","num_int":"1","state":"Guanajuato","city":"Le\u00f3n","zip_code":"37000","latitude":"21.1211672","longitude":"-101.6789836","zone_id":"2","references":"Es en una casa rosa con porton azul"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/addresses/20/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "Francisco I. Madero",
    "neighborhood": "Colonia centro",
    "num_ext": "321",
    "num_int": "1",
    "state": "Guanajuato",
    "city": "Le\u00f3n",
    "zip_code": "37000",
    "latitude": "21.1211672",
    "longitude": "-101.6789836",
    "zone_id": "2",
    "references": "Es en una casa rosa con porton azul"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-addresses--customer--create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-addresses--customer--create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-addresses--customer--create"></code></pre>
</div>
<div id="execution-error-POSTapi-addresses--customer--create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-addresses--customer--create"></code></pre>
</div>
<form id="form-POSTapi-addresses--customer--create" data-method="POST" data-path="api/addresses/{customer}/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-addresses--customer--create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/addresses/{customer}/create</code></b>
</p>
<p>
<label id="auth-POSTapi-addresses--customer--create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-addresses--customer--create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer" data-endpoint="POSTapi-addresses--customer--create" data-component="url" required  hidden>
<br>
Identificador del cliente
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-addresses--customer--create" data-component="url" required  hidden>
<br>
Identificador de la dirección
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="street" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Calle.
</p>
<p>
<b><code>neighborhood</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="neighborhood" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Colonia.
</p>
<p>
<b><code>num_ext</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="num_ext" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Número exterior.
</p>
<p>
<b><code>num_int</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="num_int" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Número interior del departamento .
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="state" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Estado.
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Ciudad.
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="zip_code" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Código postal.
</p>
<p>
<b><code>latitude</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="latitude" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Latitud.
</p>
<p>
<b><code>longitude</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="longitude" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Longitud.
</p>
<p>
<b><code>zone_id</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="zone_id" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Zona a la cual pertenece la dirección .
</p>
<p>
<b><code>references</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="references" data-endpoint="POSTapi-addresses--customer--create" data-component="body"  hidden>
<br>
Referencias para la dirección .
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza la información de una dirección.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/addresses/13/20" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"Francisco I. Madero","neighborhood":"Colonia centro","num_ext":"321","num_int":"1","state":"Guanajuato","city":"Le\u00f3n","zip_code":"37000","latitude":"21.1211672","longitude":"-101.6789836","zone_id":"2","references":"Es en una casa rosa con porton azul"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/addresses/13/20"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "Francisco I. Madero",
    "neighborhood": "Colonia centro",
    "num_ext": "321",
    "num_int": "1",
    "state": "Guanajuato",
    "city": "Le\u00f3n",
    "zip_code": "37000",
    "latitude": "21.1211672",
    "longitude": "-101.6789836",
    "zone_id": "2",
    "references": "Es en una casa rosa con porton azul"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-addresses--customer---id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-addresses--customer---id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-addresses--customer---id-"></code></pre>
</div>
<div id="execution-error-POSTapi-addresses--customer---id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-addresses--customer---id-"></code></pre>
</div>
<form id="form-POSTapi-addresses--customer---id-" data-method="POST" data-path="api/addresses/{customer}/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-addresses--customer---id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/addresses/{customer}/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-addresses--customer---id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-addresses--customer---id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer" data-endpoint="POSTapi-addresses--customer---id-" data-component="url" required  hidden>
<br>
Identificador del cliente
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-addresses--customer---id-" data-component="url" required  hidden>
<br>
Identificador de la dirección
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="street" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Calle.
</p>
<p>
<b><code>neighborhood</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="neighborhood" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Colonia.
</p>
<p>
<b><code>num_ext</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="num_ext" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Número exterior.
</p>
<p>
<b><code>num_int</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="num_int" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Número interior del departamento .
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="state" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Estado.
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Ciudad.
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>optional</small>     <i>optional</i> &nbsp;
<input type="text" name="zip_code" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Código postal.
</p>
<p>
<b><code>latitude</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="latitude" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Latitud.
</p>
<p>
<b><code>longitude</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="longitude" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Longitud.
</p>
<p>
<b><code>zone_id</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="zone_id" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Zona a la cual pertenece la dirección .
</p>
<p>
<b><code>references</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="references" data-endpoint="POSTapi-addresses--customer---id-" data-component="body"  hidden>
<br>
Referencias para la dirección .
</p>

</form>


## delete

<small class="badge badge-darkred">requires authentication</small>

Elimina una dirección.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/addresses/19/2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/addresses/19/2"
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


<div id="execution-results-DELETEapi-addresses--customer---id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-addresses--customer---id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-addresses--customer---id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-addresses--customer---id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-addresses--customer---id-"></code></pre>
</div>
<form id="form-DELETEapi-addresses--customer---id-" data-method="DELETE" data-path="api/addresses/{customer}/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-addresses--customer---id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/addresses/{customer}/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-addresses--customer---id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-addresses--customer---id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer" data-endpoint="DELETEapi-addresses--customer---id-" data-component="url" required  hidden>
<br>
Identificador del cliente
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-addresses--customer---id-" data-component="url" required  hidden>
<br>
Identificador de la dirección
</p>
</form>



