<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/header.php' ?>
</head>
<body class="bg-light">

<?php include_once 'includes/navbar.php' ?>

<main class="container">
    <form action="index.php?page=ticket_form" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="exampleInputTitre" class="form-label">Title</label>
                <input name="tickets_title" type="text" class="form-control" id="exampleInputTitre" aria-describedby="Titre">
            </div>

            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Description</label>
                <textarea name="tickets_desc" class="form-control" id="exampleInputDescription" aria-describedby="text"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputStatus" class="form-label">Status</label>
                <input name="tickets_status" type="text" class="form-control" id="exampleInputStatus" aria-describedby="Status">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tag</label>
<!--                <input type="text" class="form-control" id="exampleInputStatus" aria-describedby="Status">-->
                <select name="tags_name[]" class="form-select" id="multiple-select-field-tag" data-placeholder="Choose anything" multiple>
                    <option>Christmas Island</option>
                    <option>South Sudan</option>
                    <option>Jamaica</option>
                    <option>Kenya</option>
                    <option>French Guiana</option>
                    <option>Mayotta</option>
                    <option>Liechtenstein</option>
                    <option>Denmark</option>
                    <option>Eritrea</option>
                    <option>Gibraltar</option>
                    <option>Saint Helena, Ascension and Tristan da Cunha</option>
                    <option>Haiti</option>
                    <option>Namibia</option>
                    <option>South Georgia and the South Sandwich Islands</option>
                    <option>Vietnam</option>
                    <option>Yemen</option>
                    <option>Philippines</option>
                    <option>Benin</option>
                    <option>Czech Republic</option>
                    <option>Russia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Assigned To</label>
<!--                <input type="text" class="form-control" id="exampleInputAssignedTo" aria-describedby="AssignedTo">-->
                <select name="assign_to[]" class="form-select" id="multiple-select-field-assign" data-placeholder="Choose anything" multiple>
                    <option value="1">Christmas Island</option>
                    <option value="2">South Sudan</option>
                    <option>Jamaica</option>
                    <option>Kenya</option>
                    <option>French Guiana</option>
                    <option>Mayotta</option>
                    <option>Liechtenstein</option>
                    <option>Denmark</option>
                    <option>Eritrea</option>
                    <option>Gibraltar</option>
                    <option>Saint Helena, Ascension and Tristan da Cunha</option>
                    <option>Haiti</option>
                    <option>Namibia</option>
                    <option>South Georgia and the South Sandwich Islands</option>
                    <option>Vietnam</option>
                    <option>Yemen</option>
                    <option>Philippines</option>
                    <option>Benin</option>
                    <option>Czech Republic</option>
                    <option>Russia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputPriority" class="form-label">Priority</label>
                <input name="tickets_priority" type="text" class="form-control" id="exampleInputPriority" aria-describedby="Priority">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</main>

<?php include_once 'includes/footer.php' ?>

</body>
</html>


