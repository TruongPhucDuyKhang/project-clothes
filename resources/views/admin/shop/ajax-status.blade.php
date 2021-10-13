@if($status == 1)
<a href="{{ $status }}" data-id="{{ $id }}" class="btn btn-success changeStatus">Còn hàng</a>
@else
<a href="{{ $status }}" data-id="{{ $id }}" class="btn btn-hethang changeStatus">Hết hàng</a>
@endif
<script type="text/javascript">
$(document).ready(function(){
    //Change - Status
    $(".changeStatus").on("click", function(e){
    e.preventDefault();
    var id  = $(this).attr("data-id");
    var status = $(this).attr("href");
    // alert(id);
    fetch_data_new(id, status);
    });
    function fetch_data_new(id, status){
      var url = "{{ route('admin.shop.ajax-status') }}";
      $.ajax({
        url: url,
        data:{
          id: id,
          status: status,
        },
          success: function(data){
            $("#resultStatus-"+id).html(data);
            // alert(data);
        },
      });
    }
  });
</script>