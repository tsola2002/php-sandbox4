<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL AJAX CRUD</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h1 class="">AJAX CRUD DATA TABLE</h1>

        <!-- FORM CREATION -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <form id="studentForm" action="" class="row g-3">
                    <input type="hidden" id="id">

                    <div class="col-md-5">
                        <label for="" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" required>
                    </div>

                    <div class="col-md-5">
                        <label for="" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" required>
                    </div>

                    <div class="col-md-2 d-grid">
                        <label for="" class="form-label invisible">Submit</label>
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- TABLE CARD -->
        <div class="card shadow-sm">
            <div class="card-body" id="table-data">
                <!-- AJAX TABLE WILL LOAD HERE -->
            </div>
        </div>
    </div>  

    <script>
        // LOADING STUDENTS FROM FETCH.PHP
        function loadStudents() {
            // CREATE XMLHTTPREQUEST OBJECT
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch.php", true);

            xhr.onload = function() {
                if(xhr.status === 200){
                    document.getElementById("table-data").innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        }

        loadStudents();
    </script>
</body>
</html>