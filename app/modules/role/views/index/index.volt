<div class="page-header">
    <h1>Welcome! Super Admin </h1>
</div>

<h1>Login</h1>

{{ form("role/index/index", "method" : "post") }}
    <div class="row">
        <div class="cols-md-6">
            <span >Username</span>
        </div>
        <div class="cols-md-6">
            {{ text_field("username", "class" : "form-control") }}
        </div>
    </div>
    <div class="row">
        <div class="cols-md-6">
            <span >password</span>
        </div>
        <div class="cols-md-6">
            {{ password_field("password", "class" : "form-control") }}
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            {{ submit_button("Enviar", "class" : "btn btn-notice") }}
        </div>
    </div>
    <input type="hidden" name="{{ security.getTokenKey() }}" value="{{ security.getToken() }}"/>
{{ end_form() }}
