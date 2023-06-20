# Auth

Servicios para la autenticación de los usuarios. Estos servicios no requieren TOKEN.

## sign-in-admin

<small class="badge badge-darkred">requires authentication</small>

Inicio de sesión para usuarios de tipo administrador
- bodyParam __email__ string required Correo del usuario. Example: admin@vulkka.com
- bodyParam __password__ string required Contraseña del usuario. Example: una_facil

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/sign-in" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"admin@vulkka.com","password":"una_facil"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## sign-in-admin

<small class="badge badge-darkred">requires authentication</small>

Inicio de sesión para usuarios de tipo administrador
- bodyParam __email__ string required Correo del usuario. Example: admin@vulkka.com
- bodyParam __password__ string required Contraseña del usuario. Example: una_facil

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/sign-in-admin" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"admin@vulkka.com","password":"una_facil"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## sign-in-customer

<small class="badge badge-darkred">requires authentication</small>

Inicio de sesión para usuarios de tipo cliente
- bodyParam __email__ string required Correo del usuario. Example: customer@vulkka.com
- bodyParam __password__ string required Contraseña del usuario. Example: una_facil

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/sign-in-customer" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"customer@vulkka.com","password":"una_facil"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## sign-in-phlebotomist

<small class="badge badge-darkred">requires authentication</small>

Inicio de sesión para usuarios de tipo proveedor
- bodyParam __email__ string required Correo del usuario. Example: supplier@vulkka.com
- bodyParam __password__ string required Contraseña del usuario. Example: una_facil

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/sign-in-phlebotomist" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"supplier@vulkka.com","password":"una_facil"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## email-code

<small class="badge badge-darkred">requires authentication</small>

Se envía un código para recuperar la contraseña al correo adjunto.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/email-code" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"juda_alector@hotmail.com"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## email-code

<small class="badge badge-darkred">requires authentication</small>

Se envía un NIP para recuperar la contraseña al correo adjunto.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/email-code-mobile" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"juda_alector@hotmail.com"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## password-reset
Se cambia la contraseña del usuario por una nueva

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/auth/password-reset" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"token":"repellendus","email":"juda_alector@hotmail.com","password":"una_facil2","password_confirmation":"una_facil2"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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

</form>



