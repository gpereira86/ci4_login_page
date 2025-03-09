<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>

<main class="container">
    <div class="row">
        <section class="col-xxl-6">
            <article>
                <img class="img-fluid" src="./assets/images/logo.png" alt="Clube Full Stack" style="max-height: 100vh">
            </article>
        </section>

        <section class="col-xxl">

                <div class="row vh-100">

                    <div class="col d-flex align-items-center justify-content-center pt-5 mt-5">
                        <div class="pt-5 mt-5">


                            <form method="post" action="<?php echo url_to('login.store')?>" class="pt-5 mt-5">
                                <div class="mb-4 text-center">
                                    <h1 >Faça seu login</h1>

                                    <?php if(session()->has('error')): ?>
                                        <span class="text-danger">
                                            <?php echo session()->getFlashdata('error') ?>
                                        </span>
                                    <?php endif ?>

                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-lg-3 col-form-label">Usuário</label>
                                    <div class="col-lg">
                                        <input type="text" name="email" placeholder="Ex.:usuarioteste" class="form-control" value="leonie.jacobs@simonis.com">
                                        <span class="text-danger"><?php echo session()->getFlashdata('errors')['email'] ?? ''; ?></span>
                                    </div>
                                </div>

                                <div id="passwordContainer" class="row mb-3">
                                    <label for="password" class="col-lg-3 col-form-label">Senha:</label>
                                    <div class="col-lg">
                                        <input type="password" id="password" name="password" placeholder="Ex.:senhateste" class="form-control">
                                        <i class="bi bi-eye-slash"></i>
                                        <span class="text-danger"><?php echo session()->getFlashdata('errors')['password'] ?? ''; ?></span>
                                    </div>
                                </div>

                                <div class="row text-end">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-light col-7 offset-3">Entrar</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>


        </section>
    </div>

</main>

<?php echo $this->endSection() ?>
