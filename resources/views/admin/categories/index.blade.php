@extends('layouts.admin')

@section('content')
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<style type="text/css">
    body {
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    line-height: 18px;
    background: #f4f4f4;
}
    .list-wrapper {
    padding: 15px;
    overflow: hidden;
}

.list-item {
    border: 1px solid #EEE;
    background: #FFF;
    margin-bottom: 10px;
    padding: 10px;
    box-shadow: 0px 0px 10px 0px #EEE;
}

.list-item h4 {
    color: #FF7182;
    font-size: 18px;
    margin: 0 0 5px;    
}

.list-item p {
    margin: 0;
}

.simple-pagination ul {
    margin: 0 0 20px;
    padding: 0;
    list-style: none;
    text-align: center;
}

.simple-pagination li {
    display: inline-block;
    margin-right: 5px;
}

.simple-pagination li a,
.simple-pagination li span {
    color: #666;
    padding: 5px 10px;
    text-decoration: none;
    border: 1px solid #EEE;
    background-color: #FFF;
    box-shadow: 0px 0px 10px 0px #EEE;
}

.simple-pagination .current {
    color: #FFF;
    background-color: #FF7182;
    border-color: #FF7182;
}

.simple-pagination .prev.current,
.simple-pagination .next.current {
    background: #e04e60;
}
</style>
<style type="text/css">
    .tooltip {
    display:inline-block;
    position:relative;
    border-bottom:1px dotted #666;
    text-align:left;
}
</style>
<!-- search -->
<script type="text/javascript">
     $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- sorting -->
<script type="text/javascript">
    $(function () {
  $('table')
    .on('click', 'th', function () {
      var index = $(this).index(),
          rows = [],
          thClass = $(this).hasClass('asc') ? 'desc' : 'asc';

      $('#example th').removeClass('asc desc');
      $(this).addClass(thClass);

      $('#example tbody tr').each(function (index, row) {
        rows.push($(row).detach());
      });

      rows.sort(function (a, b) {
        var aValue = $(a).find('td').eq(index).text(),
            bValue = $(b).find('td').eq(index).text();

        return aValue > bValue
             ? 1
             : aValue < bValue
             ? -1
             : 0;
      });

      if ($(this).hasClass('desc')) {
        rows.reverse();
      }

      $.each(rows, function (index, row) {
        $('#example tbody').append(row);
      });
    });
});
</script>

        <div class="card">
            <div class="card-header">
                <h3>Category List
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary float-right">
                        <i class="fa fa-plus"></i>
                    </a>
                </h3>     
            </div>
            <br>
             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="width: 300px;margin-left:49.4rem;">
              <div class="list-wrapper">
             <div class="list-item">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Product Count</th>
                                <th>Image</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                                  @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->products_count }}</td>
                                    <td>
                                        @if($category->photo)
                                            <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                                <img src="{{ $category->photo->getUrl() }}" width="50px" height="50px">
                                            </a>
                                        @else
                                            <span class="badge badge-warning">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $category->parent->name ?? 'Null' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form onclick="return confirm('are you sure ?');" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                               &nbsp; <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection