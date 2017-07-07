<h1>
    Nuevo action
</h1>

<a class="btn btn-danger pull-right" href="{{ url("role/role/index") }}">
    <span class="glyphicon glyphicon-backward"></span>
</a>

{{ form("role/actions/new/" ~ id, "method": "post") }}
    <table class="table">
        <thead>
            <tr>
                <th>
                    Name action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="name" value="">
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <input type="submit" name="" class="btn btn-success" value="Registrar">
                </td>
            </tr>
        </tfoot>
    </table>
{{ end_form() }}
