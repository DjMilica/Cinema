<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-film"></span> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Manage Movies
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-plus"></span> <a href="{{route('addmovie')}}">Add a movie</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil"></span> <a href="#">Edit a movie</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-trash"></span> <a href="{{route('deletemovie')}}">Delete a movie</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-calendar"></span>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Manage Repertoires</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-plus"></span> <a href="{{route('addprojection')}}">Add a movie projection</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil"></span> <a href="#">Edit a movie projection</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-trash"></span> <a href="{{route('deleteprojection')}}">Delete a movie projection</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span class="glyphicon glyphicon-print"></span>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Reports</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-user"></span><a href="#">Customers</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-tasks"></span><a href="#">Repertoire</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-film"></span> <a href="#">Movies</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span class="glyphicon glyphicon-th"></span>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Manage Rooms</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-plus"></span>
                                <a href="#">Add a room</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-trash text-danger"></span>
                                <a href="#">Delete room</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-user"></span>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Account</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-wrench"></span>
                            <a href="#">Change Password</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil"></span>
                            <a href="#">Edit your info</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-trash text-danger"></span>
                            <a href="#">Delete Account</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>