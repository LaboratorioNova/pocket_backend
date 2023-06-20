# SpecialDays

Administración de los días que no se trabajan o se trabajan parcialmente

## index

<small class="badge badge-darkred">requires authentication</small>

Muestra la lista de días festivos y días que no se trabaja

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/special-days?day_type=totam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/special-days"
);

let params = {
    "day_type": "totam",
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
<div id="execution-results-GETapi-special-days" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-special-days"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-special-days"></code></pre>
</div>
<div id="execution-error-GETapi-special-days" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-special-days"></code></pre>
</div>
<form id="form-GETapi-special-days" data-method="GET" data-path="api/special-days" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-special-days', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/special-days</code></b>
</p>
<p>
<label id="auth-GETapi-special-days" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-special-days" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>day_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="day_type" data-endpoint="GETapi-special-days" data-component="query"  hidden>
<br>
Tipo de día que se esta seleccionando ('Holiday' o 'NoWorkday').
</p>
</form>


## create
Registra un nuevo día especial.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/special-days/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date":"aut","special_day":"quos"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/special-days/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "aut",
    "special_day": "quos"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-special-days-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-special-days-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-special-days-create"></code></pre>
</div>
<div id="execution-error-POSTapi-special-days-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-special-days-create"></code></pre>
</div>
<form id="form-POSTapi-special-days-create" data-method="POST" data-path="api/special-days/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-special-days-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/special-days/create</code></b>
</p>
<p>
<label id="auth-POSTapi-special-days-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-special-days-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date" data-endpoint="POSTapi-special-days-create" data-component="body" required  hidden>
<br>
Fecha del día especial. Solo poner mes y día ('mm-dd').
</p>
<p>
<b><code>special_day</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="special_day" data-endpoint="POSTapi-special-days-create" data-component="body" required  hidden>
<br>
Tipo de día especial ('Holiday' o 'NoWorkday').
</p>

</form>


## update

<small class="badge badge-darkred">requires authentication</small>

Actualiza la fecha de día especial.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/special-days/11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date":"dolore"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/special-days/11"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "dolore"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-special-days--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-special-days--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-special-days--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-special-days--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-special-days--id-"></code></pre>
</div>
<form id="form-POSTapi-special-days--id-" data-method="POST" data-path="api/special-days/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-special-days--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/special-days/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-special-days--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-special-days--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-special-days--id-" data-component="url" required  hidden>
<br>
Identificador del día especial.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date" data-endpoint="POSTapi-special-days--id-" data-component="body" required  hidden>
<br>
Fecha del día especial. Solo poner mes y día ('mm-dd').
</p>

</form>


## delete

<small class="badge badge-darkred">requires authentication</small>

Elimina un día especial.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/special-days/11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/special-days/11"
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


<div id="execution-results-DELETEapi-special-days--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-special-days--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-special-days--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-special-days--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-special-days--id-"></code></pre>
</div>
<form id="form-DELETEapi-special-days--id-" data-method="DELETE" data-path="api/special-days/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-special-days--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/special-days/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-special-days--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-special-days--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-special-days--id-" data-component="url" required  hidden>
<br>
Identificador del día especial
</p>
</form>



