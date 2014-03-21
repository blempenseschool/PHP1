<div class="form-group <?php if (!empty($foutmeldingen['naam'])) print "has-error"; ?>">
  <label for="naam">Naam *</label>
  <input type="text" name="naam" id="naam" class="form-control" value="<?php if (!empty($_POST['naam'])) print $_POST['naam']; ?>" required autofocus>
  <?php if (!empty($foutmeldingen['naam'])): ?>
    <span class="text-danger">
      <?php print $foutmeldingen['naam']; ?>
    </span>
  <?php endif ?>
</div>
<div class="form-group <?php if (!empty($foutmeldingen['email'])) print "has-error"; ?>">
  <label for="email">Email adres *</label>
  <input type="email" name="email" id="email" class="form-control" value="<?php if (!empty($_POST['email'])) print $_POST['email']; ?>" required>
  <?php if (!empty($foutmeldingen['email'])): ?>
    <span class="text-danger">
      <?php print $foutmeldingen['email']; ?>
    </span>
  <?php endif ?>
</div>
<div class="form-group <?php if (!empty($foutmeldingen['password'])) print "has-error"; ?>">
  <label for="paswoord">Paswoord *</label>
  <input type="password" name="password" id="paswoord" class="form-control" required>
  <?php if (!empty($foutmeldingen['password'])): ?>
    <span class="text-danger">
      <?php print $foutmeldingen['password']; ?>
    </span>
  <?php endif ?>
</div>
<div class="form-group <?php if (!empty($foutmeldingen['password_confirm'])) print "has-error"; ?>">
   <label for="password_confirm">Paswoord confirmatie</label>
   <input type="password" name="password_confirm" id="password_confirm" class="form-control" required>
   <?php if (!empty($foutmeldingen['password_confirm'])): ?>
    <span class="text-danger">
      <?php print $foutmeldingen['password_confirm']; ?>
    </span>
  <?php endif ?>
</div>
<div class="checkbox">
   <label for="voorwaarden">
      <input type="checkbox" name="voorwaarden" id="voorwaarden" required> Ik accepteer de voorwaarden *
   </label>
   <?php if (!empty($foutmeldingen['voorwaarden'])): ?>
    <span class="text-danger">
      <?php print $foutmeldingen['voorwaarden']; ?>
    </span>
  <?php endif ?>
</div> 

<!-- HONEYPOT anti-spam captcha -->
<div class="checkbox honeypot">
 <label for="honeypot">
   <input type="checkbox" name="honeypot" id="honeypot"> 
   Gelieve <em>niet</em> aan te vinken.
 </label>
</div>