
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body>
        <div class="container" style="margin-top:10%">
            <table id="employee-list" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#sr.no</th>
                    <th>Employee Name</th>
                    <th>Designation</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employeeData as $employeeDatas)
                    <tr>
                        <td>{{$employeeDatas['id']}}</td>
                        <td>{{$employeeDatas['name']}}</td>
                        <td>{{$employeeDatas['designation']['name']}}</td>
                        <td>{{$employeeDatas['salary']['salary']}}</td>
                    </tr> 
                @endforeach
                
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#employee-list').DataTable({
                "lengthMenu": [[2, 5, 10, -1], [2, 5, 10, "All"]]
            });
        } );
    </script>
    </body>
</html>
