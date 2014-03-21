<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pagina verwijderen</h4>
      </div>
      <div class="modal-body">
        Ben je zeker dat je deze pagina wilt verwijderen? Dit kan niet ongedaan gemaakt worden.
      </div>
      <div class="modal-footer">
          <input type="hidden" name="pagina_id" value="">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuleer</button>
          <a type="button" class="btn btn-danger" href="pagina-verwijderen.php?id=<?php print $resultaat['id']; ?>">Verwijderen</a>
      </div>
    </div>
  </div>
</div>