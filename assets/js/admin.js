//controlling database

function deleteEntity(event,id)
{
    event.preventDefault();
    $('#deleteId').val(id);
    $('#deleteUserForm').submit();
}
function createPage(event)
{
    event.preventDefault();
    var markupStr = $('#summernote').summernote('code');
    $('#pageContent').val(markupStr);
    $('#pageCreateForm').submit();
}

function createContent(event)
{
    event.preventDefault();
    var markupStr = $('#summernote').summernote('code');
    alert(markupStr);
    $('#pageContent').val(markupStr);
    $('#contentCreateForm').submit();
}
//sidebar togle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

//initializing the plugins
$(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'filler text',
        tabsize: 2,
        height: 100
      });
} );
