<!DOCTYPE html>
<html lang="en">
    
    <?php 
    require_once('./includes/head.php');
    $active = 'calculadora';
    ?>

    <body>
        <script src="./assets/js/initTheme.js"></script>
        <div id="app">

            <?php require_once('./includes/sidebar.php') ?>

            <div id="main" class="layout-navbar navbar-fixed">
                <?php require_once('./includes/topbar.php') ?>
                <div id="main-content">

                    <select name="categorie" id="select_categorie" class="form-select"> 
                        <option value="0">Seleccione una categoria</option>
                    </select>

                    <!-- <table class="table nowrap" style="max-width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody id="unitrack">

                        </tbody>
                    </table> -->

                </div> <!-- end main content -->

                <?php require_once('./includes/footer.php') ?>
            </div> <!-- end main -->
        </div> <!-- end app -->

        <?php require_once('./includes/footerScriptsJs.php') ?>
        <script
            src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/choices.js/2.8.3/choices.js"></script>

    </body>
    <script>
        $(document).ready(async function(){
            await $.ajax({
                // url: "https://spreadfillment-back.azurewebsites.net/api/cotizadorRegiones/obtenerComunas",
                // url: "https://beta2.api.climatiq.io/emission-factors/sectors?source=BEIS",
                url: "https://beta2.api.climatiq.io/emission-factors?region=CL",
                // url: "https://beta2.api.climatiq.io/emission-factors/categories",
                // url: "https://beta2.api.climatiq.io/emission-factors/regions",
                // vehicle
                type: "GET",
                dataType: 'json',
                headers: {
                    'Accept': '*/*',
                    'Authorization': 'Bearer EC59R80XG7M3NSNXPHV5Q33APCTH',
                    'Content-Type': 'application/json'
                },
                success:function(resp){
                console.log(resp.results);
                let results = resp.results;

                results.forEach(result => {

                    // console.log(result);

                    var tr_str = `<option value='${result.id}'>${result.name}</option>`
                    // var tr_str ="<tr>" +
                    //     "<td align='start' id='trackid'>" + result + "</td>" +
                    //     "<td align='start'>" + result.CityName + "</td>" +
                    //     "</tr>";

                    $("#select_categorie").append(tr_str);

                });

                },error:function(resp){

                }

            })

        })
    </script>
</html>
