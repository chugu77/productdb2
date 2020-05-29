<script>

$("#jstree").jstree();

function LinkFormatter(value, row, index) {
    return "<a target='_blank' href='/images/"+value+"'> <img width='25' src='/images/"+value+"'></a>";
  }

$('#jstree').on("changed.jstree", function (e, data) {
    var node_id   = (data.node.id); // element id
    var id = $("#"+(data.node.id)).attr("data-id");
    //console.log(id);
    $('#table').bootstrapTable('showLoading');
    axios.post('/children', {
        id: id
      }).then((response) => { 
        console.log(response.data);
        
        $('#table').bootstrapTable('destroy').bootstrapTable({
            data: response.data,
            formatLoadingMessage: function() {
                return "<font color='red'>დაელოდეთ...</font>";
            }
        });
        $('#table').bootstrapTable('hideLoading');
      }, (error) => {
        console.log(error);
      });
    
    $('#table').bootstrapTable('refresh'); 

});
{{--  
var $table = $('#table');
    var mydata = 
[
    {
        "id": 0,
        "category_id": "1",
        "product_name": "2",
        "description": "3",
        "image": "4",
    },{
        "id": 1,
        "category_id": "1",
        "product_name": "2",
        "description": "3",
        "image": "4",
    }
];  --}}


</script>