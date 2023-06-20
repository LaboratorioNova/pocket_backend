# About


## contact

Entrega un número al cual se puede marcar y un whatsapp para mandar mensajes.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/contact" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": {
        "phone": "6188117230",
        "whatsapp": "+526181588403",
        "whatsappText": "Hola mucho gusto! Quisiera consultar sus servicios!",
        "email": "atencion.labnova@gmail.com",
        "facebook": "https:\/\/www.facebook.com\/labnovamx"
    }
}
```
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
</form>



