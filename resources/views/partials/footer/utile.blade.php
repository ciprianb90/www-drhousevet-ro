<div class="single-item col-lg-2 col-md-6 item">
    <div class="f-item link">
        <h4 class="widget-title">Linkuri Utile</h4>
        <ul>
            @foreach(F1::getDataOfModel('page') as $row)
                <li><a href="{{ url($row->slug) }}">{{ $row->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>