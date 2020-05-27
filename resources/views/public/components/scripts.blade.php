
<script src="{{asset('dist/jquery-3.5.1.min.js')}}"></script> 
<script src="{{asset('dist/jstree.min.js')}}"></script>
<script>

jQuery(function($) {
    $("#jstree").jstree();
    $('#jstree').on("changed.jstree", function (e, data) {
        var node_id   = (data.node.id); // element id
        var id = $("#"+(data.node.id)).attr("data-id");
        console.log(id);
      });
});
</script>