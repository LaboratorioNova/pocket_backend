<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>AUTO - API - Nova Laboratorio clínico</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: September 2 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Documentación para laboratorio Nova. Esta documentación abarca </p>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000/</code></pre><h1>Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>About</h1>
<h2>contact</h2>
<p>Entrega un número al cual se puede marcar y un whatsapp para mandar mensajes.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/contact" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/contact"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "phone": "6188117230",
        "whatsapp": "+526181588403",
        "whatsappText": "Hola mucho gusto! Quisiera consultar sus servicios!",
        "email": "atencion.labnova@gmail.com",
        "facebook": "https:\/\/www.facebook.com\/labnovamx"
    }
}</code></pre>
<div id="execution-results-GETapi-contact" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-contact"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact"></code></pre>
</div>
<div id="execution-error-GETapi-contact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact"></code></pre>
</div>
<form id="form-GETapi-contact" data-method="GET" data-path="api/contact" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-contact', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/contact</code></b>
</p>
<p>
<label id="auth-GETapi-contact" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-contact" data-component="header"></label>
</p>
</form><h1>Addresses</h1>
<p>Servicios para manejo de direcciones</p>
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la lista de direcciones</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/addresses/10?search=id&amp;per_page=17&amp;page=5" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/addresses/10"
);

let params = {
    "search": "id",
    "per_page": "17",
    "page": "5",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Registra una nueva dirección.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/addresses/20/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"Francisco I. Madero","neighborhood":"Colonia centro","num_ext":"321","num_int":"1","state":"Guanajuato","city":"Le\u00f3n","zip_code":"37000","latitude":"21.1211672","longitude":"-101.6789836","zone_id":"2","references":"Es en una casa rosa con porton azul"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza la información de una dirección.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/addresses/13/20" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"Francisco I. Madero","neighborhood":"Colonia centro","num_ext":"321","num_int":"1","state":"Guanajuato","city":"Le\u00f3n","zip_code":"37000","latitude":"21.1211672","longitude":"-101.6789836","zone_id":"2","references":"Es en una casa rosa con porton azul"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Elimina una dirección.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/addresses/19/2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Auth</h1>
<p>Servicios para la autenticación de los usuarios. Estos servicios no requieren TOKEN.</p>
<h2>sign-in-admin</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Inicio de sesión para usuarios de tipo administrador</p>
<ul>
<li>bodyParam <strong>email</strong> string required Correo del usuario. Example: admin@vulkka.com</li>
<li>bodyParam <strong>password</strong> string required Contraseña del usuario. Example: una_facil</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/sign-in" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"admin@vulkka.com","password":"una_facil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/sign-in"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "admin@vulkka.com",
    "password": "una_facil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-sign-in" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-sign-in"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-sign-in"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-sign-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-sign-in"></code></pre>
</div>
<form id="form-POSTapi-auth-sign-in" data-method="POST" data-path="api/auth/sign-in" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-sign-in', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/sign-in</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-sign-in" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-sign-in" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-sign-in" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-sign-in" data-component="body" required  hidden>
<br>
Contraseña del usuario.
</p>

</form>
<h2>sign-in-admin</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Inicio de sesión para usuarios de tipo administrador</p>
<ul>
<li>bodyParam <strong>email</strong> string required Correo del usuario. Example: admin@vulkka.com</li>
<li>bodyParam <strong>password</strong> string required Contraseña del usuario. Example: una_facil</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/sign-in-admin" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"admin@vulkka.com","password":"una_facil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/sign-in-admin"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "admin@vulkka.com",
    "password": "una_facil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-sign-in-admin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-sign-in-admin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-sign-in-admin"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-sign-in-admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-sign-in-admin"></code></pre>
</div>
<form id="form-POSTapi-auth-sign-in-admin" data-method="POST" data-path="api/auth/sign-in-admin" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-sign-in-admin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/sign-in-admin</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-sign-in-admin" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-sign-in-admin" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-sign-in-admin" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-sign-in-admin" data-component="body" required  hidden>
<br>
Contraseña del usuario.
</p>

</form>
<h2>sign-in-customer</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Inicio de sesión para usuarios de tipo cliente</p>
<ul>
<li>bodyParam <strong>email</strong> string required Correo del usuario. Example: customer@vulkka.com</li>
<li>bodyParam <strong>password</strong> string required Contraseña del usuario. Example: una_facil</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/sign-in-customer" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"customer@vulkka.com","password":"una_facil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/sign-in-customer"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "customer@vulkka.com",
    "password": "una_facil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-sign-in-customer" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-sign-in-customer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-sign-in-customer"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-sign-in-customer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-sign-in-customer"></code></pre>
</div>
<form id="form-POSTapi-auth-sign-in-customer" data-method="POST" data-path="api/auth/sign-in-customer" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-sign-in-customer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/sign-in-customer</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-sign-in-customer" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-sign-in-customer" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-sign-in-customer" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-sign-in-customer" data-component="body" required  hidden>
<br>
Contraseña del usuario.
</p>

</form>
<h2>sign-in-phlebotomist</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Inicio de sesión para usuarios de tipo proveedor</p>
<ul>
<li>bodyParam <strong>email</strong> string required Correo del usuario. Example: supplier@vulkka.com</li>
<li>bodyParam <strong>password</strong> string required Contraseña del usuario. Example: una_facil</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/sign-in-phlebotomist" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"supplier@vulkka.com","password":"una_facil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/sign-in-phlebotomist"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "supplier@vulkka.com",
    "password": "una_facil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-sign-in-phlebotomist" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-sign-in-phlebotomist"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-sign-in-phlebotomist"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-sign-in-phlebotomist" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-sign-in-phlebotomist"></code></pre>
</div>
<form id="form-POSTapi-auth-sign-in-phlebotomist" data-method="POST" data-path="api/auth/sign-in-phlebotomist" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-sign-in-phlebotomist', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/sign-in-phlebotomist</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-sign-in-phlebotomist" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-sign-in-phlebotomist" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-sign-in-phlebotomist" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-sign-in-phlebotomist" data-component="body" required  hidden>
<br>
Contraseña del usuario.
</p>

</form>
<h2>email-code</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Se envía un código para recuperar la contraseña al correo adjunto.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/email-code" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"juda_alector@hotmail.com"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/email-code"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "juda_alector@hotmail.com"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-email-code" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-email-code"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-email-code"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-email-code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-email-code"></code></pre>
</div>
<form id="form-POSTapi-auth-email-code" data-method="POST" data-path="api/auth/email-code" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-email-code', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/email-code</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-email-code" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-email-code" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-email-code" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>

</form>
<h2>email-code</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Se envía un NIP para recuperar la contraseña al correo adjunto.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/email-code-mobile" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"juda_alector@hotmail.com"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/email-code-mobile"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "juda_alector@hotmail.com"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-email-code-mobile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-email-code-mobile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-email-code-mobile"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-email-code-mobile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-email-code-mobile"></code></pre>
</div>
<form id="form-POSTapi-auth-email-code-mobile" data-method="POST" data-path="api/auth/email-code-mobile" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-email-code-mobile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/email-code-mobile</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-email-code-mobile" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-email-code-mobile" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-email-code-mobile" data-component="body" required  hidden>
<br>
Correo del usuario.
</p>

</form>
<h2>password-reset</h2>
<p>Se cambia la contraseña del usuario por una nueva</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/password-reset" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"token":"repellendus","email":"juda_alector@hotmail.com","password":"una_facil2","password_confirmation":"una_facil2"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/password-reset"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "repellendus",
    "email": "juda_alector@hotmail.com",
    "password": "una_facil2",
    "password_confirmation": "una_facil2"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-auth-password-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-password-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-password-reset"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-password-reset"></code></pre>
</div>
<form id="form-POSTapi-auth-password-reset" data-method="POST" data-path="api/auth/password-reset" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-password-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/password-reset</code></b>
</p>
<p>
<label id="auth-POSTapi-auth-password-reset" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-auth-password-reset" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-auth-password-reset" data-component="body"  hidden>
<br>
Required Token de seguridad, este se debió haber obtenido por medio de un correo al consultar el servicio [email-code]
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-password-reset" data-component="body"  hidden>
<br>
Required Correo del usuario.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-password-reset" data-component="body"  hidden>
<br>
Required Nueva contraseña.
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-auth-password-reset" data-component="body"  hidden>
<br>
Required Confirmación de la nueva contraseña.
</p>

</form><h1>Endpoints</h1>
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la lista de días festivos</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/holidays?per_page=9&amp;page=12" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/holidays"
);

let params = {
    "per_page": "9",
    "page": "12",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p>Registra un nuevo día festivo.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/holidays/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"holiday":"facere"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza un día festivo.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/holidays/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"holiday":"voluptatibus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Elimina un día festivo.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/holidays/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Orders</h1>
<p>Administración de ordenes. Las ordenes están regidas por los siguientes estatus: </p>
<ul>
<li>CREATED = 1</li>
<li>APPROVED = 2</li>
<li>ACTIVE = 3</li>
<li>CANCELED = 4</li>
<li>COMPLETE = 5</li>
</ul>
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Devuelve la lista de ordenes en el sistema</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/orders?from=2021-07-01&amp;to=2021-07-07&amp;date=est&amp;user_id=2.&amp;customer_info_id=3.&amp;search=Juan.&amp;gender=voluptatem&amp;order_state_id=1&amp;per_page=12&amp;page=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>show</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra toda la información de una orden</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/orders/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Crea una orden. Esta registra los datos del paciente ya demás registra la cita en el sistema.</p>
<ul>
<li>bodyParam __patient_name__ string required Nombre del paciente Example: Juan</li>
<li>bodyParam <strong>patient_father_name</strong> string required Apellido paterno  Example: Valle</li>
<li>bodyParam <strong>patient_mother_name</strong> string required Apellido materno  Example: Guerra</li>
<li>bodyParam __patient_gender__ string required Genero del paciente  Example: Hombre</li>
<li>bodyParam __patient_birthdate__ string required Fecha de cumpleaños  Example: 2021-07-24</li>
<li>bodyParam <strong>customer_info_id</strong> string required Id de la información del usuario Example: 1</li>
<li>bodyParam __start_date__ date required Horario de la cita. Example: 2021-07-24 11:00:00</li>
<li>bodyParam __end_date__ date required Horario de la cita. Example: 2021-07-24 11:40:00</li>
<li>bodyParam <strong>phlebotomist_schedule_id</strong> int required Configuración del flebotomista que se asignó.  Example: 1</li>
<li>bodyParam __address_id__ int required Dirección a la que debe asistir el flebotomista. Example: 1</li>
<li>bodyParam <strong>services</strong> array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1</li>
<li>bodyParam <strong>services.*</strong> int required Identificador de servicio. Example: 1</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"patient_name":"Juan","patient_father_name":"Valle","patient_mother_name":"Guerra","patient_gender":"Hombre","patient_birthdate":"2021-07-24","survey_answered":false,"services":"1","start_date":"2021-07-24 11:00:00","end_date":"2021-07-24 11:40:00","phlebotomist_schedule_id":1,"address_id":1,"customer_info_id":"1"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Permite actualizar una order. Esto permite cambiar</p>
<ul>
<li>
<p>El horario</p>
</li>
<li>
<p>El flebotomista</p>
</li>
<li>
<p>La dirección</p>
</li>
<li>
<p>Los servicios (esto también modificará el costo)</p>
</li>
<li>
<p>La información del paciente</p>
</li>
<li>
<p>bodyParam __patient_name__ string required Nombre del paciente Example: Juan</p>
</li>
<li>
<p>bodyParam <strong>patient_father_name</strong> string required Apellido paterno  Example: Valle</p>
</li>
<li>
<p>bodyParam <strong>patient_mother_name</strong> string required Apellido materno  Example: Guerra</p>
</li>
<li>
<p>bodyParam __patient_gender__ string required Genero del paciente  Example: Hombre</p>
</li>
<li>
<p>bodyParam __patient_birthdate__ string required Fecha de cumpleaños  Example: 2021-07-24</p>
</li>
<li>
<p>bodyParam <strong>customer_info_id</strong> string required Id de la información del usuario Example: 1</p>
</li>
<li>
<p>bodyParam __start_date__ date required Horario de la cita. Example: 2021-07-24 11:00:00</p>
</li>
<li>
<p>bodyParam __end_date__ date required Horario de la cita. Example: 2021-07-24 11:40:00</p>
</li>
<li>
<p>bodyParam <strong>phlebotomist_schedule_id</strong> int required Configuración del flebotomista que se asignó.  Example: 1</p>
</li>
<li>
<p>bodyParam __address_id__ int required Dirección a la que debe asistir el flebotomista. Example: 1</p>
</li>
<li>
<p>bodyParam <strong>services</strong> array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1</p>
</li>
<li>
<p>bodyParam <strong>services.*</strong> int required Identificador de servicio. Example: 1</p>
</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/update/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"patient_name":"Juan","patient_father_name":"Valle","patient_mother_name":"Guerra","patient_gender":"Hombre","patient_birthdate":"2021-07-24","survey_answered":false,"services":"1","start_date":"2021-07-24 11:00:00","end_date":"2021-07-24 11:40:00","phlebotomist_schedule_id":1,"address_id":1,"customer_info_id":"1"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>canceled</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Permite cambiar de estatus una orden a estado cancelado. Sí el usuario es
de rol Cliente podrá cancelarla solo sí la orden está en estatus creado; Sí
el usuario es de rol Flebotomista la podrá cancelar sí está en estado activo.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/canceled/consequatur?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders/canceled/consequatur"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>complete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Permite cambiar de estatus una orden a estado completado.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/complete/iure?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders/complete/iure"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>active</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Permite cambiar de estatus una orden a estado activo.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/active/exercitationem?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders/active/exercitationem"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>mark-survey-answered</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Indica que la encuesta de la orden ya ha sido contestada</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/orders/mark-survey-answered/laboriosam?id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders/mark-survey-answered/laboriosam"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Patients</h1>
<p>Administración de pacientes para usuarios</p>
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza la información de una paciente</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"customer_info_id":1,"name":"Juda","last_name_father":"Alector","last_name_mother":"Vallejo","gender":"Masculino","birthdate":"1992-04-15"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>show</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la instancia de un paciente</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra los pacientes de un cliente</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/patients?search=repudiandae&amp;per_page=18&amp;page=8&amp;customer=11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/patients"
);

let params = {
    "search": "repudiandae",
    "per_page": "18",
    "page": "8",
    "customer": "11",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Crea un paciente y lo relaciona con un cliente</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/patients/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"customer_info_id":1,"name":"Juda","last_name_father":"Alector","last_name_mother":"Vallejo","gender":"Masculino","birthdate":"1992-04-15"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Elimina la instancia de un paciente de manera lógica.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/patients/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>ScheduleConfig</h1>
<p>Administración de la configuración del calendario de horarios de atención.
Estos endpoints se encargan de gestionar el horario dee atención por día,
la duración de una cita, y la cantaidad de zonas que se atiende por días. </p>
<p>También provee información al cliente de los horarios que están disponibles.</p>
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Obtiene la lista de configuraciones de horarios de las próximas 2 semanas.
Esto corresponde a la configuración diaría.</p>
<ul>
<li>El horario de atención</li>
<li>La duración de las citas</li>
<li>Las zonas que se atenderán ese día</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/schedule-configs" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>update-schedule</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza el horario de inicio, de finalización, hora de comida y cantidad disponibles de rutas en un día específico</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/schedule-configs/update/deleniti?id=magnam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"appointment_duration":13,"start_date":"et","end_date":"ut","quantity_zones":"voluptas","breakfast_schedule_id":"perferendis","breakfast_start_date":"quod","breakfast_end_date":"minus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/schedule-configs/update/deleniti"
);

let params = {
    "id": "magnam",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update-phlebotomist</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza los flebotomistas que estan asignados a las rutas</p>
<ul>
<li>bodyParam <strong>changes</strong> array required Arreglo de cambios que se efectuaran hacía las asignaciones de zonas por flebotomista</li>
<li>bodyParam <strong>changes.*.phlebotomist_schedule_id</strong> Configuración de flebotomista. Example: 1</li>
<li>bodyParam _changes.*.user<em>id</em> Nuevo flebotomista que será asingado a la zona. Example: 1</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/schedule-configs/update-phlebotomists" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"changes":"accusantium"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update-distribution</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Permite actualizar la configuración de rutas</p>
<ul>
<li>bodyParam <strong>phlebotomists</strong> array required Arreglo de phlebotomistas con sus zonas.</li>
<li>bodyParam __phlebotomists.*.zone_id__ int required Identificador de la zona. Example: 1</li>
<li>bodyParam __phlebotomists.*.user_id__ int required Identificador del flebotomista. Example: 1</li>
<li>bodyParam <strong>date</strong> int required Fecha a la que se le quiere editar la configuración. Example: 1</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/schedule-configs/update-distribution" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>fetch-current-zones</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Este servicio devuelve la configuración de todos los flebotomistas que atenderán el día de hoy.
Además se adjunta la zona a la que estarán atendiendo. De esta manera se espera que el cliente
pueda analizar a qué zona pertece hoy y así consultar los horarios disponibles con el servicio
schedule.</p>
<p>Este servicio es importante por que las zonas varían según el día, y como no son fijas hay que
consultarlas.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/fetch-current-zones?date=2021-08-30" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/schedule-configs/fetch-current-zones"
);

let params = {
    "date": "2021-08-30",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>schedule</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Va a devolver la lista de horarios disponibles para el usario en determinada zona.</p>
<p>Para conseguir el parámetro phlebotomist_schedule_id es necesario consultar el servicio
fetchCurrentZones, que permitirá evaluar al cliente cuál es la zona a la que le compete
analizar.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/schedule?phlebotomist_schedule_id=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/schedule-configs/schedule"
);

let params = {
    "phlebotomist_schedule_id": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>orders</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Trae las ordenes que han sido programadas en un día en específico.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/schedule-configs/orders?date=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/schedule-configs/orders"
);

let params = {
    "date": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Crear la configuración de los horarios de las próximas dos semanas</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/schedule-configs/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Services</h1>
<p>Servicios para manejo de servicios (estudios)</p>
<h2>available</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la lista de servicios que están disponibles</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/services/available?search=incidunt&amp;per_page=8&amp;page=16" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services/available"
);

let params = {
    "search": "incidunt",
    "per_page": "8",
    "page": "16",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/services\/available?page=1",
                "label": "1",
                "active": false
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
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
}</code></pre>
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
<h2>show</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la información de un servicio.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/services/4" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "version": "v1",
    "error": "No existe un registro disponible para id = 4"
}</code></pre>
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
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la lista de servicios</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/services?search=ea&amp;per_page=9&amp;page=13" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services"
);

let params = {
    "search": "ea",
    "per_page": "9",
    "page": "13",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p>Registra un nuevo servicio.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/services/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et","request":"doloribus","public_cost":162174.2,"process_time":14}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza la información de un servicio.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/services/2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"tempore","request":"saepe","public_cost":427.270781597,"process_time":12,"enable":17}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Elimina un servicio.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/services/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>SpecialDays</h1>
<p>Administración de los días que no se trabajan o se trabajan parcialmente</p>
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra la lista de días festivos y días que no se trabaja</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/special-days?day_type=totam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/special-days"
);

let params = {
    "day_type": "totam",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p>Registra un nuevo día especial.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/special-days/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date":"aut","special_day":"quos"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza la fecha de día especial.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/special-days/11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date":"dolore"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Elimina un día especial.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/special-days/11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Users</h1>
<p>CRUD de servicios para usuarios</p>
<h2>create-customer</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Registra a un nuevo usuario</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/auth/sign-up-customer" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quidem","last_name_father":"blanditiis","last_name_mother":"dolorem","phone_number":"quia","password":"saepe","email":"voluptatibus","role_id":20,"gender":"voluptatem","birthdate":"atque"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Actualiza la información del usuario.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/users/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"odit","last_name_father":"quam","last_name_mother":"expedita","phone_number":"delectus","password":"sit","email":"bins.davon@example.org","role_id":"est","gender":"placeat","birthdate":"ipsam","zone_id":5}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>show</h2>
<p>Muestra la información de un usuario</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/users/7" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>index</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Muestra todos los usuarios registrados en el sistema, se entregan de manera paginada y se pueden filtrar.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/users?search=vero&amp;per_page=18&amp;page=15" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

let params = {
    "search": "vero",
    "per_page": "18",
    "page": "15",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Crea un usuario, los parámetros cambian según el rol del usuario que se desea crear.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/users/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nobis","last_name_father":"non","last_name_mother":"sed","phone_number":"reiciendis","password":"est","email":"et","role_id":8,"gender":"et","birthdate":"eum","zone_id":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p>Elimina un usuario.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/users/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Zones</h1>
<p>Servicios para administrar zonas</p>
<h2>index</h2>
<p>Muestra todas las zonas registradas</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/zones" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Tu sesión ha expirado o no tienes permiso para realizar esta acción"
    ]
}</code></pre>
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
<h2>show</h2>
<p>Muestra una zona al recibir un identificador</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/zones/maiores?id=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/zones/maiores"
);

let params = {
    "id": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "El recurso al que quieres consultar no existe. Ten un buen día ;)"
    ]
}</code></pre>
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
<h2>create</h2>
<p>Crea una zona, esta es utilizada para que se asigne a los flebotomistas y direcciones.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/zones/create" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Zona Centro de Le\u00f3n","polygon":"[[\"21.1197983033326\", \"-101.687003727918\"][\"21.1268038570971\", \"-101.685458775526\"][\"21.1238563506651\", \"-101.677737236023\"][\"21.1178366889814\", \"-101.679708119398\"]]"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>update</h2>
<p>Actualiza la información de una zona.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/zones/illo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ducimus","polygon":"totam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>delete</h2>
<p>Elimina una zona.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/zones/13" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>