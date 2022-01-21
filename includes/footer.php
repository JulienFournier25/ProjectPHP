<footer class="container-fluid ">
    <div class="row bg-danger bg-gradient bg-opacity-75">
        <ul class="d-flex text-center pt-3 align-items-center navFooter">
            <li class="col">
                <h3><a class="text-decoration-none" href="index.php"><span class="d-md-block d-none">Accueil</span><i class="fas fa-home d-md-none"></i></a></h3>
            </li>
            <li class="col">
                <h3><a class="text-decoration-none " href="programme.php"><span class="d-md-block d-none">Programme</span><i class="fas fa-wine-bottle d-md-none"></i></a></h3>
            </li>
            <li class="col">
                <h3><a class="text-decoration-none" href="exponents.php"><span class="d-md-block d-none">Liste d'exposants</span><i class="far fa-list-alt d-md-none"></i></a></h3>
            </li>
            <li class="col">
                <h3><a class="text-decoration-none" href="contact.php"><span class="d-md-block d-none">Contact</span><i class="fas fa-inbox d-md-none"></i></a></h3>
            </li>
            <li class="col">
                <h3><a class="text-decoration-none" href="register.php"><span class="d-md-block d-none">Inscription</span><i class="fas fa-sign-in-alt d-md-none"></i></a></h3>
            </li>
        </ul>
    </div>
    <div class="row bg-success bg-gradient text-center pt-2 d-flex align-items-center">
        <h2>@&nbsp;COPYRIGHT</h2>
    </div>
</footer>

<script src="https://kit.fontawesome.com/17e4bc2abc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
<script src="assets/js/cleave.min.js"></script>
<?php if ($_SERVER['PHP_SELF'] == '/Projet Php/register.php') { ?>
    <script src="assets/js/register.js"></script>
<?php }else{ ?>
    <script src="assets/js/script.js"></script>
    <?php } ?>
</body>

</html>