<div>
     <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->title }}</td>
            <td><button wire:click="download('{{ $image->filepath }}')" class="btn btn-success">Download</button></td>
        </tr>

            @endforeach
        </tbody>

     </table>

     {{ $images->links() }}

</div>
