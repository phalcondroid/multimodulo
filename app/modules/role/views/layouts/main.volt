<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="pull-left" href="{{ url("role/index/destroy") }}">
                Cerrar sesión
            </a>
            <div class="dropdown pull-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Menú
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    {% for item in menu %}
                        <li>
                            <a href="#">
                                {{ item.action }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</nav>
{{ content() }}
