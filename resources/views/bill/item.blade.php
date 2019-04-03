@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body ">
            <ul class="nav nav-pills nav-pills-warning" role="tablist">
                @foreach($data as $key=>$category_items_array)
                    <li class="nav-item">
                        <a class="nav-link @if($key == 'Katti Roll') active show @endif" data-toggle="tab" href="#link{{$key}}" role="tablist">
                            {{$key}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content tab-space">
                @foreach($data as $key => $category_items_array)
                <div class="tab-pane @if($key == 'Katti Roll') active show @endif" id="link{{$key}}">
                    <div class="row">
                    @foreach($category_items_array as $raw_item_key => $row_item)
                        <div class="col-md-6" style="align-content: center">
                            <button type="button" class="btn btn-social btn-fill btn-tumblr" style="width: 350px;" @if($row_item['disabled'])disabled="disabled"@endif @click="addItemToBill(&quot;{{$row_item['id']}}&quot;,&quot;{{$row_item['name']}}&quot;,&quot;{{$row_item['price']}}&quot;,&quot;{{$row_item['discount_percentage']}}&quot;,&quot;{{$row_item['after_discount_price']}}&quot;);">
                                <b>{{$row_item['name']}}</b>,
                                Price: ₹{{$row_item['price']}},<br/>
                                Discount: {{$row_item['discount_percentage']}}%,
                                Discounted: ₹{{$row_item['after_discount_price']}}
                            </button>
                        </div>
                    @endforeach
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('extra-scripts')
@show
