<h1>
    Nuevo rol
</h1>

<a class="btn btn-danger pull-right" href="{{ url("role/role/index") }}">
    <span class="glyphicon glyphicon-backward"></span>
</a>

{{ form("role/role/new", "method": "post") }}
    <table class="table">
        <thead>
            <tr>
                <th>
                    Role name
                </th>
                <th>
                    Link
                </th>
                <th>
                    Descripción
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" class="form-control" name="role" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="link" value="">
                </td>
                <td>
                    <textarea class="form-control" name="description"></textarea>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <input type="submit" class="btn btn-success" name="" value="Registrar">
                </td>
            </tr>
        </tfoot>
    </table>
{{ end_form() }}
