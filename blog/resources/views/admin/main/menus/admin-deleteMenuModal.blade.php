<div id="deleteMenuModal" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Warning!!!</h4>
        <p>Are you sure you want to delete?</p>
    </div>
    <div class="modal-footer">
        <form method="post" action="{{ route('admin.menus.modification.delete') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" id="id" value="!@!">
            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat red">Yes</button>
            <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat green">No</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#deleteMenuModal').modal({
            ready: function(modal, trigger) {
                var id = trigger[0].attributes[0].value;
                modal.find('.modal-footer #id').val(id);
            }
        });
    });
</script>
