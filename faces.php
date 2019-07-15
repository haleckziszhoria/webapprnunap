<div class="row">
    <div class="col-12">
        <?php if($faces):?>
            <?php foreach ($faces as $key =>$face):?>
            <li>
                <strong>Rostro <?php echo $key + 1 ?></strong>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <strong>Alegría</strong>
                    </div>
                    <div class="col-6">
                        <strong><?php echo $face->info()['joyLikelihood'] ?> </strong>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>Tristeza</strong>
                    </div>
                    <div class="col-6">
                        <strong><?php echo $face->info()['sorrowLikelihood'] ?> </strong>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>Enojado</strong>
                    </div>
                    <div class="col-6">
                        <strong><?php echo $face->info()['angerLikelihood'] ?> </strong>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>Confundido</strong>
                    </div>
                    <div class="col-6">
                        <strong><?php echo $face->info()['blurredLikelihood'] ?> </strong>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>Con sombrero</strong>
                    </div>
                    <div class="col-6">
                        <strong><?php echo $face->info()['headwearLikelihood'] ?> </strong>
                    </div>

                </div>
            </li>
            <?php endforeach?>

        <?php endif ?>
        
    </div>

</div>