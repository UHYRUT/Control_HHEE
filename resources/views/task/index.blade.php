<!doctype html>
<html lang="en">
    <head>
        <title>titulo de la app</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <br>
        <main class="container">

            <div class="card">
                <div class="card-header">Horas Extras</div>

                <div class="card-body">

                    <form action="{{url('/')}}" method="post">
                        @csrf
                        
                        FECHA
                        <div class="col-2"><input  type="date" name="date" id="date" class="form-control"><br></div>
                        HORAS
                        <div class="col-1"><input  type="number" name="hora" id="hora" class="form-control"><br></div>
                        COLABORADOR
                        <div class="col-2"><ul class="list-group">
                            <select class="form-select form-select-sm" name="nombre" id="nombre">
                                <option selected>Selecciona Persona</option>
                                <option value="SERGIO GODOY">SERGIO GODOY</option>
                                <option value="ALEJANDRO SAAVEDRA">ALEJANDRO SAAVEDRA</option>
                                <option value="JUAN RODRIGUEZ">JUAN RODRIGUEZ</option>
                                <option value="VICTOR BRAVO">VICTOR BRAVO</option>
                                <option value="LEOFANOR MENA">LEOFANOR MENA</option>
                              </select>
                              <br>
                        </div>   
                            
                           <!-- <input  type="text" name="nombre" id="nombre" class="form-control">-->
                        Motivo HHEE
                        <input  type="text" name="task" id="task" class="form-control"><br>
                        <input type="submit" value="AGREGAR HHEE" class="btn btn-primary mb-3">
                
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">FECHA</th>
                                    <th scope="col">HORAS</th>
                                    <th scope="col">COLABORADOR</th>
                                    <th scope="col">MOTIVO</th>
                                    <th scope="col">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <?php $sumahhee=0;?>

                                    @foreach ($tasks as $task)

                                       <?php $hhee=$task->hora;?>

                                    <td scope="row"> {{$task->date}}</td>
                                    <td scope="row"> {{$task->hora}}</td>
                                    <td scope="row"> {{$task->nombre}}</td>
                                    <td scope="row"> {{$task->task}}</td>

                                    <td><form action="{{route('task.destroy', $task->id)}}"   method="post">
                                        @csrf
                                        @method('DELETE'){{-- este es el metodo despues q se ve reflejado en la vista en web (route::delete) --}}
                                        <input type="submit" value="X" class="btn btn-danger">
                                        </form> </td>

                                </tr>
                            </tbody>

                            <?php $sumahhee=$sumahhee+$hhee;?>
                            
                            @endforeach
                            <?php echo $sumahhee;?>
                            
                        </table>
                    </div>
                    

                </div>

                <div class="card-footer text-muted"></div>
            </div>
            



        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>





