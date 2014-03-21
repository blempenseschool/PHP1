<div class="form-group has-error">
  <label for="titel">Titel *</label>
  <input type="text" class="form-control" id="titel" placeholder="Titel" name="title" required>
  <span class="text-danger">
      Titel is verplicht
  </span>
</div>
<div class="form-group">
  <label for="inleiding">Inleiding</label>
  <textarea name="lead" id="inleiding" class="form-control" rows=5 placeholder="Inleiding"></textarea>
  <span class="help-block">De inleiding wordt iets groter als de inhoud tekst weergegeven.</span>
</div>
<div class="form-group has-error">
  <label for="inhoud">Inhoud *</label>
  <textarea name="content" id="inhoud" class="form-control" rows=20 placeholder="Inhoud"></textarea>
  <span class="text-danger">
      Inhoud is verplicht
  </span>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="private"> Privaat?
  </label>
  <span class="text-muted">Enkel jij kan deze inhoud zien als je dit aanvinkt.</span>
</div>
