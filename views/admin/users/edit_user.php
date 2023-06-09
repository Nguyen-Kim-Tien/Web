<script type="text/javascript">
  document.title = 'Sửa đổi người dùng';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Chỉnh sửa thông tin người dùng</h1>
        <div> 
          <a href="/admin/users">Trở về</a>
        </div><br>
        <div class="changepassword"> 
          <a href="/admin/users/edit/password?id=<?=$userModel->getId()?>">Cấp lại mật khẩu</a>
        </div><br>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'firstname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'lastname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'phone_number') ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $form->fieldtype($userModel, 'email', 'email') ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $form->field($userModel, 'address') ?>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i>Lưu</button>
                </div>
            </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>