<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>

    <div class="container">
        <div class="my-4">
        <h2>Register</h2>
            <?php if (session()->has('error')): ?>
                <span class="text text-danger fw-bolder"><?php echo session()->getFlashdata('error') ?? '' ?></span>
            <?php endif ?>

            <?php if (session()->has('success')): ?>
                <span class="text text-success fw-bolder"><?php echo session()->getFlashdata('success') ?? '' ?></span>
            <?php endif ?>
        </div>

        <form action="<?php echo url_to('register.store') ?>" method="post">
            <!--2 column grid layout wth text inputs for the first and last names-->

            <div class="row mb-2">
                <div class="col">
                    <label for="form3Example1">First Name</label>
                    <input type="text" id="form3Example1" name="firstName" class="form-control" placeholder="First name" aria-label="First name" value="Glauco">
                    <span class="text-danger"><?php echo session()->getFlashdata('errors')['firstName'] ?? '' ?></span>
                </div>
                <div class="col">
                    <label for="form3Example2">Last Name</label>
                    <input type="text" id="form3Example2" name="lastName" class="form-control" placeholder="Last name" aria-label="Last name" value="Pereira">
                    <span class="text-danger"><?php echo session()->getFlashdata('errors')['lastName'] ?? '' ?></span>
                </div>
            </div>

            <!--Email input-->
            <div class="row mb-2">
                <div class="col">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <input type="email" id="inputEmail3" name="email" class="form-control" placeholder="Email" aria-label="Email" value="pereira@gmail.com">
                    <span class="text-danger"><?php echo session()->getFlashdata('errors')['email'] ?? '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword3" value="123">
                    <span class="text-danger"><?php echo session()->getFlashdata('errors')['password'] ?? '' ?></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Sign up</button>
        </form>


    </div>

<?php echo $this->endSection() ?>
