@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    Value Content
                </div>
                <div class="card-body">
                    <div id="table-data-toolbar">
                        <a href="{{route('app.value_content.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                    <table id="table-data"></table>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(function(){

            $('#table-data').bootstrapTable({
                toolbar: "#table-data-toolbar",
                classes: 'table table-striped table-no-bordered',
                search: true,
                showRefresh: true,
                iconsPrefix: 'fa',
                // showToggle: true,
                // showColumns: true,
                // showExport: true,
                // showPaginationSwitch: true,
                pagination: true,
                pageList: [10, 25, 50, 100, 'ALL'],
                // showFooter: false,
                sidePagination: 'server',
                url: '{{route('app.value_content.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/value_content/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/value_content/' + value}" class="d-inline" onsubmit="return confirm('Anda yakin ingin menghapus data ${row.nama}?')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            `;
                        }
                    },
                    {
                        field: 'title',
                        title: 'Title',
                    },

                    {
                        field: 'description',
                        title: 'Description',
                    },
                   
                    {
                        field: 'image_file',
                        title: 'Image File',
                        formatter: function(image_file, row){
                            return '<img src="'+ row.image_url +'" style="width: 200px;" />';
                        }
                    },
                    {
                        field: 'created_at',
                        title: 'Created at',
                    },
                    {
                        field: 'updated_at',
                        title: 'Updated at',
                    },
                ]
            });

        });
    </script>
@endsection
