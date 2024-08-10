div class="row">
    <div class="col-sm-8 col-md-6 m-auto">
        <ol class="list-group">
            @forelse ($pasarBuah as $val)
                <li class="list-goup-item">{{$val}}</li>
            @empty
                <div class="alert-drak d-inline-block">Tidak ada data...</div>
            @endforelse
        </ol>
    </div>