# Patients

Administración de pacientes para usuarios

## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza la información de una paciente

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"customer_info_id":1,"name":"Juda","last_name_father":"Alector","last_name_mother":"Vallejo","gender":"Masculino","birthdate":"1992-04-15"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/patients/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "customer_info_id": 1,
    "name": "Juda",
    "last_name_father": "Alector",
    "last_name_mother": "Vallejo",
    "gender": "Masculino",
    "birthdate": "1992-04-15"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patients--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patients--id-"></code></pre>
</div>
<form id="form-POSTapi-patients--id-" data-method="POST" data-path="api/patients/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patients/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-patients--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-patients--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-patients--id-" data-component="url" required  hidden>
<br>
Identificador del paciente.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>customer_info_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer_info_id" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
identificador del paciente.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
Nombre del usuario.
</p>
<p>
<b><code>last_name_father</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_father" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
Apellido paterno.
</p>
<p>
<b><code>last_name_mother</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_mother" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
Apellido materno.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
Genero del paciente.
</p>
<p>
<b><code>birthdate</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthdate" data-endpoint="POSTapi-patients--id-" data-component="body" required  hidden>
<br>
Fecha de nacimiento.
</p>

</form>


## show

<small class="badge badge-darkred">requires authentication</small>

Muestra la instancia de un paciente

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/patients/1"
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
<div id="execution-results-GETapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients--id-"></code></pre>
</div>
<div id="execution-error-GETapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients--id-"></code></pre>
</div>
<form id="form-GETapi-patients--id-" data-method="GET" data-path="api/patients/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-patients--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-patients--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-patients--id-" data-component="url" required  hidden>
<br>
Identificador del paciente.
</p>
</form>


## index

<small class="badge badge-darkred">requires authentication</small>

Muestra los pacientes de un cliente

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/patients?search=repudiandae&per_page=18&page=8&customer=11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/patients"
);

let params = {
    "search": "repudiandae",
    "per_page": "18",
    "page": "8",
    "customer": "11",
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
<div id="execution-results-GETapi-patients" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients"></code></pre>
</div>
<div id="execution-error-GETapi-patients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients"></code></pre>
</div>
<form id="form-GETapi-patients" data-method="GET" data-path="api/patients" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients</code></b>
</p>
<p>
<label id="auth-GETapi-patients" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-patients" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-patients" data-component="query"  hidden>
<br>
Campo que será usado para buscar coincidencias entre los usuarios
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-patients" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-patients" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder
</p>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="customer" data-endpoint="GETapi-patients" data-component="query"  hidden>
<br>
Filtra por el cliente al que pertence
</p>
</form>


## create

<small class="badge badge-darkred">requires authentication</small>

Crea un paciente y lo relaciona con un cliente

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/patients/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"customer_info_id":1,"name":"Juda","last_name_father":"Alector","last_name_mother":"Vallejo","gender":"Masculino","birthdate":"1992-04-15"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/patients/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "customer_info_id": 1,
    "name": "Juda",
    "last_name_father": "Alector",
    "last_name_mother": "Vallejo",
    "gender": "Masculino",
    "birthdate": "1992-04-15"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-patients-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patients-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patients-create"></code></pre>
</div>
<div id="execution-error-POSTapi-patients-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patients-create"></code></pre>
</div>
<form id="form-POSTapi-patients-create" data-method="POST" data-path="api/patients/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patients-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patients/create</code></b>
</p>
<p>
<label id="auth-POSTapi-patients-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-patients-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>customer_info_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="customer_info_id" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
identificador del paciente.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
Nombre del usuario.
</p>
<p>
<b><code>last_name_father</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_father" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
Apellido paterno.
</p>
<p>
<b><code>last_name_mother</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name_mother" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
Apellido materno.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
Genero del paciente.
</p>
<p>
<b><code>birthdate</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthdate" data-endpoint="POSTapi-patients-create" data-component="body" required  hidden>
<br>
Fecha de nacimiento.
</p>

</form>


## delete

<small class="badge badge-darkred">requires authentication</small>

Elimina la instancia de un paciente de manera lógica.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/patients/1"
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


<div id="execution-results-DELETEapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-patients--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-patients--id-"></code></pre>
</div>
<form id="form-DELETEapi-patients--id-" data-method="DELETE" data-path="api/patients/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/patients/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-patients--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-patients--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-patients--id-" data-component="url" required  hidden>
<br>
Identificador del paciente.
</p>
</form>



