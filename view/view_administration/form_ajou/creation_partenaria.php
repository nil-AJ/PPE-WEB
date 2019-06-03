
<div class="container">
    <div class="align-content-center justify-content-center">
        <div class="form-area">
            <form  style="padding-top: 80px; padding-bottom: 80px" method="POST" action="">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Ajouter un partenaria</h3>
                <div class="form-group">
                    <input type="text" class="form-control"  name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <span>Date début</span>
                    <input type="date" class="form-control"  name="dateStart" placeholder="" required>
                </div>
                <div class="form-group">
                    <span>Date fin</span>
                    <input type="date" class="form-control"  name="dateEnd" placeholder="" required>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control"  name="adder" value="<?= $_SESSION['user_info']['prename']?>" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea"  name="description" placeholder="Message" maxlength="160" rows="7"></textarea>
                </div>
                <button type="submit"  name="" class="btn btn-primary pull-right">Ajouter le partenaria</button>
            </form>
        </div>
    </div>
</div>
