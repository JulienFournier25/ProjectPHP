<?php require_once 'controllers/registerController.php' ?>
<?php require_once 'includes/header.php' ?>

<img src="assets/img/photo-produit-vin-vigne-0880.png" class="w-100 image-body pe-none" alt="...">

<form class="container d-grid gap-3 registerForm bg-light bg-gradient bg-opacity-25 py-5 rounded" enctype="multipart/form-data" action="register.php" method="post">
    <fieldset class="row d-flex justify-content-center gap-md-2 gap-3">
        <div class="form-floating col-md-5">
            <input type="text" class="form-control <?= isset($formErrors['lastname']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['lastname']) && !empty($_POST['lastname']) ? $lastname : '' ?>" name="lastname" id="lastname" placeholder=" " />
            <label for="lastname" class="form-label ms-2">Nom de famille</label>
            <p id="lastnameErrors" class="invalid-feedback text-center"> <?= isset($formErrors['lastname']) ? $formErrors['lastname'] : '' ?></p>
        </div>
        <div class="form-floating col-md-5">
            <input type="text" class="form-control <?= isset($formErrors['firstname']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['firstname']) && !empty($_POST['firstname']) ? $firstname : '' ?>" name="firstname" id="firstname" placeholder=" " />
            <label for="firstname" class="form-label ms-2">Prénom</label>
            <p id="firstnameErrors" class="invalid-feedback text-center"> <?= isset($formErrors['firstname']) ? $formErrors['firstname'] : '' ?></p>
        </div>
    </fieldset>
    <fieldset class="row d-flex justify-content-center gap-md-2 gap-3">
        <div class="form-floating col-md-5">
            <input type="email" class="form-control <?= isset($formErrors['email']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['email']) && !empty($_POST['email']) ? $email : '' ?>" name="email" id="email" placeholder=" " />
            <label for="email" class="form-label ms-2">Email</label>
            <p id="emailErrors" class="invalid-feedback text-center"> <?= isset($formErrors['email']) ? $formErrors['email'] : '' ?></p>
        </div>
        <div class="form-floating col-md-5">
            <input type="text" class="form-control <?= isset($formErrors['phone']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['phone']) && !empty($_POST['phone']) ? $phone : '' ?>" name="phone" id="phone" placeholder=" " />
            <label for="phone" class="form-label ms-2">Numéro de téléphone</label>
            <p id="phoneErrors" class="invalid-feedback text-center"> <?= isset($formErrors['phone']) ? $formErrors['phone'] : '' ?></p>
        </div>
    </fieldset>
    <fieldset class="row d-flex justify-content-center gap-md-2 gap-3">
        <div class="form-floating col-md-5">
            <select class="form-select <?= isset($formErrors['typeOfVisitor']) ? 'is-invalid' : '' ?>" name="typeOfVisitor" id="typeOfVisitor">
                <option disabled <?= empty($_POST['typeOfVisitor']) || count($_POST) == 0 ? 'selected' : '' ?>>Choisissez</option>
                <option <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'visiteur' ? 'selected' : '' ?> value="visiteur">Visiteur</option>
                <option <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant' ? 'selected' : '' ?> value="exposant">Exposant</option>
            </select>
            <label for="typeOfVisitor" class="form-label ms-2">Type de participation</label>
            <p class="invalid-feedback text-center"> <?= isset($formErrors['typeOfVisitor']) ? $formErrors['typeOfVisitor'] : '' ?></p>

        </div>
        <div class="form-floating col-md-5">
            <select class="form-select <?= isset($formErrors['duration']) ? 'is-invalid' : '' ?>" name="duration" id="duration" aria-label="Default select example">
                <option disabled <?= empty($_POST['duration']) || count($_POST) == 0 ? 'selected' : '' ?>>Choisissez</option>
                <option <?= isset($_POST['duration']) && $_POST['duration'] == '1' ? 'selected' : '' ?> value="1">1 jour</option>
                <option <?= isset($_POST['duration']) && $_POST['duration'] == '2' ? 'selected' : '' ?> value="2">2 jours</option>
            </select>
            <label for="duration" class="form-label ms-2">Durée dans le salon</label>
            <p class="invalid-feedback text-center"> <?= isset($formErrors['duration']) ? $formErrors['duration'] : '' ?></p>

        </div>
    </fieldset>

    <fieldset class="row d-flex justify-content-center gap-md-2 gap-3 <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant' ? '' : 'd-none' ?>" id="exponentsContainer">
        <div class="form-floating col-md-5">
            <select class="form-select <?= isset($formErrors['exponentType']) ? 'is-invalid' : '' ?>" name="exponentType" id="exponentType" aria-label="Default select example">
                <option disabled <?= empty($_POST['exponentType']) || count($_POST) == 0 ? 'selected' : '' ?>>Choisissez</option>
                <option value="Vente de vin" <?= isset($_POST['exponentType']) && $_POST['exponentType'] == 'Vente de vin' ? 'selected' : '' ?>>Vente de vin</option>
                <option value="Vente de verre" <?= isset($_POST['exponentType']) && $_POST['exponentType'] == 'Vente de verre' ? 'selected' : '' ?>>Vente de verre</option>
            </select>
            <label for="exponentType" class="form-label ms-2">Type d'exposition</label>
            <p class="invalid-feedback text-center"> <?= isset($formErrors['exponentType']) ? $formErrors['exponentType'] : '' ?></p>

        </div>
        <div class="form-floating col-md-5">
            <input type="text" class="form-control <?= isset($formErrors['exponentsName']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['exponentsName']) && !empty($_POST['exponentsName']) ? $exponentsName : '' ?>" name="exponentsName" id="exponentsName" placeholder=" " />
            <label for="exponentsName" class="form-label ms-2">Nom d'exposants</label>
            <p id="exponentsNameErrors" class="invalid-feedback text-center"> <?= isset($formErrors['exponentsName']) ? $formErrors['exponentsName'] : '' ?></p>
        </div>
    </fieldset>

    <fieldset class="row d-flex justify-content-center gap-md-2 gap-3 <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant'  ? '' : 'd-none' ?>" id="exponentsImageContainer">
        <div class="col-md-10 form-floating">
            <input class="form-control <?= isset($formErrors['exponentsImage']) ? 'is-invalid' : '' ?>" type="file" name="exponentsImage" id="exponentsImage" accept="image/*">
            <label class="ms-1 pt-1 mt-1" for="exponentsImage">Image de présentation</label>
            <p class="invalid-feedback text-center"> <?= isset($formErrors['exponentsImage']) ? $formErrors['exponentsImage'] : '' ?></p>
        </div>
    </fieldset>
    <fieldset class="row d-flex justify-content-center">
        <input type="submit" value="Envoyez" class="btn btn-outline-success bg-dark bg-opacity-75 col-auto" />
    </fieldset>
</form>
<?php if (count($_POST) != 0 && count($formErrors) == 0) {  ?>
    <div class="container fixed-bottom">
        <div class="row p-5">
            <div class="alert alert-success text-center p-3 mx-auto" role="alert">
                <h2>Votre inscription a bien été accepté.
                </h2>
            </div>
        </div>
    </div>
<?php } ?>
<?php require_once 'includes/footer.php' ?>