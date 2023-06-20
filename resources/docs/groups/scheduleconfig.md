# ScheduleConfig

Administración de la configuración del calendario de horarios de atención. 
Estos endpoints se encargan de gestionar el horario dee atención por día, 
la duración de una cita, y la cantaidad de zonas que se atiende por días. 

También provee información al cliente de los horarios que están disponibles.

## index

<small class="badge badge-darkred">requires authentication</small>

Obtiene la lista de configuraciones de horarios de las próximas 2 semanas.
Esto corresponde a la configuración diaría.
- El horario de atención
- La duración de las citas
- Las zonas que se atenderán ese día

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/schedule-configs" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs"
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
<div id="execution-results-GETapi-schedule-configs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-schedule-configs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule-configs"></code></pre>
</div>
<div id="execution-error-GETapi-schedule-configs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule-configs"></code></pre>
</div>
<form id="form-GETapi-schedule-configs" data-method="GET" data-path="api/schedule-configs" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule-configs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/schedule-configs</code></b>
</p>
<p>
<label id="auth-GETapi-schedule-configs" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-schedule-configs" data-component="header"></label>
</p>
</form>


## update-schedule

<small class="badge badge-darkred">requires authentication</small>

Actualiza el horario de inicio, de finalización, hora de comida y cantidad disponibles de rutas en un día específico

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/schedule-configs/update/deleniti?id=magnam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"appointment_duration":13,"start_date":"et","end_date":"ut","quantity_zones":"voluptas","breakfast_schedule_id":"perferendis","breakfast_start_date":"quod","breakfast_end_date":"minus"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/update/deleniti"
);

let params = {
    "id": "magnam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "appointment_duration": 13,
    "start_date": "et",
    "end_date": "ut",
    "quantity_zones": "voluptas",
    "breakfast_schedule_id": "perferendis",
    "breakfast_start_date": "quod",
    "breakfast_end_date": "minus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-schedule-configs-update--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-schedule-configs-update--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-schedule-configs-update--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-schedule-configs-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-schedule-configs-update--id-"></code></pre>
</div>
<form id="form-POSTapi-schedule-configs-update--id-" data-method="POST" data-path="api/schedule-configs/update/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-schedule-configs-update--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/schedule-configs/update/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-schedule-configs-update--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-schedule-configs-update--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="query" required  hidden>
<br>
numeric Identificador de la configuración de horarios (ScheduleConfig)
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>appointment_duration</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="appointment_duration" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
Duración de la citas. Example : 16
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>Date</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
Hora de inicio de las citas. Example : "2021-08-12 09:00:00"
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>Date</small>     <i>optional</i> &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
Hora de finalización de las citas. Example : "2021-08-12 15:00:00"
</p>
<p>
<b><code>quantity_zones</code></b>&nbsp;&nbsp;<small>Cantidad</small>     <i>optional</i> &nbsp;
<input type="text" name="quantity_zones" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
de Zonas que se tendrán disponibles por ese día. Example : 3
</p>
<p>
<b><code>breakfast_schedule_id</code></b>&nbsp;&nbsp;<small>Id</small>     <i>optional</i> &nbsp;
<input type="text" name="breakfast_schedule_id" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
del registro del horario de comida. Example 5
</p>
<p>
<b><code>breakfast_start_date</code></b>&nbsp;&nbsp;<small>Hora</small>     <i>optional</i> &nbsp;
<input type="text" name="breakfast_start_date" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
de inicio de la comida. Example : "2021-08-12 12:10:00"
</p>
<p>
<b><code>breakfast_end_date</code></b>&nbsp;&nbsp;<small>Hora</small>     <i>optional</i> &nbsp;
<input type="text" name="breakfast_end_date" data-endpoint="POSTapi-schedule-configs-update--id-" data-component="body"  hidden>
<br>
de finalización de la comida. Example : "2021-08-12 12:50:00"
</p>

</form>


## update-phlebotomist

<small class="badge badge-darkred">requires authentication</small>

Actualiza los flebotomistas que estan asignados a las rutas

- bodyParam __changes__ array required Arreglo de cambios que se efectuaran hacía las asignaciones de zonas por flebotomista
- bodyParam __changes.*.phlebotomist_schedule_id__ Configuración de flebotomista. Example: 1
- bodyParam _changes.*.user_id_ Nuevo flebotomista que será asingado a la zona. Example: 1

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/schedule-configs/update-phlebotomists" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"changes":"accusantium"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/update-phlebotomists"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "changes": "accusantium"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-schedule-configs-update-phlebotomists" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-schedule-configs-update-phlebotomists"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-schedule-configs-update-phlebotomists"></code></pre>
</div>
<div id="execution-error-POSTapi-schedule-configs-update-phlebotomists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-schedule-configs-update-phlebotomists"></code></pre>
</div>
<form id="form-POSTapi-schedule-configs-update-phlebotomists" data-method="POST" data-path="api/schedule-configs/update-phlebotomists" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-schedule-configs-update-phlebotomists', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/schedule-configs/update-phlebotomists</code></b>
</p>
<p>
<label id="auth-POSTapi-schedule-configs-update-phlebotomists" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-schedule-configs-update-phlebotomists" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>changes</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Arreglo de cambios que se efectuaran hacía las asignaciones de zonas por flebotomista
</summary>
<br>
<p>
<details>
<summary>
<b><code>changes.*</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>changes.*.phlebotomist_schedule_id</code></b>&nbsp;&nbsp;<small>Configuración</small>     <i>optional</i> &nbsp;
<input type="text" name="changes.*.phlebotomist_schedule_id" data-endpoint="POSTapi-schedule-configs-update-phlebotomists" data-component="body"  hidden>
<br>
de flebotomista.
</p>
<p>
<b><code>changes.*.user_id</code></b>&nbsp;&nbsp;<small>Nuevo</small>     <i>optional</i> &nbsp;
<input type="text" name="changes.*.user_id" data-endpoint="POSTapi-schedule-configs-update-phlebotomists" data-component="body"  hidden>
<br>
flebotomista que será asingado a la zona.
</p>
</details>
</p>

</details>
</p>

</form>


## update-distribution

<small class="badge badge-darkred">requires authentication</small>

Permite actualizar la configuración de rutas

- bodyParam __phlebotomists__ array required Arreglo de phlebotomistas con sus zonas.
- bodyParam __phlebotomists.*.zone_id__ int required Identificador de la zona. Example: 1
- bodyParam __phlebotomists.*.user_id__ int required Identificador del flebotomista. Example: 1
- bodyParam __date__ int required Fecha a la que se le quiere editar la configuración. Example: 1

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/schedule-configs/update-distribution" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/update-distribution"
);

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


<div id="execution-results-POSTapi-schedule-configs-update-distribution" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-schedule-configs-update-distribution"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-schedule-configs-update-distribution"></code></pre>
</div>
<div id="execution-error-POSTapi-schedule-configs-update-distribution" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-schedule-configs-update-distribution"></code></pre>
</div>
<form id="form-POSTapi-schedule-configs-update-distribution" data-method="POST" data-path="api/schedule-configs/update-distribution" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-schedule-configs-update-distribution', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/schedule-configs/update-distribution</code></b>
</p>
<p>
<label id="auth-POSTapi-schedule-configs-update-distribution" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-schedule-configs-update-distribution" data-component="header"></label>
</p>
</form>


## fetch-current-zones

<small class="badge badge-darkred">requires authentication</small>

Este servicio devuelve la configuración de todos los flebotomistas que atenderán el día de hoy.
Además se adjunta la zona a la que estarán atendiendo. De esta manera se espera que el cliente
pueda analizar a qué zona pertece hoy y así consultar los horarios disponibles con el servicio
schedule.

Este servicio es importante por que las zonas varían según el día, y como no son fijas hay que
consultarlas.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/fetch-current-zones?date=2021-08-30" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/fetch-current-zones"
);

let params = {
    "date": "2021-08-30",
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
<div id="execution-results-GETapi-schedule-configs-fetch-current-zones" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-schedule-configs-fetch-current-zones"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule-configs-fetch-current-zones"></code></pre>
</div>
<div id="execution-error-GETapi-schedule-configs-fetch-current-zones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule-configs-fetch-current-zones"></code></pre>
</div>
<form id="form-GETapi-schedule-configs-fetch-current-zones" data-method="GET" data-path="api/schedule-configs/fetch-current-zones" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule-configs-fetch-current-zones', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/schedule-configs/fetch-current-zones</code></b>
</p>
<p>
<label id="auth-GETapi-schedule-configs-fetch-current-zones" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-schedule-configs-fetch-current-zones" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date" data-endpoint="GETapi-schedule-configs-fetch-current-zones" data-component="query" required  hidden>
<br>
date fecha de la que se quiere consultar las zonas activas.
</p>
</form>


## schedule

<small class="badge badge-darkred">requires authentication</small>

Va a devolver la lista de horarios disponibles para el usario en determinada zona.

Para conseguir el parámetro phlebotomist_schedule_id es necesario consultar el servicio
fetchCurrentZones, que permitirá evaluar al cliente cuál es la zona a la que le compete
analizar.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/schedule?phlebotomist_schedule_id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/schedule"
);

let params = {
    "phlebotomist_schedule_id": "1",
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
<div id="execution-results-GETapi-schedule-configs-schedule" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-schedule-configs-schedule"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule-configs-schedule"></code></pre>
</div>
<div id="execution-error-GETapi-schedule-configs-schedule" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule-configs-schedule"></code></pre>
</div>
<form id="form-GETapi-schedule-configs-schedule" data-method="GET" data-path="api/schedule-configs/schedule" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule-configs-schedule', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/schedule-configs/schedule</code></b>
</p>
<p>
<label id="auth-GETapi-schedule-configs-schedule" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-schedule-configs-schedule" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>phlebotomist_schedule_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phlebotomist_schedule_id" data-endpoint="GETapi-schedule-configs-schedule" data-component="query" required  hidden>
<br>
Configuración del flebotomista.
</p>
</form>


## orders

<small class="badge badge-darkred">requires authentication</small>

Trae las ordenes que han sido programadas en un día en específico.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/orders?date=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/orders"
);

let params = {
    "date": "1",
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
<div id="execution-results-GETapi-schedule-configs-orders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-schedule-configs-orders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule-configs-orders"></code></pre>
</div>
<div id="execution-error-GETapi-schedule-configs-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule-configs-orders"></code></pre>
</div>
<form id="form-GETapi-schedule-configs-orders" data-method="GET" data-path="api/schedule-configs/orders" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule-configs-orders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/schedule-configs/orders</code></b>
</p>
<p>
<label id="auth-GETapi-schedule-configs-orders" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-schedule-configs-orders" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date" data-endpoint="GETapi-schedule-configs-orders" data-component="query" required  hidden>
<br>
date Día que se quiere consultar.
</p>
</form>


## create

<small class="badge badge-darkred">requires authentication</small>

Crear la configuración de los horarios de las próximas dos semanas

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/schedule-configs/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/schedule-configs/create"
);

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


<div id="execution-results-POSTapi-schedule-configs-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-schedule-configs-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-schedule-configs-create"></code></pre>
</div>
<div id="execution-error-POSTapi-schedule-configs-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-schedule-configs-create"></code></pre>
</div>
<form id="form-POSTapi-schedule-configs-create" data-method="POST" data-path="api/schedule-configs/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-schedule-configs-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/schedule-configs/create</code></b>
</p>
<p>
<label id="auth-POSTapi-schedule-configs-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-schedule-configs-create" data-component="header"></label>
</p>
</form>



