<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <link href="/client/style.css" rel="stylesheet" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="header">
                <h1>Notes</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
        <h2>Category</h2>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    @foreach($categories as $category)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $category->id }}"
                    aria-expanded="true" aria-controls="collapseOne">
                    {{ $category->name }}
                </a>
            </h4>
        </div>
        <div id="collapseOne{{ $category->id }}" class="panel-collapse collapse in" role="tabpanel"
            aria-labelledby="headingOne">
            <div class="panel-body">
                @foreach($notes as $note)
                     @foreach($category->note_id as $list)
                         @if($list == $note->id)
                <a href="#">
                    {{ $note->name}}
                </a>
                <br>
                       @endif

                    @endforeach

                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<div class="col-sm-9 col-md-9 col-lg-9">
    @yield('content')
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>