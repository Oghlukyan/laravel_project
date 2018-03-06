<div id="changeMenuModal" class="modal">
    <div class="modal-content">
        <h4>Change Menu</h4>
        <div class="row">
            <form class="col s12" method="post" action="{{ route('admin.menus.modification.edit') }}">
                {{ csrf_field() }}
                <input type="hidden" name="update">
                <input type="hidden" name="id" id="id" value="!@!">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="title" id="title" type="text" class="validate" value="!@!" aria-required="true">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="text" id="text" type="text" class="validate" value="!@!" aria-required="true">
                        <label for="text">Text</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="meta_title" id="meta_title" type="text" class="validate" value="!@!" aria-required="true">
                        <label for="meta_title">Meta_title</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="meta_description" id="meta_description" type="text" class="validate" value="!@!" aria-required="true">
                        <label for="meta_description">Meta_description</label>
                    </div>
                    <div class="switch">
                        <label>
                            Status
                            <input name="status" id="status" type="checkbox">
                            <span class="lever"></span>
                        </label>
                    </div>
                    <div class="input-field col s12">
                        <input name="number" id="number" type="number" class="validate" value="00" aria-required="true">
                        <label for="number">Number</label>
                    </div>
                </div>
                <button class="btn modal-action waves-effect waves-light green" type="submit" name="action">Save</button>
            </form>
        </div>
        <script>
            $(document).ready(function() {
                $('select').material_select();
            });
        </script>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#changeMenuModal').modal({
            ready: function(modal, trigger) {
                var menu = $.parseJSON(trigger[0].attributes[0].value);
                modal.find('.modal-content #id').val(menu['id']);
                modal.find('.modal-content #title').val(menu['title']);
                modal.find('.modal-content #text').val(menu['text']);
                modal.find('.modal-content #meta_title').val(menu['meta_title']);
                modal.find('.modal-content #meta_description').val(menu['meta_description']);
                modal.find('.modal-content #status').prop('checked', menu['status']);
                modal.find('.modal-content #number').val(menu['number']);
            }
        });
    });
</script>
