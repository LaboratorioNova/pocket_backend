# Orders

Administración de ordenes. Las ordenes están regidas por los siguientes estatus: 
- CREATED = 1
- APPROVED = 2
- ACTIVE = 3
- CANCELED = 4
- COMPLETE = 5

## index

<small class="badge badge-darkred">requires authentication</small>

Devuelve la lista de ordenes en el sistema

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/orders?from=2021-07-01&to=2021-07-07&date=est&user_id=2.&customer_info_id=3.&search=Juan.&gender=voluptatem&order_state_id=1&per_page=12&page=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders"
);

let params = {
    "from": "2021-07-01",
    "to": "2021-07-07",
    "date": "est",
    "user_id": "2.",
    "customer_info_id": "3.",
    "search": "Juan.",
    "gender": "voluptatem",
    "order_state_id": "1",
    "per_page": "12",
    "page": "1",
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
<div id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"></code></pre>
</div>
<div id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders"></code></pre>
</div>
<form id="form-GETapi-orders" data-method="GET" data-path="api/orders" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders</code></b>
</p>
<p>
<label id="auth-GETapi-orders" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-orders" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>from</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="from" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
date optional Desde que fecha se va a filtrar.
</p>
<p>
<b><code>to</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="to" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
date optional Hasta que fecha se va a filtrar.
</p>
<p>
<b><code>date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="date" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
date optional Fecha en que es la cita. Example 2021-07-07
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="user_id" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Identificador del flebotomista que atiende.
</p>
<p>
<b><code>customer_info_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="customer_info_id" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Identificador del cliente. Example.
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Busca por el nombre del paciente.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Filtra por el genero registrado. Example. Hombre
</p>
<p>
<b><code>order_state_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="order_state_id" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Filtra por el estado de la orden.
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Cantidad de elementos en la que se debe segmentar la paginación.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-orders" data-component="query"  hidden>
<br>
Número de página a la que se quiere acceder (1 en adelante).
</p>
</form>


## show

<small class="badge badge-darkred">requires authentication</small>

Muestra toda la información de una orden

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/orders/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/1"
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
<div id="execution-results-GETapi-orders--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--id-"></code></pre>
</div>
<div id="execution-error-GETapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--id-"></code></pre>
</div>
<form id="form-GETapi-orders--id-" data-method="GET" data-path="api/orders/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-orders--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-orders--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-orders--id-" data-component="url" required  hidden>
<br>
Identificador de la orden.
</p>
</form>


## create

<small class="badge badge-darkred">requires authentication</small>

Crea una orden. Esta registra los datos del paciente ya demás registra la cita en el sistema.

- bodyParam __patient_name__ string required Nombre del paciente Example: Juan
- bodyParam __patient_father_name__ string required Apellido paterno  Example: Valle
- bodyParam __patient_mother_name__ string required Apellido materno  Example: Guerra
- bodyParam __patient_gender__ string required Genero del paciente  Example: Hombre
- bodyParam __patient_birthdate__ string required Fecha de cumpleaños  Example: 2021-07-24
- bodyParam __customer_info_id__ string required Id de la información del usuario Example: 1
- bodyParam __start_date__ date required Horario de la cita. Example: 2021-07-24 11:00:00
- bodyParam __end_date__ date required Horario de la cita. Example: 2021-07-24 11:40:00
- bodyParam __phlebotomist_schedule_id__ int required Configuración del flebotomista que se asignó.  Example: 1
- bodyParam __address_id__ int required Dirección a la que debe asistir el flebotomista. Example: 1
- bodyParam __services__ array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1
- bodyParam __services.*__ int required Identificador de servicio. Example: 1

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"patient_name":"Juan","patient_father_name":"Valle","patient_mother_name":"Guerra","patient_gender":"Hombre","patient_birthdate":"2021-07-24","survey_answered":false,"services":"1","start_date":"2021-07-24 11:00:00","end_date":"2021-07-24 11:40:00","phlebotomist_schedule_id":1,"address_id":1,"customer_info_id":"1"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "patient_name": "Juan",
    "patient_father_name": "Valle",
    "patient_mother_name": "Guerra",
    "patient_gender": "Hombre",
    "patient_birthdate": "2021-07-24",
    "survey_answered": false,
    "services": "1",
    "start_date": "2021-07-24 11:00:00",
    "end_date": "2021-07-24 11:40:00",
    "phlebotomist_schedule_id": 1,
    "address_id": 1,
    "customer_info_id": "1"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-create"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-create"></code></pre>
</div>
<form id="form-POSTapi-orders-create" data-method="POST" data-path="api/orders/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/create</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>patient_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_name" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Nombre del paciente
</p>
<p>
<b><code>patient_father_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_father_name" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Apellido paterno 
</p>
<p>
<b><code>patient_mother_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_mother_name" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Apellido materno 
</p>
<p>
<b><code>patient_gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_gender" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Genero del paciente 
</p>
<p>
<b><code>patient_birthdate</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_birthdate" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Fecha de cumpleaños 
</p>
<p>
<b><code>survey_answered</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-orders-create" hidden><input type="radio" name="survey_answered" value="true" data-endpoint="POSTapi-orders-create" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-orders-create" hidden><input type="radio" name="survey_answered" value="false" data-endpoint="POSTapi-orders-create" data-component="body" ><code>false</code></label>
<br>

</p>
<p>
<details>
<summary>
<b><code>services</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Arreglo de ids de los servicios que el cliente solicitó.
</summary>
<br>
<p>
<b><code>services.*</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="services.*" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Identificador de servicio.
</p>
</details>
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Horario de la cita.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Horario de la cita.
</p>
<p>
<b><code>phlebotomist_schedule_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phlebotomist_schedule_id" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Configuración del flebotomista que se asignó.
</p>
<p>
<b><code>address_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="address_id" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Dirección a la que debe asistir el flebotomista.
</p>
<p>
<b><code>customer_info_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="customer_info_id" data-endpoint="POSTapi-orders-create" data-component="body" required  hidden>
<br>
Id de la información del usuario
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Permite actualizar una order. Esto permite cambiar
- El horario
- El flebotomista
- La dirección
- Los servicios (esto también modificará el costo)
- La información del paciente

- bodyParam __patient_name__ string required Nombre del paciente Example: Juan
- bodyParam __patient_father_name__ string required Apellido paterno  Example: Valle
- bodyParam __patient_mother_name__ string required Apellido materno  Example: Guerra
- bodyParam __patient_gender__ string required Genero del paciente  Example: Hombre
- bodyParam __patient_birthdate__ string required Fecha de cumpleaños  Example: 2021-07-24
- bodyParam __customer_info_id__ string required Id de la información del usuario Example: 1
- bodyParam __start_date__ date required Horario de la cita. Example: 2021-07-24 11:00:00
- bodyParam __end_date__ date required Horario de la cita. Example: 2021-07-24 11:40:00
- bodyParam __phlebotomist_schedule_id__ int required Configuración del flebotomista que se asignó.  Example: 1
- bodyParam __address_id__ int required Dirección a la que debe asistir el flebotomista. Example: 1
- bodyParam __services__ array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1
- bodyParam __services.*__ int required Identificador de servicio. Example: 1

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/update/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"patient_name":"Juan","patient_father_name":"Valle","patient_mother_name":"Guerra","patient_gender":"Hombre","patient_birthdate":"2021-07-24","survey_answered":false,"services":"1","start_date":"2021-07-24 11:00:00","end_date":"2021-07-24 11:40:00","phlebotomist_schedule_id":1,"address_id":1,"customer_info_id":"1"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/update/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "patient_name": "Juan",
    "patient_father_name": "Valle",
    "patient_mother_name": "Guerra",
    "patient_gender": "Hombre",
    "patient_birthdate": "2021-07-24",
    "survey_answered": false,
    "services": "1",
    "start_date": "2021-07-24 11:00:00",
    "end_date": "2021-07-24 11:40:00",
    "phlebotomist_schedule_id": 1,
    "address_id": 1,
    "customer_info_id": "1"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-update--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-update--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-update--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-update--id-"></code></pre>
</div>
<form id="form-POSTapi-orders-update--id-" data-method="POST" data-path="api/orders/update/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-update--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/update/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-update--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-update--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-orders-update--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>patient_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_name" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Nombre del paciente
</p>
<p>
<b><code>patient_father_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_father_name" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Apellido paterno 
</p>
<p>
<b><code>patient_mother_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_mother_name" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Apellido materno 
</p>
<p>
<b><code>patient_gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_gender" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Genero del paciente 
</p>
<p>
<b><code>patient_birthdate</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patient_birthdate" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Fecha de cumpleaños 
</p>
<p>
<b><code>survey_answered</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-orders-update--id-" hidden><input type="radio" name="survey_answered" value="true" data-endpoint="POSTapi-orders-update--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-orders-update--id-" hidden><input type="radio" name="survey_answered" value="false" data-endpoint="POSTapi-orders-update--id-" data-component="body" ><code>false</code></label>
<br>

</p>
<p>
<details>
<summary>
<b><code>services</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Arreglo de ids de los servicios que el cliente solicitó.
</summary>
<br>
<p>
<b><code>services.*</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="services.*" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Identificador de servicio.
</p>
</details>
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Horario de la cita.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Horario de la cita.
</p>
<p>
<b><code>phlebotomist_schedule_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phlebotomist_schedule_id" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Configuración del flebotomista que se asignó.
</p>
<p>
<b><code>address_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="address_id" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Dirección a la que debe asistir el flebotomista.
</p>
<p>
<b><code>customer_info_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="customer_info_id" data-endpoint="POSTapi-orders-update--id-" data-component="body" required  hidden>
<br>
Id de la información del usuario
</p>

</form>


## canceled

<small class="badge badge-darkred">requires authentication</small>

Permite cambiar de estatus una orden a estado cancelado. Sí el usuario es
de rol Cliente podrá cancelarla solo sí la orden está en estatus creado; Sí
el usuario es de rol Flebotomista la podrá cancelar sí está en estado activo.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/canceled/consequatur?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/canceled/consequatur"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-canceled--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-canceled--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-canceled--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-canceled--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-canceled--id-"></code></pre>
</div>
<form id="form-POSTapi-orders-canceled--id-" data-method="POST" data-path="api/orders/canceled/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-canceled--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/canceled/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-canceled--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-canceled--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-orders-canceled--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-orders-canceled--id-" data-component="query"  hidden>
<br>
Identificador de la orden.
</p>
</form>


## complete

<small class="badge badge-darkred">requires authentication</small>

Permite cambiar de estatus una orden a estado completado.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/complete/iure?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/complete/iure"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-complete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-complete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-complete--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-complete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-complete--id-"></code></pre>
</div>
<form id="form-POSTapi-orders-complete--id-" data-method="POST" data-path="api/orders/complete/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-complete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/complete/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-complete--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-complete--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-orders-complete--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-orders-complete--id-" data-component="query"  hidden>
<br>
Identificador de la orden.
</p>
</form>


## active

<small class="badge badge-darkred">requires authentication</small>

Permite cambiar de estatus una orden a estado activo.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/active/exercitationem?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/active/exercitationem"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-active--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-active--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-active--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-active--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-active--id-"></code></pre>
</div>
<form id="form-POSTapi-orders-active--id-" data-method="POST" data-path="api/orders/active/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-active--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/active/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-active--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-active--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-orders-active--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-orders-active--id-" data-component="query"  hidden>
<br>
Identificador de la orden.
</p>
</form>


## mark-survey-answered

<small class="badge badge-darkred">requires authentication</small>

Indica que la encuesta de la orden ya ha sido contestada

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders/mark-survey-answered/laboriosam?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/mark-survey-answered/laboriosam"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-mark-survey-answered--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-mark-survey-answered--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-mark-survey-answered--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-mark-survey-answered--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-mark-survey-answered--id-"></code></pre>
</div>
<form id="form-POSTapi-orders-mark-survey-answered--id-" data-method="POST" data-path="api/orders/mark-survey-answered/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-mark-survey-answered--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/mark-survey-answered/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-orders-mark-survey-answered--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-orders-mark-survey-answered--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-orders-mark-survey-answered--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-orders-mark-survey-answered--id-" data-component="query"  hidden>
<br>
Identificador de la orden.
</p>
</form>



