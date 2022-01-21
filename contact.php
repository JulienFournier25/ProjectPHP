<?php require_once 'controllers/contactController.php' ?>
<?php require_once 'includes/header.php' ?>


<img src="assets/img/photo-produit-vin-vigne-0880.png" class="w-100 image-body pe-none" alt="...">

    <form class="container my-5 d-grid gap-3 contact bg-light bg-gradient bg-opacity-25 py-5 rounded" action="contact.php" method="post">
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
            <div class="form-floating <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant' || count($_POST) == 0 ? 'col-md-5' : 'col-md-10' ?>" id="typeOfVisitorContainer">
                <select class="form-select" name="typeOfVisitor" id="typeOfVisitor" aria-label="Default select example">
                    <option value="visiteur">Visiteur</option>
                    <option <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant' || count($_POST) == 0 ? 'selected' : '' ?> value="exposant">Exposant</option>
                </select>
                <label for="typeOfVisitor" class="form-label ms-2">Type de participation</label>
            </div>
            <div class="form-floating col-md-5 <?= isset($_POST['typeOfVisitor']) && $_POST['typeOfVisitor'] == 'exposant' || count($_POST) == 0 ? '' : 'd-none' ?>" id="exponentsNameContainer">
                <input type="text" class="form-control <?= isset($formErrors['exponentsName']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['exponentsName']) && !empty($_POST['exponentsName']) ? $exponentsName : '' ?>" name="exponentsName" id="exponentsName" placeholder=" " />
                <label for="exponentsName" class="form-label ms-2">Nom d'exposants</label>
                <p id="exponentsNameErrors" class="invalid-feedback text-center"> <?= isset($formErrors['exponentsName']) ? $formErrors['exponentsName'] : '' ?></p>
            </div>

        </fieldset>

        <fieldset class="row d-flex justify-content-center">
            <div class="form-floating col-md-10">
                <input type="email" class="form-control <?= isset($formErrors['email']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['email']) && !empty($_POST['email']) ? $email : '' ?>" name="email" id="email" placeholder=" " />
                <label for="email" class="form-label ms-2">Email</label>
                <p id="emailErrors" class="invalid-feedback text-center"> <?= isset($formErrors['email']) ? $formErrors['email'] : '' ?></p>

            </div>
        </fieldset>
        <fieldset class="row d-flex justify-content-center">
            <div class="form-floating col-md-10">
                <input type="text" class="form-control <?= isset($formErrors['subject']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['subject']) && !empty($_POST['subject']) ? $subject : '' ?>" name="subject" id="subject" placeholder=" " />
                <label for="subject" class="form-label ms-2">Sujet du message</label>
                <p id="subjectErrors" class="invalid-feedback text-center"> <?= isset($formErrors['subject']) ? $formErrors['subject'] : '' ?></p>

            </div>
        </fieldset>
        <fieldset class="row d-flex justify-content-center">
            <div class="form-floating col-md-10">
                <textarea class="form-control <?= isset($formErrors['message']) ? 'is-invalid' : '' ?>" value="<?= !isset($formErrors['message']) && !empty($_POST['message']) ? $message : '' ?>" placeholder=" " name="message" id="message"></textarea>
                <label for="message" class="form-label ms-2">Message</label>
                <?php if (isset($formErrors['message'])) { ?>
                    <p class="invalid-feedback text-center"> <?= $formErrors['message'] ?> </p>
                <?php } ?>
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
                <h2>Votre message a bien été envoyé.
                </h2>
            </div>
        </div>
    </div>
<?php } ?>
<?php require_once 'includes/footer.php' ?>