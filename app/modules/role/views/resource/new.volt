<h1>Nuevo recurso</h1>

<a class="btn btn-danger pull-right" href="{{ url("role/role/index") }}">
    <span class="glyphicon glyphicon-backward"></span>
</a>

<br><br>

{{ form("role/resource/new/" ~ idRole, "method" : "post") }}
    <div class="row">
        <div class="cols-md-6">
            <span >Nombre</span>
        </div>
        <div class="cols-md-6">
            {{ text_field("name", "class" : "form-control") }}
        </div>
    </div>
    <div class="row">
        <div class="cols-md-6">
            <span >Role</span>
        </div>
        <div class="cols-md-6">
            {{ select("id_role", role, "using" : ["id_role", "role"], "class" : "form-control") }}
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            {{ submit_button("Enviar", "class" : "btn btn-notice") }}
        </div>
    </div>
{{ end_form() }}
