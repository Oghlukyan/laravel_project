<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add New Menu</a>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Add New Menu</h4>
        <div class="row">
            <form class="col s12" method="post" action="{{route('admin.menus.submit')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input name="title" id="title" type="text" class="validate" required="" aria-required="true">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="text" id="text" type="text" class="validate" required="" aria-required="true">
                        <label for="text">Text</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="meta_title" id="meta_title" type="text" class="validate" required="" aria-required="true">
                        <label for="meta_title">Meta_title</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="meta_description" id="meta_description" type="text" class="validate" required="" aria-required="true">
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
                        <input name="number" id="number" type="number" class="validate" required="" aria-required="true">
                        <label for="number">Number</label>
                    </div>
                </div>
                <button class="btn modal-action waves-effect waves-light" type="submit" name="action">Add</button>
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
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>