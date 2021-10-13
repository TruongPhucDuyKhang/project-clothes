<img width="150px" style="border-radius: 10px;" height="150px" src="{{ $urlPic }}" alt="" title="imgsp"><br />
{{ $name }}<br />
@if($selling == 1)
<a href="{{ $selling }}" data-id="{{ $id }}" class="btn btn-warning changeSelling">Bán chạy</a>
@else
<a href="{{ $selling }}" data-id="{{ $id }}" class="btn btn-primary changeSelling">Bình thường</a>
@endif	
<script>
$(document).ready(function(){
  $(".changeSelling").on("click", function(e){
    e.preventDefault();
    var id = $(this).attr("data-id");
    var selling = $(this).attr("href");
    // alert(selling);
    fetch_data(id, selling);
    });
    function fetch_data(id, selling){
      var url = "{{ route('admin.shop.ajax-selling') }}";
      $.ajax({
        url: url,
        data:{
          id: id,
          selling: selling,
        },
          success: function(data){
            $("#result-"+id).html(data);
            // alert(selling);
        },
      });
    }
});
</script>